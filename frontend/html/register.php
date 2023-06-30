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
    <title>Register</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">
    <style>
        .mitovy{
            /* background-color: green; */
            border: 2px solid green;
        }
        .tsy_mitovy{
            /* background-color: red; */
            border: 2px solid red;
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
                            <a href="#">
                                <img src="../images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post" id="ajoutcompte">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Votre nom">
                                </div>
                                <div class="form-group">
                                    <label>Adresse email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="exemple@gmail.com">
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input id="pass" class="au-input au-input--full" title="Il est mieux que votre mot de passe contient des caractères spéciaux pour plus de sécurité..." type="password" name="password" placeholder="exemple_12ftr%_azeFDR">
                                </div>
                                <div class="form-group">
                                    <label>Confirmer le mot de passe</label>
                                    <input id="confpass" class="au-input au-input--full" type="password" name="confpassword" placeholder="exemple_12ftr%_azeFDR">
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="button" id="bouton_creer">Créer</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Avez-vous déja un compte?
                                    <a href="../../index1.php">Se connecter</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="../vendor/slick/slick.min.js">
    </script>
    <script src="../vendor/wow/wow.min.js"></script>
    <script src="../vendor/animsition/animsition.min.js"></script>
    <script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="../vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="../vendor/circle-progress/circle-progress.min.js"></script>
    <script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="../vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>
    <!-- <script>
        $('#bouton_creer').click(function(event){
            event.preventDefault();
            $.ajax({ 
                type : "POST", url : "../../backend/login/register.php", 
                data : $("#ajoutcompte").serialize(),
                success : $("#ajoutcompte").trigger('reset')        
            });
        });
    </script> -->
    <script>
        $(document).ready(function() {
        // Récupérer les éléments des formulaires
            $('#confpass').on('input', function(){
                var input1 = $('#pass').val();
                if (input1 !== $(this).val()) {
                    $('#confpass').addClass("tsy_mitovy");
                    $('#confpass').removeClass("mitovy");
                    console.log("tsy mitovy");  
                } else {
                    $('#confpass').removeClass("tsy_mitovy");
                    $('#confpass').addClass("mitovy");
                    $('#bouton_creer').click(function(event){
                        event.preventDefault();
                        $.ajax({ 
                            type : "POST", url : "../../backend/login/register.php", 
                            data : $("#ajoutcompte").serialize(),
                            success : $("#ajoutcompte").trigger('reset')        
                    });
            });
                    console.log("mitovy");  
                }
            });
        });
    </script>
</body>
</html>
<!-- end document-->