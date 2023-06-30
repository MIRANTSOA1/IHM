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
                        <li>
                            <a href="matiere.php">
                                <i class="fas fa-table"></i>Matières</a>
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
                                    <a href="bulletin.php">Bulletin de note</a>
                                </li>
                                <li>
                                    <a href="classement">Classement</a>
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
                        <li>
                            <a href="matiere.php">
                                <i class="fas fa-table"></i>
                                Matières
                            </a>
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
                                    <a href="bulletin.php">Bulletin de note</a>
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
                                <h2 class="title-1 m-b-25">Liste des notes par étudiant</h2>
                            </div>
                        </div>
                    <section class="p-t-20">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-data__tool">
                                        <div class="table-data__tool-left">
                                            <div class="rs-select2--light rs-select2--md">
                                                <select class="js-select2" name="niveau" id="niveau_datatable">
                                                    <option value="all" selected="selected">Niveau</option>
                                                    <option value="Seconde">Seconde</option>
                                                    <option value="Premiere A">Première A</option>
                                                    <option value="Premiere C">Première C</option>
                                                    <option value="Premiere D">Première D</option>
                                                    <option value="Terminale A">Terminale A</option>
                                                    <option value="Terminale C">Terminale C</option>
                                                    <option value="Terminale D">Terminale D</option>
                                                </select>
                                                <div class="dropDownSelect2"></div>
                                            </div>
                                            <div class="rs-select2--light rs-select2--md">
                                                <select class="js-select2" name="matiere" id="matiere_datatable">
                                                    
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
                                    <div class="table-responsive table-responsive-data2">
                                        <table class="table table-data2" id= "affichage_note">

                                            <!------------ En tête de la table --------->
                                            <thead>
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
                                        <div id="pagination-container">
                                            <ul id="pagination" class="pagination justify-content-center"></ul>
                                        </div>
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
                                                        <option selected="selected">Matricule</option>
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
                                            <input type="text" id="niveau" name="niveau" placeholder="Niveau" class="form-control">
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
                                        <button type="button" class="btn btn-primary" id="btn_ajouter">Ajouter</button>
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

    <!-- Main JS-->
    <script src="../js/main.js"></script>
    <script>
        $(document).ready(function() {
            //Remplissement de la liste Matricule.
            $('.btn_afficher').click(function() { 
                $.ajax({
                    url: '../../backend/note/getMatricule.php',
                    method: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        $('#matricule').empty();
                        $('#matricule').append($('<option>').text('Matricule').attr('selected', 'selected'));
                        $.each(response.matricule, function(index, value) {
                            $('#matricule').append($('<option>').text(value).attr('value', value));
                        });
                    }
                });
            });

            //Remplissement de la liste des matieres pour la recherche.
            $.ajax({
                url: '../../backend/note/getAllMatiere.php',
                method: 'GET',
                dataType: 'json',
                success: function(response) {
                    $('#matiere_datatable').empty();
                    $('#matiere_datatable').append($('<option>').text('Matière').attr('value', 'all'));
                    $.each(response.matieres, function(index, value) {
                        $('#matiere_datatable').append($('<option>').text(value).attr('value', value));
                    });
                }
            });

            //Remplissement automatique du champ Niveau et de la liste des matières.
            $('#matricule').on('change', function() {                
                // Appel AJAX pour récupérer le niveau correspondant à la matricule
                $.ajax({
                    url: '../../backend/note/getNiveau.php',
                    method: 'POST',
                    data: { matricule: $("#matricule").val() },
                    dataType: 'json',
                    success: function(response) {
                            $('#niveau').val(response.niveau);
                        // Appel AJAX pour récupérer les matières correspondant au niveau
                        $.ajax({
                            url: '../../backend/note/getMatiere.php',
                            method: 'POST',
                            data: { niveau: response.niveau },
                            dataType: 'json',
                            success: function(response) {
                                $('#matiere').empty();
                                $('#matiere').append($('<option>').text('Matière').attr('selected', 'selected'));
                                $.each(response.matieres, function(index, value) {
                                    $('#matiere').append($('<option>').text(value).attr('value', value));
                                });
                            }
                        });
                    }
                });
            });

            //Affichage des données sur le tableau
            function affichage(page) {
                $.ajax({
                    url: "../../backend/note/affichage_note.php",
                    success: function(data) {
                        $("#affichage_note tbody").empty();

                        // Parcourir les données et les ajouter au tableau
                        $.each(data, function(index, item) {
                            var row = $("<tr>").addClass("tr-shadow");
                            $("<td>").text(item.matricule).appendTo(row);
                            var tdEmail = $("<td>");
                            $("<span>").text(item.niveau).addClass("block-email").appendTo(tdEmail);
                            tdEmail.appendTo(row);
                            $("<td>").text(item.matiere).addClass("desc").appendTo(row);
                            $("<td>").text(item.note).appendTo(row);
                
                            // Ajouter les boutons d'action à la dernière colonne
                            var actions = $('<div class="table-data-feature">');
                            var btnModifier = $('<button class="item btn_modifier" type="button" id="btn_modifier" data-toggle="modal" data-target="#scrollmodal_modif">');
                            btnModifier.append('<i class="zmdi zmdi-edit"></i>');
                            var btnSupprimer = $('<button class="item btn_supprimer" type="button" id="btn_supprimer">');
                            btnSupprimer.append('<i class="zmdi zmdi-delete"></i>');
                            actions.append(btnModifier);
                            actions.append(btnSupprimer);
                            $("<td>").append(actions).appendTo(row);
                            row.appendTo("#affichage_note tbody");
                            var spacerRow = $("<tr>").addClass("spacer");
                            $("#affichage_note tbody").append(spacerRow);
                        });
                        updatePagination(data.totalPages, data.currentPage);
                    }
                });
            }
                            
                function updatePagination(totalPages, currentPage) {
                var pagination = $('#pagination');
                pagination.empty();
                
                // Crée les boutons de pagination
                for (var i = 1; i <= totalPages; i++) {
                    var li = $('<li class="page-item"></li>');
                    var link = $('<a class="page-link" href="#">' + i + '</a>');
                    if (i === currentPage) {
                    li.addClass('active');
                    }
                    (function(page) {
                    link.click(function() {
                        fetchData(page);
                    });
                    })(i);
                    li.append(link);
                    pagination.append(li);
                }
                }
            
            //Ajout d'une Note
            $('#btn_ajouter').click(function(event){
                event.preventDefault();
                $.ajax({ type : "POST",url : "../../backend/note/ajout_note.php", data : $("#ajout_note").serialize(),success : function(result) { 
                    $("#ajout_note").trigger('reset');
                    affichage();
                }});

            });

            //Afficher les valeurs de la ligne de tableau séléctionnée sur la fenetre modification
            $('#affichage_note').on('click', '.btn_modifier',function(event){
                event.preventDefault();
                var ligne = $(this).closest('tr');
                var valeurTd = ligne.find('td');

                $('#matricule_modif').val($(valeurTd[0]).text()).prop('disabled', true);
                $('#niveau_modif').val($(valeurTd[1]).text()).prop('disabled', true);
                $('#matiere_modif').val($(valeurTd[2]).text()).prop('disabled', true);
                $('#note_modif').val($(valeurTd[3]).text());
                $('#matricule_cache').val($(valeurTd[0]).text());
                $('#niveau_cache').val($(valeurTd[1]).text());
                $('#matiere_cache').val($(valeurTd[2]).text());
            });

            //Modifier note
            $('#btn_valider').click(function(event){
                event.preventDefault();
                $.ajax({ type : "POST",url : "../../backend/note/modifier_note.php", data : $("#modifier_note").serialize(),success : function(result) { 
                    $("#modifier_note").trigger('reset');
                   affichage();
                }});

            });

            //Supprimer Note
            $('#affichage_note tbody').on('click', '.btn_supprimer',function(event){
                event.preventDefault();
                var ligne = $(this).closest('tr');
                var valeurTd = [];
                ligne.find('td').each(function() {
                    valeurTd.push($(this).text());
                });
                $.ajax({ type : "POST",url : "../../backend/note/supprimer_note.php", data : JSON.stringify(valeurTd) , success : function(result) { 
                   affichage();
                }});            
            });

            //Recherche par Niveau avec le menu select
            $('#niveau_datatable').change(function(event){
                event.preventDefault();
                $.ajax({ type : "POST",url : "../../backend/note/recherche_note.php", data : {recherche : $(this).val()},success : function(result) { 
                    $("#affichage_note tbody").html(result);
                }});

            });

            //Recherche par Matière avec le menu select
            $('#matiere_datatable').change(function(event){
                event.preventDefault();
                $.ajax({ type : "POST",url : "../../backend/note/recherche_matiere_note.php", data : {recherche : $(this).val()},success : function(result) { 
                    $("#affichage_note tbody").html(result);
                }});

            });

            //Recherche all
            $('#rechercher').on('keyup',function(event){
                event.preventDefault();
                $.ajax({ type : "POST",url : "../../backend/note/recherche_all.php", data : {recherche : $(this).val()},success : function(result) { 
                    $("#affichage_note tbody").html(result);
                }});

            });

            $('#niveau_datatable').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                createTag: function(params) {
                    return {
                        id: params.term,
                        text: params.term,
                        isNew: true
                    };
                }
            });

            //SELECT editable
            $('#matricule').select2({
                tags: true,
                createTag: function(params) {
                    return {
                        id: params.term,
                        text: params.term,
                        isNew: true
                    };
                }
            });

            $('#matiere').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                createTag: function(params) {
                    return {
                        id: params.term,
                        text: params.term,
                        isNew: true
                    };
                }
            });

            $('#matiere_datatable').select2({
                tags: true,
                tokenSeparators: [',', ' '],
                createTag: function(params) {
                    return {
                        id: params.term,
                        text: params.term,
                        isNew: true
                    };
                }
            });

            affichage(1);
        });
    </script>
</body>

</html>
<!-- end document-->
