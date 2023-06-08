<?php
// Course.php

class Course {
    private $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getStudents($course_id) {
        $sql = "SELECT students.* FROM students JOIN course_student ON students.id = course_student.student_id WHERE course_student.course_id = :course_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['course_id' => $course_id]);
        return $stmt->fetchAll();
    }
}

?>
