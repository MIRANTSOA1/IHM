<?php 
  session_start();
  if (isset($_SESSION['SESSION_EMAIL'])) {
      header("Location: ./frontend/html/etudiant.php ");
      die();
  }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">
    
        <!-- Title Page-->
        <title>IDENTIFIEZ-VOUS</title>
    
        <!-- Fontfaces CSS-->
        <link href="./frontend/css/font-face.css" rel="stylesheet" media="all">
        <link href="./frontend/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="./frontend/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="./frontend/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    
        <!-- Bootstrap CSS-->
        <link href="./frontend/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    
        <!-- Vendor CSS-->
        <link href="./frontend/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="./frontend/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="./frontend/vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="./frontend/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="./frontend/vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="./frontend/vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="./frontend/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    
        <!-- Main CSS-->
        <link href="./frontend/css/theme.css" rel="stylesheet" media="all">
        <style>
            .wrong{
                border: 2px solid rgb(158, 19, 19);
            }
        </style>
    </head>
    <body class="animsition">
        <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <img src="./frontend/images/icon/logo.png" alt="CoolAdmin">
                            </div>
                            <div class="login-form">
                                <form id="form_login">
                                    <div class="form-group">
                                        <label>Adresse Email</label>
                                        <input class="au-input au-input--full" type="email" name="email" id="couleur" placeholder="example@gmail.com" >
                                    </div>
                                    <div class="form-group">
                                        <label>Mot de passe</label>
                                        <input class="au-input au-input--full" type="password" name="password" id="couleur1" placeholder="Mot de passe" >
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <a href="#">Mot de passe oublié?</a>
                                        </label>
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="button" id="connecter">Se connecter</button>
                                </form>
                                <div class="register-link">
                                    <p>
                                        Nous n'obtiendrons en aucun cas de votre mot de passe.
                                    </p>
                                </div>
                                <div class="register-link">
                                    <p>
                                        Avez-vous un compte?
                                        <a href="./frontend/html/register.php">Creer ici</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery JS-->
        <script src="./frontend/vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="./frontend/vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="./frontend/vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="./frontend/vendor/slick/slick.min.js">
        </script>
        <script src="./frontend/vendor/wow/wow.min.js"></script>
        <script src="./frontend/vendor/animsition/animsition.min.js"></script>
        <script src="./frontend/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="./frontend/vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="./frontend/vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="./frontend/vendor/circle-progress/circle-progress.min.js"></script>
        <script src="./frontend/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="./frontend/vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="./frontend/vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="./frontend/js/main.js"></script>
        <script>
            $("#connecter").on('click',function() {
                fonction_login();
            });
            function fonction_login() {
                $.ajax({
                    type : "POST",
                    url : "./backend/login/login.php",
                    dataType :"json",
                    data : $("#form_login").serialize(),
                    success : function(response) {
                        $.each(response, function(index, value) {
                            if(value == "v"){
                                window.location.href = "./frontend/html/etudiant.php";
                            }else{
                                $("#couleur").addClass("wrong");
                                $("#couleur1").addClass("wrong");
                            }
                        });
                    }
                });
            }
        </script>
    </body>
</html>