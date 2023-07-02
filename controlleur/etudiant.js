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

    //Activer le bouton si es formulaire sont rempli
    $('#ajoutEtudiant input:enabled, #ajoutEtudiant select').on('input change',function () {
        var formulaireValide = true;
        $('#ajoutEtudiant input:enabled').each(function() {
            if($(this).val() === '' ){
                formulaireValide = false;
                return false
            }
        });
       
        if ($('#idNiveau').val() === 'Niveau') {
            formulaireValide = false;
        };

        if(formulaireValide){
            $('#btn_ajouter').prop('disabled', false);
        }
        else{
            $('#btn_ajouter').prop('disabled', true);
        }
    });
    
    //Ajout d'une étudiant
    $('#btn_ajouter').click(function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/etudiant/ajout_etudiant.php", data : $("#ajoutEtudiant").serialize(),success : function(result) {
            if(result === "erreur"){
                const messageerror = Swal.mixin({
                    toast : true,
                    position : 'top-end',
                    icon : 'error',
                    title : "L'édiant existe déjà.",
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
                title : "Ajouter avec succes",
                showConfirmButton : false,
                timer : 2500,
                timerProgressBar : true
            });
            messageSucces.fire();
            $("#ajoutEtudiant").trigger('reset');
            $("#affichageEtudiant tbody").html(result);
            remplirListMatricule();
           }
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
            $("#modifierEtudiant").trigger('reset');
            $("#affichageEtudiant tbody").html(result);
        }});

    });

    //Affichage du modal suppression
    $('#affichageEtudiant').on('click', '.btn_supprimer',function(event){
        event.preventDefault();
       // $(".message").empty();
        var ligne = $(this).closest('tr');
        var valeurTd = [];
        ligne.find('td').each(function() {
            valeurTd.push($(this).text());
        });
        const messageErreur = Swal.mixin({
            title : 'Voulez-vous vraiment supprimer l\'étudiant <span class="matricule_supprimer" style="font-weight :bold">'+valeurTd[0]+'</span>?',
            text : 'Cette action supprimera toutes ces données et ces notes.',
           icon : 'warning',
           showCancelButton : true,
           confirmButtonColor : '#d33',
           //cancelButtonColor : '#d33',
           confirmButtonText : 'Oui, supprimer',
           cancelButtonText  : 'Annuler',
        });
        messageErreur.fire().then((result) => {
            if(result.isConfirmed){
                supprimerEtudiant();
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

    //Supprimer etudiant
    function supprimerEtudiant(event) {
        var matricule = $(".matricule_supprimer").text();
        $.ajax({ type : "POST",url : "../../backend/etudiant/supprimer_etudiant.php", data : {matricule : matricule} , success : function(result) { 
            $("#affichageEtudiant tbody").html(result);
        }}); 
    }
    // $('#btn_confirmer_suppression').click(function (event) {
    //     event.preventDefault();
    //     var matricule = $(".matricule_supprimer").text();
    //     $.ajax({ type : "POST",url : "../../backend/etudiant/supprimer_etudiant.php", data : {matricule : matricule} , success : function(result) { 
    //         $("#affichageEtudiant tbody").html(result);
    //     }});          
    // })

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

     $('#sweet-boutton').click(function(event){
        event.preventDefault();
        const messageSucces = Swal.mixin({
        toast : true,
            position : 'top-end',
           icon : 'error',
           title : "Ajout avec succes",
           showConfirmButton : false,
           timer : 1500,
           timerProgressBar : true
        });
        messageSucces.fire();
        const messageErreur = Swal.mixin({
            title : 'Voulez-vous vraiment supprimer l\'étudiant ?',
            text : 'Cette action supprimera toutes ces données et ces notes.',
           icon : 'warning',
           showCancelButton : true,
           confirmButtonColor : '#d33',
           //cancelButtonColor : '#d33',
           confirmButtonText : 'Oui, supprimer',
           cancelButtonText  : 'Annuler',
        });
        messageErreur.fire().then((result) => {
            if(result.isConfirmed){
                Swal.fire({
                position : 'top-end',
                toast :true,
                title :'Supprimer avec succès.',
                icon : 'success',
                showConfirmButton : false,
                timer : 1500,
                timerProgressBar : true              
                })
            }
        });
     });
});