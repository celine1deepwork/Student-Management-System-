<?php
// Instructor.php

class Instructor
{
    private $pdo;

    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getCourses($instructor_id, $year, $semester)
    {
        $sql = "SELECT DISTINCT c.courseCode, c.courseName, c.ects 
                FROM course c
                INNER JOIN sectionn s ON s.courseCode = c.courseCode
                WHERE s.issn = :instructor_id AND s.yearr = :year AND s.semester = :semester";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['instructor_id' => $instructor_id, 'year' => $year, 'semester' => $semester]);
        return $stmt->fetchAll();
    }

    public function getWeeklySchedule($instructor_id)
    {
        $sql = "SELECT * FROM weekly_schedule WHERE instructor_id = :instructor_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['instructor_id' => $instructor_id]);
        return $stmt->fetchAll();
    }

    public function getStudentsInCourse($course_id)
    {
        $sql = "SELECT students.* FROM students JOIN course_student ON students.id = course_student.student_id WHERE course_student.course_id = :course_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['course_id' => $course_id]);
        return $stmt->fetchAll();
    }

    public function getProjectsLed($instructor_id)
    {
        $sql = "SELECT * FROM projects WHERE lead_instructor_id = :instructor_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['instructor_id' => $instructor_id]);
        return $stmt->fetchAll();
    }

    public function getAdvisedStudents($instructor_id)
    {
        $sql = "SELECT * FROM students WHERE advisor_id = :instructor_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['instructor_id' => $instructor_id]);
        return $stmt->fetchAll();
    }

    public function getSupervisedGraduateStudents($instructor_id)
    {
        $sql = "SELECT * FROM students WHERE supervisor_id = :instructor_id AND student_type = 'graduate'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['instructor_id' => $instructor_id]);
        return $stmt->fetchAll();
    }

    public function getFreeHoursReport($instructor_id, $year, $semester)
    {
        $sql = "SELECT T.dayy, T.hourr
                FROM timeslot T
                WHERE (T.dayy, T.hourr) NOT IN (
                    SELECT W.dayy, W.hourr
                    FROM enrollment E
                    NATURAL JOIN weeklyschedule W
                    WHERE E.yearr = :year AND E.semester = :semester AND E.sssn = :instructor_id
                )";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['instructor_id' => $instructor_id, 'year' => $year, 'semester' => $semester]);
        return $stmt->fetchAll();
    }

    public function getExamsForSemester($instructor_id, $year, $semester)
    {
        $sql = "SELECT * FROM exams WHERE instructor_id = :instructor_id AND year = :year AND semester = :semester";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['instructor_id' => $instructor_id, 'year' => $year, 'semester' => $semester]);
        return $stmt->fetchAll();
    }

    public function getResultListForExam($exam_id)
    {
        $sql = "SELECT * FROM result_list WHERE exam_id = :exam_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['exam_id' => $exam_id]);
        return $stmt->fetchAll();
    }

}

?>