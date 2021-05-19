<?php
session_start(); 
if (isset($_SESSION['username'])) {
  header("Location: ../index.php");
}
else {
  echo("<script>var navbarType = 'outsession_navbar.html';</script>");
}
?>

<head>
    <title>Sign-up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://kit.fontawesome.com/a1b5315d4a.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>


    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
  
</head>

<body>
  <div id="navbar"></div>
    <div class="container-custom">
        <div class="myCard">
            <div class="row">
                <div class="col-md-6">
                    <div class="myLeftCtn">
                        <form action="php/signup-form.php" method="POST" class="myForm text-center" name="registr" onsubmit="return validateRegistration()">
                            <header>Create new account</header>
                            <div class="form-control">
                                <i class="fas fa-cat"></i>
                                <input name="username" type="text" id="username" placeholder="Username" class="myInput">
                            </div>
                            <div class="form-control">
                                <i class="fas fa-envelope"></i>
                                <input name="email" class="myInput" type="email" id="email" placeholder="Email">
                            </div>
                            <div class="form-control">
                                <i class="fas fa-lock"></i>
                                <input name="password"class="myInput" type="password" id="password" placeholder="Password">
                            </div>
                            <br/>
                            <input name="registration-button" type="submit" value="CREATE ACCOUNT" class="butt">
                            <br/>
                            <br/>
                            <button class="butt"><a href="../login/index.php">I already have an account</a></button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="myRightCtn d-flex justify-content-center align-items-center">
                        <img src="../assets/img/pusheen/carino.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/main.js" type="text/javascript" lang="javascript"></script>

</body>