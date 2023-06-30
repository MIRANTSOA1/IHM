$(document).ready(function(){
    //Affichage lors de la chargement de la page
    $.ajax({url : "../../backend/matiere/affichage_matiere.php", type : "GET",success : function(result) { $("#affichage_matiere tbody").html(result);}});
    
    //Ajout d'une matiere
    $('#btn_ajouter').click(function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/matiere/ajout_matiere.php", data : $("#ajout_matiere").serialize(),success : function(result) { 
            $("#ajout_matiere").trigger('reset');
            $("#affichage_matiere tbody").html(result);
        }});

    });

    //Afficher des valeurs de la ligne de tableau séléctionnée
    $('#affichage_matiere').on('click', '.btn_modifier',function(event){
        event.preventDefault();
        var ligne = $(this).closest('tr');
        var valeurTd = ligne.find('td');

        $('#matiere_modif').val($(valeurTd[0]).text()).prop('disabled', true);
        $('#niveau_modif').val($(valeurTd[1]).text()).prop('disabled', true);
        $('#coefficient_modif').val($(valeurTd[2]).text());
        $('#matiere_cache').val($(valeurTd[0]).text());
        $('#niveau_cache').val($(valeurTd[1]).text());

    });

    //Select de niveau pour la recherche editable
    $('#niveau_datatable').select2({
        tags: false,
        tokenSeparators: [',', ' '],
    });

    //Select de niveau pour l'ajout editable
    $('#niveau').select2({
        tags: false,
        tokenSeparators: [',', ' '],
    });

    //Modifier matiere
    $('#btn_valider').click(function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/matiere/modifier_matiere.php", data : $("#modifier_matiere").serialize(),success : function(result) { 
            $("#modifier_matiere").trigger('reset');
            $("#affichage_matiere tbody").html(result);
        }});

    });

    //Supprimer matière
    $('#affichage_matiere').on('click', '.btn_supprimer',function(event){
        event.preventDefault();
        var ligne = $(this).closest('tr');
        var valeurTd = [];
        ligne.find('td').each(function() {
            valeurTd.push($(this).text());
        });
        $.ajax({ type : "POST",url : "../../backend/matiere/supprimer_matiere.php", data : JSON.stringify(valeurTd) , success : function(result) { 
            $("#affichage_matiere tbody").html(result);
        }});            
    });

    //Recherche par Niveau avec le menu select
    $('#niveau_datatable').change(function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/matiere/recherche_matiere.php", data : {recherche : $(this).val()},success : function(result) { 
            $("#affichage_matiere tbody").html(result);
        }});

    });

    //Recherche all
    $('#rechercher').on('keyup',function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/matiere/recherche_all.php", data : {recherche : $(this).val()},success : function(result) { 
            $("#affichage_matiere tbody").html(result);
        }});

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

        animationText("Liste des matières.");
});