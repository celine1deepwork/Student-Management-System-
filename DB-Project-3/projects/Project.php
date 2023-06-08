<?php
// Project.php

class Project {
    private $pdo;

    function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getStudents($project_id) {
        $sql = "SELECT s.studentname, ps.pName as projectName
                FROM project_has_gradstudent ps
                JOIN student s ON ps.Gradssn = s.ssn
                WHERE ps.pName = :project_id
                UNION
                SELECT i.iname, pi.pName as projectName
                FROM project_has_instructor pi
                JOIN instructor i ON pi.issn = i.ssn
                WHERE pi.pName = :project_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(['project_id' => $project_id]);
        return $stmt->fetchAll();
    }
}
?>
