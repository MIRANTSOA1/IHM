$(document).ready(function() {
    function remplirMatiereParNiveau(niveau, champCibler) {
    // Appel AJAX pour récupérer le niveau correspondant au niveau
        $.ajax({
            url: '../../backend/ue/getMatiere.php',
            method: 'POST',
            data: { niveau : niveau },
            dataType: 'json',
            success: function(response) {
                $(champCibler).empty();
                $(champCibler).append($('<option>').text('Matière').prop('disabled', true));
                $.each(response.matieres, function(index, value) {
                    $(champCibler).append($('<option>').text(value).attr('value', value));
                });
            }
        });
    }

    function remplirMatiereParNiveauPourAJout(niveau, champCibler) {
    // Appel AJAX pour récupérer le niveau correspondant au niveau
        $.ajax({
            url: '../../backend/ue/getMatiereAjout.php',
            method: 'POST',
            data: { niveau : niveau },
            dataType: 'json',
            success: function(response) {
                $(champCibler).empty();
                $(champCibler).append($('<option>').text('Matière').prop('disabled', true));
                $.each(response.matieres, function(index, value) {
                    $(champCibler).append($('<option>').text(value).attr('value', value));
                });
            }
        });
    }

    //Remplissement automatique du champ Matiere 
    $('#niveau').on('change', function() {                
       remplirMatiereParNiveauPourAJout($('#niveau').val(),'#matiere');
    });

    $('#niveau_datatable').on('change', function(event) {                
      event.preventDefault();
      affichage($(this).val());
    });

    //Affichage des données sur le tableau
    function affichage(niveauval) {
        $.ajax({
            url: "../../backend/ue/affichage_ue.php",
            type : 'POST',
            data : {niveau : niveauval },
            dataType : "json",  
            success: function(data) {
                var html = '';
                var sommeCredit = 0;
                var sommetotalCredit = 0;
                $.each(data, function (index1, item) {

                    $.each(item, function(index2, value) {
                        sommeCredit += parseInt(value.coefficient);
                    });

                    html += '<tr class="modifier">';
                    html += '<td rowspan="' + (parseInt(item.length) + 1) +'" class="align-items-center" data-toggle="modal" data-target="#scrollmodal_modif">' + index1 +'</td>';
                    html += '</tr>';
                    
                    $.each(item, function(index2, value) {
                        html += '<tr>';
                        html += '<td>' + value.matiere +'</td>';
                        html += '<td>' + value.coefficient +'</td>';
                        html += '<td>' + (parseInt(value.coefficient)/sommeCredit).toFixed(1) +'</td>';
                        if (index2 == 0) {
                            html += '<td rowspan="' + (parseInt(item.length)) +'">' + sommeCredit +'</td>';
                        }
                        html += '</tr>';
                    });
                    sommetotalCredit += parseInt(sommeCredit);
                    sommeCredit = 0;
                });

                html += '<tr>';
                html += '<td></td>';
                html += '<td colspan="3" class="text-right"> <b>Nombre total de crédits</b> </td>';
                html += '<td>' + sommetotalCredit +'</td>';
                html += '</tr>';

                $("#affichage_ue tbody").empty();
                $("#affichage_ue tbody").html(html);

            
            }
        });
    }
    $('#niveau_datatable').val("L3 IG").attr('selected', 'selected')    
    affichage($('#niveau_datatable').val()); 

    //Activer le bouton si es formulaire sont rempli
    $('#ajout_ue input:enabled, #ajout_ue select').on('input change',function () {
        var formulaireValide = true;
        if ($('#ue').val() === '') {
            formulaireValide = false;
        }
        if ($('#niveau').val() === 'Niveau') {
            formulaireValide = false;
        }
        if ($('#matiere').val() == '') {
            formulaireValide = false;
        }        
        if(formulaireValide){
            $('#btn_ajouter').prop('disabled', false);
        }
        else{
            $('#btn_ajouter').prop('disabled', true);
        }
    });

    //Ajout d'une UE
    $('#btn_ajouter').click(function(event){
        event.preventDefault();
        $.ajax({ type : "POST",url : "../../backend/ue/ajout_ue.php", data : $("#ajout_ue").serialize(),success : function(result) {
         if(result === "erreur"){
                const messageerror = Swal.mixin({
                    toast : true,
                    position : 'top-end',
                    icon : 'error',
                    title : "L'UE existe déjà.",
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
                    title : "Ajouter avec succès",
                    showConfirmButton : false,
                    timer : 2500,
                    timerProgressBar : true
                });
                messageSucces.fire(); 
            $("#ajout_ue").trigger('reset');
            affichage($('#niveau_datatable').val());
            }
        }});

    });

    //Afficher les valeurs de la ligne de tableau séléctionnée sur la fenetre modification
    $('#affichage_ue').on('click', '.modifier',function(event){
        event.preventDefault(); 
        var niveau = $('#niveau_datatable').val();
        var ligne = $(this).closest('tr');
        var valeurTd = ligne.find('td');
        var nomUE = $(valeurTd[0]).text();
        $('#ue_modif').val(nomUE);
        $('#ue_modif_taloha').val(nomUE);
        $('#niveau_modif').val(niveau);
        $('#niveau_cache').val(niveau).prop('disabled', true);
        remplirMatiereParNiveau(niveau,'#matiere_modif');
        $.ajax({
            url: '../../backend/ue/getMatiereParUE.php',
            method: 'POST',
            data: { niveau : niveau, nomUE : nomUE},
            dataType: 'json',
            success: function(data) {
                var valeurMatiereSelected = [];
                $.each(data.matieres, function (index1, value) {
                    valeurMatiereSelected.push(value);
                });
                $('#matiere_modif').val(valeurMatiereSelected);
                $('#matiere_modif').trigger('change');
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });

    //Modifier ue
    $('#btn_valider').click(function(event){
        event.preventDefault();
        if ($("#matiere_modif").val() == "") {
            const messageErreur = Swal.fire({
                text : 'Voulez-vous vraiment supprimer cette Unité d\'enseignement ?',
                //text : 'Cette action supprimera toutes ces données et ces notes.',
                icon : 'warning',
                showCancelButton : true,
                confirmButtonColor : '#d33',
                //cancelButtonColor : '#d33',
                confirmButtonText : 'Oui, supprimer',
                cancelButtonText  : 'Annuler',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({ type : "POST",url : "../../backend/ue/modifier_ue.php", data : $("#modifier_ue").serialize(),success : function(result) { 
                        Swal.fire({
                            position : 'top-end',
                            toast :true,
                            title : 'Supprimer avec succès.',
                            icon : 'success',
                            showConfirmButton : false,
                            timer : 2500,
                            timerProgressBar : true              
                        })
                        $("#modifier_ue").trigger('reset');
                        affichage($('#niveau_datatable').val());
                    }});
                }
            });
        }
        else{
            $.ajax({ type : "POST",url : "../../backend/ue/modifier_ue.php", data : $("#modifier_ue").serialize(),success : function(result) { 
                Swal.fire({
                    position : 'top-end',
                    toast :true,
                    title : "Modifier avec succès.",
                    icon : 'success',
                    showConfirmButton : false,
                    timer : 2500,
                    timerProgressBar : true              
                })
                $("#modifier_ue").trigger('reset');
                affichage($('#niveau_datatable').val());
            }});
        }
        

    });

    $('#niveau_datatable').select2({
        tags: false,
        tokenSeparators: [',', ' ']
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

        animationText("Liste des u.e.");
});