$(document).ready(function(){
    //Affichage lors de la chargement de la page
    $.ajax({url : "../../backend/matiere/affichage_matiere.php", type : "GET",success : function(result) { $("#affichage_matiere tbody").html(result);}});

    //Activer le bouton si es formulaire sont rempli
    $('#ajout_matiere input:enabled, #ajout_matiere select').on('input change',function () {
        var formulaireValide = true;
        $('#ajout_matiere input:enabled').each(function() {
            if($(this).val() === '' ){
                formulaireValide = false;
                return false
            }
        });
        if ($('#niveau').val() === 'Niveau') {
            formulaireValide = false;
        };

        if(formulaireValide){
            $('#btn_ajouter').prop('disabled', false);
        }
        else{
            $('#btn_ajouter').prop('disabled', true);
        }
    });
    
    //Ajout d'une matiere
    $('#btn_ajouter').click(function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/matiere/ajout_matiere.php", data : $("#ajout_matiere").serialize(),success : function(result) { 
            if(result === "erreur"){
                const messageerror = Swal.mixin({
                    toast : true,
                    position : 'top-end',
                    icon : 'error',
                    title : "La matière existe déjà pour ce niveau.",
                    showConfirmButton : false,
                    timer : 5000,
                    timerProgressBar : true
                });
                messageerror.fire();
            }
           else{
            const messageSucces = Swal.mixin({
                toast : true,
                position : 'top-end',
                icon : 'success',
                title : "Ajouter avec succès",
                showConfirmButton : false,
                timer : 2500,
                timerProgressBar : true
            });
            messageSucces.fire();
            $("#ajout_matiere").trigger('reset');
            $("#affichage_matiere tbody").html(result);
            remplirListMatricule();
           }
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
            $("#modifier_matiere").trigger('reset');
            $("#affichage_matiere tbody").html(result);
        }});

    });
    //Affichage du modal suppression
    $('#affichage_matiere').on('click', '.btn_supprimer',function(event){
        event.preventDefault();
        var ligne = $(this).closest('tr');
        var valeurTd = [];
        ligne.find('td').each(function() {
            valeurTd.push($(this).text());
        });
         const messageErreur = Swal.mixin({
           html : 'Voulez-vous vraiment supprimer la matière <span class="matricule_supprimer" style="font-weight :bold">'+valeurTd[0]+'</span> du niveau <span class="niveau_supprimer" style="font-weight :bold">'+valeurTd[1]+'</span> ?',
           icon : 'warning',
           showCancelButton : true,
           confirmButtonColor : '#d33',
           //cancelButtonColor : '#d33',
           confirmButtonText : 'Oui, supprimer',
           cancelButtonText  : 'Annuler',
        });
        messageErreur.fire().then((result) => {
            if(result.isConfirmed){
                supprimerMatiere();
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
    
    //Supprimer matière
    function supprimerMatiere() {
        var matiere = $(".matiere_supprimer").text();
        var niveau = $(".niveau_supprimer").text();
        $.ajax({ type : "POST",url : "../../backend/matiere/supprimer_matiere.php", data :{matiere : matiere, niveau : niveau}, success : function(result) { 
            $("#affichage_matiere tbody").html(result);
        }});   
    }

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