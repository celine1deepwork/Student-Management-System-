<?php
// Student.php

class Student {
    private $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getCourses($student_id) {
        $sql = "SELECT courses.* FROM courses JOIN course_student ON courses.id = course_student.course_id WHERE course_student.student_id = :student_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['student_id' => $student_id]);
        return $stmt->fetchAll();
    }

    public function getGradeReport($student_id) {
        $sql = "SELECT * FROM grade_report WHERE student_id = :student_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['student_id' => $student_id]);
        return $stmt->fetchAll();
    }

    public function isGraduate($student_id) {
        $sql = "SELECT student_type FROM students WHERE id = :student_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['student_id' => $student_id]);
        $result = $stmt->fetch();
        return $result['student_type'] == 'graduate';
    }

    public function getAdvisor($student_id) {
        $sql = "SELECT instructors.* FROM instructors JOIN students ON instructors.id = students.advisor_id WHERE students.id = :student_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['student_id' => $student_id]);
        return $stmt->fetch();
    }

    public function getRequiredCourses($student_id) {
        $sql = "SELECT courses.* FROM courses JOIN course_student ON courses.id = course_student.course_id WHERE course_student.student_id = :student_id AND course_student.required = true";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['student_id' => $student_id]);
        return $stmt->fetchAll();
    }

    public function getDepartment($student_id) {
        $sql = "SELECT departments.* FROM departments JOIN students ON departments.id = students.department_id WHERE students.id = :student_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['student_id' => $student_id]);
        return $stmt->fetch();
    }

    public function getSupervisor($student_id) {
        $sql = "SELECT instructors.* FROM instructors JOIN students ON instructors.id = students.supervisor_id WHERE students.id = :student_id AND students.student_type = 'graduate'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['student_id' => $student_id]);
        return $stmt->fetch();
    }

    public function getProjects($student_id) {
        $sql = "SELECT projects.* FROM projects JOIN project_student ON projects.id = project_student.project_id WHERE project_student.student_id = :student_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['student_id' => $student_id]);
        return $stmt->fetchAll();
    }

    public function getCurriculumCourses($student_id) {
        $sql = "SELECT c.courseCode, c.courseName, c.ects
                FROM course c
                WHERE c.courseCode IN (
                    SELECT cu.courseCode
                    FROM curriculacourses cu
                    WHERE cu.currCode = (
                        SELECT s.currCode
                        FROM student s
                        WHERE s.studentid = :student_id
                    ) AND cu.dname = (
                        SELECT s.dname
                        FROM student s
                        WHERE s.studentid = :student_id
                    )
                )";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['student_id' => $student_id]);
        return $stmt->fetchAll();
    }

    public function getTimetable($student_id, $year, $semester) {
        $sql = "SELECT e.courseCode, e.sectionId, w.dayy, w.hourr
                FROM enrollment e
                INNER JOIN weeklyschedule w ON e.sssn = w.sssn
                WHERE e.sssn = :student_id AND e.yearr = :year AND e.semester = :semester";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['student_id' => $student_id, 'year' => $year, 'semester' => $semester]);
        return $stmt->fetchAll();
    }

    public function getGradeReport($student_id) {
        $sql = "SELECT e.courseCode, e.yearr, e.semester, e.grade
                FROM enrollment e
                WHERE e.sssn = :student_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['student_id' => $student_id]);
        return $stmt->fetchAll();
    }

    public function getCourseGrades($student_id, $course_code, $year, $semester) {
        $sql = "SELECT e.courseCode, e.sectionId, e.sssn, e.grade
                FROM enrollment e
                WHERE e.courseCode = :course_code AND e.yearr = :year AND e.semester = :semester";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['course_code' => $course_code, 'year' => $year, 'semester' => $semester]);
        return $stmt->fetchAll();
    }

    public function getExamScores($student_id, $course_code) {
        $sql = "SELECT ste.examname, sum(gpq.pointsEarned) as score
                FROM studenttakingexam ste
                INNER JOIN gradesperquestion gpq ON ste.courseCode = gpq.courseCode
                WHERE ste.courseCode = :course_code AND ste.sssn = :student_id
                GROUP BY ste.examname";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['course_code' => $course_code, 'student_id' => $student_id]);
        return $stmt->fetchAll();
    }
}

?>
