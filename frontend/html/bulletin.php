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
    <title>Bulletin</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="../vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- ../vendor CSS-->
    <link href="../vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="../vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="../vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="../vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="../vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index_.html">
                            <img src="../images/icon/logo1.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            
                        </li>
                        <li>
                            <a href="etudiant.php">
                                <i class="fas fa-chart-bar"></i>Etudiants</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>
                                Matière
                            </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="matiere.php">Matière</a>
                                </li>
                                <li>
                                    <a href="ue.php">U.E</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="note.php">
                                <i class="far fa-check-square"></i>Notes</a>
                        </li>
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Resultats</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="bulletin.php">Relevé des note</a>
                                </li>
                                <li>
                                    <a href="classement.php">Classement</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="../images/icon/logo1.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li> 
                            <!-- Etudiant -->
                            <a href="etudiant.php">
                                <i class="fas fa-chart-bar"></i>
                                Etudiants
                            </a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>
                                Matière
                            </a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="matiere.php">Matière</a>
                                </li>
                                <li>
                                    <a href="ue.php">U.E</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="note.php">
                                <i class="far fa-check-square"></i>Notes</a>
                        </li>
                        
                        
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Résultats</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="bulletin.php">Relevé des note</a>
                                </li>
                                <li>
                                    <a href="classement.php">Classement</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Rechercher" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu"></div>
                                    <div class="noti__item js-item-menu"></div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="../images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="deconnecter.php">
                                                    <i class="zmdi zmdi-power"></i>Déconnecter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Relevé des note pour chaque étudiant</h2>
                            </div>
                        </div>
                        <div class="top-campaign">
                            <div class="row">
                            <div class="col-lg-9">
                                <div class="rs-select2--light rs-select2--md m-b-30">
                                    <select class="js-select2" name="matricule" id="matricule">
                                        <!-- Remplie dynamiquement par les matricules de la base -->
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                                <div class="rs-select2--dark rs-select2--sm rs-select2--dark2  m-b-25">
                                    <select class="js-select2" name="type">
                                        <option selected="selected">Exporter</option>
                                        <option value="">PDF</option>
                                        <option value="">CSV</option>
                                    </select>
                                    <div class="dropDownSelect2"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="text-sm h6 mt-2">Nom et prénom : </span> &nbsp<span class="text-sm-center h5 " id="nomEtudiant"></span><br>
                                        <span class="text-sm h6 mt-2">Adresse &nbsp : </span>&nbsp <span class="text-sm-center h5 " id="adresseEtudiant"></span><br>
                                        <span class="text-sm h6 mt-2">Matricule &nbsp     : </span> &nbsp<span class="text-sm-center h5 " id="matriculeEtudiant"></span><br>
                                        <span class="text-sm h6 mt-2">Niveau  &nbsp      : </span> &nbsp<span class="text-sm-center h5 " id="niveauEtudiant"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered text-center" id="affichage_bulletin">
                            <thead>
                                <tr>
                                    <th>Unité d'enseignement</th>
                                    <th>Matières</th>
                                    <th>Note/20</th>
                                    <th>Crédits</th>
                                    <th>Validation de l'UE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Contenu du tableau -->
                            </tbody>
                        </table>
                        </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2023. Tout droits réservés. Developpé <a href="#">GeekCode MG</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="../vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- ../vendor JS       -->
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
    <script src="../../controlleur/bulletin.js"></script>

</body>

</html>
<!-- end document-->
