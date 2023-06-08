<?php
session_start();

include "../db_connect.php";
include "teacher/Instructor.php";

//$teachers = getAllTeachers($conn); burada backendden kullanılacak fonksiyonlar parametreye eşlenip kullanılır  alttaki tabloda
/*
örnekler alttaki A ve B bölümü için : 
A : 
    <?php foreach ($teachers as $teacher ) { ?>
                  <tr>
                    <th scope="row">1</th>
                    <td><?=$teacher['teacher_id']?></td>
                    <td><?=$teacher['fname']?></td>
                    <td><?=$teacher['lname']?></td>
                    <td><?=$teacher['username']?></td>
                    <td>
                       <?php 
                           $s = '';
                           $subjects = str_split(trim($teacher['subjects']));
                           foreach ($subjects as $subject) {
                              $s_temp = getSubjectById($subject, $conn);
                              if ($s_temp != 0) 
                                $s .=$s_temp['subject_code'].', ';
                           }
                           echo $s;
                        ?>

        B: 
          <?php 
                           $g = '';
                           $grades = str_split(trim($teacher['grades']));
                           foreach ($grades as $grade) {
                              $g_temp = getGradeById($grade, $conn);
                              if ($g_temp != 0) 
                                $g .=$g_temp['grade_code'].'-'.
                                     $g_temp['grade'].', ';
                           }
                           echo $g;
                        ?>
*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instructors</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container mt-5">
        <a href="teacher/Instructor.php" class="btn btn-dark">getStudents </a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- A BÖLÜMÜ Buraya  backend'den tabloda gözükecek verilerin doldurma işlemi örneğin tüm öğrenciler-->

                    </td>
                    <td>
                        <!--B BÖLÜMÜ  Buraya  backend'den tabloda gözükecek verilerin doldurma işlemi örneğin Grade-->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // $(document).ready(function () {
        //     $("#navLinks li:nth-child(2) a").addClass('active');
        // });
    </script>

</body>

</html>