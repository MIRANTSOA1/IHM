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
    <title>Note</title>

    <!-- Fontfaces CSS-->
    <link href="../css/font-face.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">
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
                            <form class="form-header">
                                <input class="au-input au-input--xl" type="text" id="rechercher" placeholder="Rechercher" />
                                <button class="au-btn--submit">
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
                                            <img src="../images/icon/avatar-01.jpg" alt="IHM Projet" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">IHM Projet</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="../images/icon/avatar-01.jpg" alt="IHM Projet" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">IHM Projet</a>
                                                    </h5>
                                                    <span class="email">www.gnote.com</span>
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
                            <h2 class="title-1 m-b-25 text-gradient text-primary" style="background: linear-gradient(to right, #007F05, #FFFF00);-webkit-background-clip: text;-webkit-text-fill-color: transparent;" id="titre"><!-- Liste des notes par niveau--></h2>
                            </div>
                        </div>
                    <section class="p-t-20">
                        <div class="top-campaign container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-data__tool">
                                        <div class="table-data__tool-left">
                                            <div class="rs-select2--light rs-select2--md">
                                                <select class="js-select2" name="niveau" id="niveau_datatable">
                                                    <option selected="selected">Niveau</option>
                                                    <option value="L1 GB">L1 GB</option>
                                                    <option value="L1 IG">L1 IG</option>
                                                    <option value="L1 ASR">L1 ASR</option>
                                                    <option value="L2 GB">L2 GB</option>
                                                    <option value="L2 IG">L2 IG</option>
                                                    <option value="L2 ASR">L2 ASR</option>
                                                    <option value="L3 GB">L3 GB</option>
                                                    <option value="L3 IG">L3 IG</option>
                                                    <option value="L3 ASR">L3 ASR</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--light rs-select2--md">
                                                <select class="js-select2" name="matiere" id="matiere_datatable">
                                                    <!-- Remplissement automatic de la liste des matieres -->
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--light rs-select2--md">
                                                    <select class="js-select2" id="matricule_datatable">
                                                        <option selected="selected">Matricule</option>
                                                        <!-- Ajout dynamiquement des valeurs des Matricule venant de la base de donnée -->
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                        </div>
                                        <div class="table-data__tool-right">
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small btn_afficher" data-toggle="modal" data-target="#scrollmodal_ajout">
                                                <i class="zmdi zmdi-plus"></i>Ajouter
                                            </button>
                                            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                                <select class="js-select2" name="type">
                                                    <option selected="selected">Exporter</option>
                                                    <option value="">PDF</option>
                                                    <option value="">CSV</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover text-center" id= "affichage_note">

                                            <!------------ En tête de la table --------->
                                            <thead class="font-weight-bold">
                                                <tr>
                                                    <th>Matricule</th>
                                                    <th>Niveau</th>
                                                    <th>Matière</th>
                                                    <th>Note</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <!------------------------------------------>

                                            <!------------ Corps de la table --------->
                                            <tbody>
                                                <!-- Contenue generer par PHP et AJAX -->
                                            </tbody>
                                            <!------------------------------------------>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                            <!-- FIN DATA TABLE-->
                         <!-- Eto ny tableau CRUD etudiant -->
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
            <!-- Fenêtre Modale Ajout -->
            <div class="modal fade" id="scrollmodal_ajout" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true" data-backdrop="static">
				<div class="modal-dialog modal-ms" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="scrollmodalLabel">Ajouter une note</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            <div class="card-body card-block">
                                <form id="ajout_note" method="post" class="">
                                    
                                     <!-- Séléction du matricule -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-bookmark"></i>
                                            </div>
                                                <div class="rs-select2--light rs-select2--md form-control">
                                                    <select class="js-select2" name="matricule" id="matricule">
                                                        <option>Matricule</option>
                                                        <!-- Ajout dynamiquement des valeurs des Matricule venant de la base de donnée -->
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                        </div>
                                    </div>

                                    <!-- Niveau -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-graduation-cap"></i>
                                            </div>
                                            <input type="text" id="niveau_affiche" name="niveau_afficher" placeholder="Niveau" class="form-control" disabled>
                                            <input type="text" id="niveau" name="niveau" placeholder="Niveau" class="form-control" style="display: none;">
                                        </div>
                                    </div>

                                   <!-- Séléction de la matière -->
                                   <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-book"></i>
                                            </div>
                                                <div class="rs-select2--light rs-select2--md form-control">
                                                    <select class="js-select2" name="matiere" id="matiere">
                                                        <option selected="selected">Matière</option>
                                                        <!-- Ajout dynamiquement des valeurs des Matières venant de la base de donnée -->
                                                    </select>
                                                    <div class="dropDownSelect2"></div>
                                                </div>
                                        </div>
                                    </div>

                                    <!-- Séléction de la note -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clipboard"></i>
                                            </div>
                                            <input type="number" id="note" name="note" placeholder="Note" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-primary" id="btn_ajouter" disabled>Ajouter</button>
                                    </div>
                                </form>
                            </div>
						</div>	
					</div>
				</div>
            </div>
           <!-- Fenêtre Modale Modification -->
           <div class="modal fade" id="scrollmodal_modif" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true" data-backdrop="static">
				<div class="modal-dialog modal-ms" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title" id="scrollmodalLabel">Modifier une note</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
                            <div class="card-body card-block">
                                <form id="modifier_note" method="post" class="">
                                    <!-- Input Cachée -->
                                    <input type="text" id="matricule_cache" name="matricule_cache" style= 'display:none' >
                                    <input type="text" id="niveau_cache" name="niveau_cache" style= 'display:none'>
                                    <input type="text" id="matiere_cache" name="matiere_cache" style= 'display:none'>

                                    <!-- Séléction du matricule -->
                                  <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-bookmark"></i>
                                            </div>
                                            <input type="text" id="matricule_modif" name="matricule_modif" placeholder="Matricule" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Niveau -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-graduation-cap"></i>
                                            </div>
                                            <input type="text" id="niveau_modif" name="niveau" placeholder="Niveau" class="form-control">
                                        </div>
                                    </div>

                                   <!-- Séléction de la matière -->
                                   <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-book"></i>
                                            </div>
                                            <input type="text" id="matiere_modif" name="matiere_modif" placeholder="Matière" class="form-control">
                                        </div>
                                    </div>

                                    <!-- Séléction de la note -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clipboard"></i>
                                            </div>
                                            <input type="number" id="note_modif" name="note" placeholder="Note" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                                        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btn_valider">Valider</button>
                                    </div>
                                </form>
                            </div>
						</div>	
					</div>
				</div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.all.min.js"></script>

    <!-- Main JS-->
    <script src="../js/main.js"></script>
    <script src="../../controlleur/note.js"></script>
</body>

</html>
<!-- end document-->
