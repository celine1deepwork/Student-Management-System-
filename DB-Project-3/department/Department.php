<?php
// Department.php

class Department {
    private $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getStudents($department_id) {
        $sql = "SELECT s.studentid, s.studentname, s.gradorugrad, e.email
                FROM Student s
                JOIN emails e ON e.sssn = s.ssn
                WHERE s.dname = :department_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['department_id' => $department_id]);
        return $stmt->fetchAll();
    }

    public function getAdvisors($department_id) {
        $sql = "SELECT s.studentid, s.studentname, i.iname
                FROM Student s
                JOIN instructor i ON i.ssn = s.advisorSsn
                WHERE s.dname = :department_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['department_id' => $department_id]);
        return $stmt->fetchAll();
    }

    public function getInstructors($department_id) {
        $sql = "SELECT i.iname
                FROM instructor i
                WHERE i.dname = :department_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['department_id' => $department_id]);
        return $stmt->fetchAll();
    }

    public function getProjects($department_id) {
        $sql = "SELECT p.pName
                FROM project p
                WHERE p.controllingDName = :department_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['department_id' => $department_id]);
        return $stmt->fetchAll();
    }

    public function getInstructorsWithoutCourses($department_id, $year, $semester) {
        $sql = "SELECT i.iname
                FROM instructor i
                WHERE i.ssn NOT IN (
                    SELECT s.issn
                    FROM sectionn s
                    WHERE s.yearr = :year AND s.semester = :semester
                )";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['year' => $year, 'semester' => $semester]);
        return $stmt->fetchAll();
    }

    public function getInstructorsWithExtraPayment($department_id, $semester, $year) {
        $sql = "SELECT i.ssn, i.iname, (sum(course.numHours) - 10) * 50 as extraCoursePayment, COUNT(DISTINCT gradstudent.ssn) * 25 as gradStudentsPayment, sum(PI.workinghour) * 100 as projectPayment
                FROM instructor i
                LEFT OUTER JOIN (sectionn NATURAL JOIN course) ON i.ssn = sectionn.issn
                LEFT OUTER JOIN gradstudent ON i.ssn = gradstudent.supervisorSsn
                LEFT OUTER JOIN project_has_instructor PI ON i.ssn = PI.issn
                WHERE (sectionn.yearr = :year AND sectionn.semester = :semester) OR (sectionn.yearr IS NULL AND sectionn.semester IS NULL)
                GROUP BY i.ssn";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['year' => $year, 'semester' => $semester]);
        return $stmt->fetchAll();
    }

    public function getAverageSalaryByDepartment() {
        $sql = "SELECT i.dName, AVG(i.baseSal) as averageBaseSalary
                FROM instructor i
                GROUP BY i.dName";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}

?>
