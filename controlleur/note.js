$(document).ready(function() {
    //Remplissement de la liste Matricule pour la recherche.
    $.ajax({
        url: '../../backend/note/getMatricule.php',
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            $('#matricule_datatable').empty();
            $('#matricule_datatable').append($('<option>').text('Matricule').attr('selected', 'selected'));
            $.each(response.matricule, function(index, value) {
                $('#matricule_datatable').append($('<option>').text(value).attr('value', value));
            });
        }
    });

    //Remplissement de la liste Matricule Pour l'ajout.
    function remplirSelectMatricule() {
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
    }
    
    $('.btn_afficher').click(function() { 
       remplirSelectMatricule();
    });

    //Remplissement de la liste des matieres pour la recherche.
    $.ajax({
        url: '../../backend/note/getAllMatiere.php',
        method: 'GET',
        dataType: 'json',
        success: function(response) {
            $('#matiere_datatable').empty();
            $('#matiere_datatable').append($('<option>').text('Matière'));
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
                    $('#niveau_affiche').val(response.niveau);
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
    function affichage() {
        $.ajax({
            url: "../../backend/note/affichage_note.php",
            success: function(data) {
                $("#affichage_note tbody").empty();
                // Parcourir les données et les ajouter au tableau
                $.each(data, function(index, item) {
                    var row = $("<tr>").addClass("tr-shadow");
                    $("<td>").text(item.matricule).appendTo(row);
                    var tdEmail = $("<td>");
                    $("<span>").text(item.niveau).appendTo(tdEmail);
                    tdEmail.appendTo(row);
                    $("<td>").text(item.matiere).addClass("desc").appendTo(row);
                    $("<td>").text(item.note).appendTo(row);
        
                    // Ajouter les boutons d'action à la dernière colonne
                    var actions = $('<div class="table-data-feature">');
                    var btnModifier = $('<button class="item btn_modifier" type="button" id="btn_modifier" data-toggle="modal" data-target="#scrollmodal_modif">');
                    btnModifier.append('<i class="zmdi zmdi-edit"></i>');
                    var btnSupprimer = $('<button class="item btn_supprimer" type="button" id="btn_supprimer" data-toggle="modal" data-target="#scrollmodal_supprimer">');
                    btnSupprimer.append('<i class="zmdi zmdi-delete"></i>');
                    actions.append(btnModifier);
                    actions.append(btnSupprimer);
                    $("<td>").append(actions).appendTo(row);
                    row.appendTo("#affichage_note tbody");
                    var spacerRow = $("<tr>").addClass("spacer");
                    $("#affichage_note tbody").append(spacerRow);
                });
            }
        });
    }
       //Activer le bouton si es formulaire sont rempli
    $('#ajout_note input:enabled, #ajout_note select').on('input change',function () {
        var formulaireValide = true;
        if ($('#matricule').val() === 'Matricule') {
            formulaireValide = false;
        }
        if ($('#matiere').val() === 'Matière') {
            formulaireValide = false;
        }
        if ($('#note').val() == '') {
            formulaireValide = false;
        }        
        if(formulaireValide){
            $('#btn_ajouter').prop('disabled', false);
        }
        else{
            $('#btn_ajouter').prop('disabled', true);
        }
    });

                    
    //Ajout d'une Note
    $('#btn_ajouter').click(function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/note/ajout_note.php", data : $("#ajout_note").serialize(),success : function(result) {
            if(result === "erreur"){
                const messageerror = Swal.mixin({
                    toast : true,
                    position : 'top-end',
                    icon : 'error',
                    title : "La note de ce matricule existe déjà pour cette matière.",
                    showConfirmButton : false,
                    timer : 5000,
                    timerProgressBar : true
                });
                messageerror.fire();
            }
           else if(result === "success"){
                const messageSucces = Swal.mixin({
                    toast : true,
                    position : 'top-end',
                    icon : 'success',
                    title : "Ajout avec succes",
                    showConfirmButton : false,
                    timer : 3000,
                    timerProgressBar : true
                });
                messageSucces.fire();
                $("#ajout_note").trigger('reset');
                remplirSelectMatricule();
                affichage();
            }
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
            const messageSucces = Swal.mixin({
                toast : true,
                position : 'top-end',
                icon : 'success',
                title : "Modifier avec succès",
                showConfirmButton : false,
                timer : 2500,
                timerProgressBar : true
            });
            messageSucces.fire(); 
            $("#modifier_note").trigger('reset');
           affichage();
        }});

    });

     //Affichage du modal suppression
    $('#affichage_note').on('click', '.btn_supprimer',function(event){
        event.preventDefault();
        var ligne = $(this).closest('tr');
        var valeurTd = [];
        ligne.find('td').each(function() {
            valeurTd.push($(this).text());
        });
        const messageErreur = Swal.mixin({
           html : 'Voulez-vous vraiment supprimer la note de <span class="matiere_supprimer" style="font-weight :bold">'+valeurTd[2]+'</span>, du matricule <span class="matricule_supprimer" style="font-weight :bold">'+valeurTd[0]+'</span> et de niveau <span class="niveau_supprimer" style="font-weight :bold">'+valeurTd[1]+'</span> ?',
           icon : 'warning',
           showCancelButton : true,
           confirmButtonColor : '#d33',
           //cancelButtonColor : '#d33',
           confirmButtonText : 'Oui, supprimer',
           cancelButtonText  : 'Annuler',
        });
        messageErreur.fire().then((result) => {
            if(result.isConfirmed){
                supprimerNote();
                Swal.fire({
                position : 'top-end',
                toast :true,
                title :'Supprimer avec succès.',
                icon : 'success',
                showConfirmButton : false,
                timer : 2500,
                timerProgressBar : true              
                })
            }
        });
    });

    //Supprimer Note
    function supprimerNote() {
        var matiere = $(".matiere_supprimer").text();
        var niveau = $(".niveau_supprimer").text();
        var matricule = $(".matricule_supprimer").text();
        $.ajax({ type : "POST",url : "../../backend/note/supprimer_note.php", data :{matiere : matiere, niveau : niveau, matricule : matricule} , success : function(result) { 
           affichage();
        }});       
    }

    //Recherche par Niveau avec le menu select
    $('#niveau_datatable,#matiere_datatable, #matricule_datatable').change(function(event){
        event.preventDefault();
        var niveau = $('#niveau_datatable').val();
        var matiere = $('#matiere_datatable').val();
        var matricule = $('#matricule_datatable').val();

        if (niveau == "Niveau") {
            niveau = null;
        }
        if (matiere == "Matière") {
            matiere = null;
        }
        if (matricule == "Matricule") {
            matricule = null;
        }

        if(niveau && matiere && matricule)
        {
            rechercheParLes3Criteres(niveau, matiere, matricule);
        }
        else if(niveau && matricule)
        {
            rechercheParNiveauetMatricule(niveau, matricule);
        }
        else if( matiere && matricule)
        {
            rechercheParMatiereEtMatricule(matiere, matricule);
        }
        else if( matiere && niveau) 
        {
            rechercheParMatiereEtNiveau(matiere, niveau);
        }
        else if (niveau)
        {
            rechercheParNiveau(niveau);
        }
        else if (matiere)
        {
            rechercheParMatiere(matiere);
        }
        else if (matricule)
        {
            rechercheParMatricule(matricule);
        }
        else{
           affichage();
        }
    });

    //Recherche Par Niveau
    function rechercheParNiveau(niveau) {
        $.ajax({ type : "POST",url : "../../backend/note/rechercheParNiveau.php", data : {recherche : niveau},success : function(result) { 
            $("#affichage_note tbody").html(result);
        }});
    }

    //Recherche par matricule
    function rechercheParMatricule(matricule) {
        $.ajax({ type : "POST",url : "../../backend/note/rechercheParMatricule.php", data : {recherche : matricule},success : function(result) { 
            $("#affichage_note tbody").html(result);
        }});
    }

    //Recherche par matiere
    function rechercheParMatiere(matiere) {
        $.ajax({ type : "POST",url : "../../backend/note/rechercheParMatiere.php", data : {recherche : matiere},success : function(result) { 
            $("#affichage_note tbody").html(result);
        }});
    }

    //Recherche par niveau et par matiere
    function rechercheParMatiereEtNiveau(matiere, niveau) {
        
        $.ajax({ type : "POST",url : "../../backend/note/rechercheParMatiereEtNiveau.php", data : {recherche1 : matiere, recherche2 : niveau},success : function(result) { 
            $("#affichage_note tbody").html(result);
        }});
    }
    //Recherche par matiere et par matricule
    function rechercheParMatiereEtMatricule(matiere, matricule) {
        
        $.ajax({ type : "POST",url : "../../backend/note/rechercheParMatiereEtMatricule.php", data : {recherche1 : matiere, recherche2 : matricule},success : function(result) { 
            $("#affichage_note tbody").html(result);
        }});
    }
    //Recherche par niveau et par matricule
    function rechercheParNiveauetMatricule(niveau, matricule) {
        
        $.ajax({ type : "POST",url : "../../backend/note/rechercheParNiveauetMatricule.php", data : {recherche1 : niveau, recherche2 : matricule},success : function(result) { 
            $("#affichage_note tbody").html(result);
        }});
    }

    //Recherche par niveau , par matricule et par matiere
    function rechercheParLes3Criteres(niveau, matiere, matricule) {
        
        $.ajax({ type : "POST",url : "../../backend/note/rechercheParLes3Criteres.php", data : {recherche1 : niveau, recherche2 : matiere, recherche3 : matricule},success : function(result) { 
            $("#affichage_note tbody").html(result);
        }});
    }
   
    //Recherche all
    $('#rechercher').on('keyup',function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/note/recherche_all.php", data : {recherche : $(this).val()},success : function(result) { 
            $("#affichage_note tbody").html(result);
        }});

    });

    $('#niveau_datatable').select2({
        tags: false,
        tokenSeparators: [',', ' '],
     });

    //SELECT editable
    $('#matricule').select2({
        tags: false,
    });

    $('#matiere').select2({
        tags: false,
        tokenSeparators: [',', ' '],
    });

    $('#matiere_datatable').select2({
        tags: false,
        tokenSeparators: [',', ' '],
    });

    $('#matricule_datatable').select2({
        tags: false,
        tokenSeparators: [',', ' '],
    });

    affichage();
    
    // Texte Grand titre animée
    function animationText(text) {
        var i = 0;

        function animate() {
            if (i < text.length) {
            $("#titre").append(text.charAt(i));
            i++;
            setTimeout(animate, 50);
            }
        }

        animate();
        }

        animationText("Liste des notes des étudiants.");
});