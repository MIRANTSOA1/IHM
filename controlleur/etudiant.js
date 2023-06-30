$(document).ready(function(){
    //Remplir la liste des matricule
    function remplirListMatricule() {
        $.ajax({
            url: '../../backend/etudiant/getMatricule.php',
            method: 'GET',
            dataType: 'json',
            success: function(response) {
                $('#matricule_datatable').empty();
                $('#matricule_datatable').append($('<option>').text('Matricule').attr('selected', 'selected').attr('value', 'All'));
                $.each(response.matricule, function(index, value) {
                    $('#matricule_datatable').append($('<option>').text(value).attr('value', value));
                });
            }
        });
    }
    remplirListMatricule();
    //Affichage lors de la chargement de la page
    $.ajax({url : "../../backend/etudiant/affichage_etudiant.php", type : "GET",success : function(result) { $("#affichageEtudiant tbody").html(result);}});
    
    //Ajout d'une étudiant
    $('#btn_ajouter').click(function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/etudiant/ajout_etudiant.php", data : $("#ajoutEtudiant").serialize(),success : function(result) { 
            $("#ajoutEtudiant").trigger('reset');
            $("#affichageEtudiant tbody").html(result);
            remplirListMatricule();
        }});

    });

    //Affichage des valeurs de la ligne de tableau séléctionnée
    $('#affichageEtudiant').on('click', '.btn_modifier',function(event){
        event.preventDefault();
        var ligne = $(this).closest('tr');
        var valeurTd = ligne.find('td');

        $('#matricule_modif').val($(valeurTd[0]).text()).prop('disabled', true);
        $('#matricule_cache').val($(valeurTd[0]).text());
        $('#nom_modif').val($(valeurTd[1]).text());
        $('#adresse_modif').val($(valeurTd[2]).text());
        $('#niveau_modif').val($(valeurTd[3]).text());
    });

    //Modifier un etudiant
    $('#btn_valider').click(function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/etudiant/modifier_etudiant.php", data : $("#modifierEtudiant").serialize(),success : function(result) { 
            $("#modifierEtudiant").trigger('reset');
            $("#affichageEtudiant tbody").html(result);
        }});

    });

    //Affichage du modal suppression
    $('#affichageEtudiant').on('click', '.btn_supprimer',function(event){
        event.preventDefault();
        $(".message").empty();
        var ligne = $(this).closest('tr');
        var valeurTd = [];
        ligne.find('td').each(function() {
            valeurTd.push($(this).text());
        });
        var message = $('<div>');
        message.append("La suppression de l'étudiant de matricule : ");
        message.append('<span class="matricule_supprimer" style="font-weight :bold">'+valeurTd[0]+'</span>');
        message.append(', supprimera toutes ces données et ces notes. <br> Voulez-vous continuer ?');
        // var message = "La suppression de l'étudiant de matricule : " + valeurTd[0] +", de niveau : "+valeurTd[3]+ ", supprimera toutes ces données et ces notes. Voulez-vous continuer ?";
        $(".message").append(message);
         
    });

    //Supprimer etudiant
    $('#btn_confirmer_suppression').click(function (event) {
        event.preventDefault();
        var matricule = $(".matricule_supprimer").text();
        $.ajax({ type : "POST",url : "../../backend/etudiant/supprimer_etudiant.php", data : {matricule : matricule} , success : function(result) { 
            $("#affichageEtudiant tbody").html(result);
        }});          
    })

    //Recherche par Niveau avec le menu select
    $('#niveau_datatable').change(function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/etudiant/rechercher_etudiant.php", data : {recherche : $(this).val()},success : function(result) { 
            $("#affichageEtudiant tbody").html(result);
            $('#matricule_datatable').val("Matricule");
        }});

    });

    //Recherche par matricule avec le menu select
    $('#matricule_datatable').change(function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/etudiant/recherche_par_Matricule.php", data : {recherche : $(this).val()},success : function(result) { 
            $("#affichageEtudiant tbody").html(result);
            $('#niveau_datatable').val("Niveau");
        }});

    });

    //Recherche all
    $('#rechercher').on('keyup',function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/etudiant/recherche_all.php", data : {recherche : $(this).val()},success : function(result) { 
            $("#affichageEtudiant tbody").html(result);
            $('#matricule_datatable').val("Matricule");
            $('#niveau_datatable').val("Niveau");
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

        animationText("Liste des étudiants.");
});