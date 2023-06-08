<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css?v=<?php echo time(); ?>">
    <link rel="icon" href="img/logo2.png">

</head>

<body class="body-home">
    <div class="black-fill-2">
        <div class="d-flex justify-content-center align-items-center flex-column">
            <form class="login" action="index.php" method="post">
                <div class="text-center">
                    <img src="img/logo2.png" width=200>
                </div>
                <h3>LOGIN</h3>


                <label class="form-label">Email Address</label>
                <input required type="email" class="form-control" name="email" placeholder="Enter your email">
                <label class="form-label">Password</label>
                <input required type="password" class="form-control" name="pass" placeholder="Enter your password">


                <button type=" submit" class="btn btn-primary">Login</button>


            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>