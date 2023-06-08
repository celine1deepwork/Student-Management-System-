<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
    <link rel="icon" href="img/logo2.png">

</head>

<body class="body-home">
    <div class="black-fill"><br /> <br />
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-light" id="homeNav">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="img/logo2.png" width="40"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-right mb-2 mb-lg-0">
                            <li class="nav-item" style="margin-top:5px">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item" style="margin-top:5px">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item" style="margin-top:5px">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                            <?php
                            include "inc/navbar.php";
                            ?>
                        </ul>
                    </div>
                    <ul class="navbar-nav me-right mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="loginPanel.php">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div>
                <section class="welcome-txt d-flex justify-content-center align-items-center flex-column">
                    <div class="opacity-50 ">
                        <img src="img/torch.png">
                    </div>
                    <h4>Welcome to Isık University</h4>
                    <p> Işık University, which started its education life in 1996, has 23 undergraduate programs in 3
                        faculties, associate degree with 9 programs in 1 college, graduate education with and without
                        thesis
                        at the Graduate Education Institute, 43 master's and 6 doctorate programs in Turkish and
                        English,
                        and education opportunities for students with the School of Foreign Languages. provides.<br />
                        <br />

                        Işık University, which came to life with the 137 years of culture of the Feyziye Schools
                        Foundation,
                        has a modern infrastructure that can meet today's needs, classrooms, dormitories, libraries,
                        social
                        and sports facilities, an art gallery, Şile Campus built on an area of 490 thousand square
                        meters
                        and Maslak in the center of the business world in Istanbul. It serves with its campus.<br />
                        <br />

                        Işık University; It is the first choice of students in higher education with its strong academic
                        staff, multi-purpose modern campuses, multi-national, multi-cultural university life, vibrant
                        and
                        social campus life, participatory education understanding, wide success-oriented scholarship
                        opportunities, and exemplary performance of more than 14 thousand graduates in business and
                        career
                        life. between.
                    </p>
                </section>

                <section id="about" class="justify-content-center align-items-center" style="padding:20px">
                    <div class="card mb-3 card-1">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="img/torch.png" class="img-fluid rounded-start opacity-50">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">E-Campus</h5>
                                    <p class="card-text">Spend more and productive time on your students and academic
                                        life with e-Campus!
                                        Control your course contents, weekly schedule, student lists, reports, grades
                                        and more on a single platform.<br />
                                        Reach students more easily in course selections and quickly approve their
                                        programs. Save your time.
                                    </p>
                                    <a href="#" class="btn btn-primary">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div id="contact" class="justify-content-center align-items-center" style="padding:20px;">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Message</label>
                        <textarea class="form-control"> </textarea>
                    </div>

                    <button href="#" type=" submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>