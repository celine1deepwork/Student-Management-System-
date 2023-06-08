<?php
include "inc/navbar.php";

session_start();

include "../db_connect.php";
include "student/Student.php";

//$teachers = getAllTeachers($conn); çağırılacak metod parameter
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Teachers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php
    include "inc/navbar.php";
    ?>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">getCourses</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">getGradeReport</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">isGraduate</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">getAdvisor</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">getRequiredCourses</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">getDepartment</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">getSupervisor</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">getProjects</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">getCurriculumCourses</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">getTimetable</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">getGradeReport</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">getCourseGrades</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>
    <div class="container mt-5">
        <a href="student/Student.php" class="btn btn-dark">getExamScores</a>

        <div class="table-responsive">
            <table class="table table-bordered mt-3 n-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Student Name</th>
                        <th scope="col">Course Name</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- tablo içinde sıralanacak veriler php ile yazılacak -->
                    </td>
                    <td>
                        <!-- tablo içinde sıralanacak veriler php ile yazılacak (metod çağırma) -->
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                    </tr>

                </tbody>
            </table>
        </div>
        <!-- <?php ?> burada da else ile hata döndürülecek php ile
            <div class="alert alert-info .w-450 m-5" role="alert">
                Empty!
            </div>
        <?php ?> -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // $(document).ready(function () {
        //     $("#navLinks li:nth-child(2) a").addClass('active');
        // });
    </script>

</body>

</html>

?>