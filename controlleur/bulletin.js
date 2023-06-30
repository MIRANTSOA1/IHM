
        $(document).ready(function() {
            $.ajax({
            url: '../../backend/bulletin/getMatricule.php',
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
        
        $('#matricule').select2({
            tags: false,
        });

        $('#matricule').change(function(event){
            event.preventDefault();
            $.ajax({ type : "POST",url : "../../backend/bulletin/recherche_etudiant.php", data : {matricule : $(this).val()},success : function(result) { 
                    $("#nomEtudiant").empty();
                    $("#adresseEtudiant").empty();
                    $("#matriculeEtudiant").empty();
                    $("#niveauEtudiant").empty();
                $.each(result, function(index, item) {
                    $("#nomEtudiant").text(item.nom);
                    $("#adresseEtudiant").text(item.adresse);
                    $("#matriculeEtudiant").text(item.matricule);
                    $("#niveauEtudiant").text(item.niveau);
                });
            }});

            //Recherche des notes par matiere d'un Matricule (matiere,credit,note)
            $.ajax({ type : "POST",url : "../../backend/bulletin/recherche.php", data : {matricule : $(this).val()},success : function(data) { 
                $("#affichage_bulletin tbody").empty();
                var moyenneGenerale = 0;
                var html = '';
                var CreditUE = 0;
                var sommeCreditGenerale = 0;
                var CreditObtenuParUE =0;
                var moyenneParUE = 0;
                var totalMoyenneParUE = 0;
                var nombredeUE = 0;
                var CreditObtenuParUE = 0;
                var sommeCreditObtenuParUE = 0;
                var decisionDuConseil = '';

                //Parcours de la reponse Ajax
                $.each(data, function (index1, item) { 

                    //Calculer la somme des credits et moyenne par UE
                    $.each(item, function(index2, value) {
                        CreditUE += parseFloat(value.coefficient);
                    });
                    $.each(item, function(index2, value) {
                        moyenneParUE += (parseFloat(value.note) * parseFloat((parseFloat(value.coefficient) / parseFloat(CreditUE))));
                    });

                    //Affichage du nom de l'UE
                    html += '<tr>';
                    html += '<td rowspan="' + (parseInt(item.length) + 2) +'" data-toggle="modal" data-target="#scrollmodal_ajout">' + index1 +'</td>';
                    html += '</tr>';
                    //Fonction de validation de l'UE
                    function validationUE() {
                        var reponse;
                        if (moyenneParUE < 10) {
                            reponse = "NON VALIDE";
                        } else {
                            reponse = "VALIDE";
                            $.each(item, function(index2, value) {
                                if(parseFloat(value.note) < 5){
                                    reponse = "NON VALIDE";
                                }
                            });
                        }
                        
                        return reponse;
                    }
                    
                    // calcule credit Obtenue Par UE
                    if (validationUE() == "VALIDE") {
                        CreditObtenuParUE = CreditUE;
                    }
                    else{
                        CreditObtenuParUE = 0;
                    }

                    //Affichage des matiere et note de l'UE
                    $.each(item, function(index2, value) {
                        html += '<tr>';
                        html += '<td class="text-left">' + value.matiere +'</td>';
                        html += '<td>' + value.note +'</td>';
                        if (index2 == 0) {
                            html += '<td rowspan="' + (parseInt(item.length) + 1) +'">' + CreditObtenuParUE +'</td>';
                            html += '<td rowspan="' + (parseInt(item.length) + 1) +'">' + validationUE()+'</td>'; 
                        }
                        html += '</tr>';
                    });



                    //Affichage de la moyenne de l'UE
                    html += '<tr>';
                    html += '<td class="text-right"> <b> Moyenne </b> </td>';
                    html += '<td class="text-center">' + parseFloat(moyenneParUE).toFixed(2) +'</td>';
                    html += '</tr>';
            
                    sommeCreditGenerale += CreditUE; 
                    CreditUE = 0;
                    sommeCreditObtenuParUE += CreditObtenuParUE;
                    CreditObtenuParUE = 0;
                    nombredeUE ++;
                    totalMoyenneParUE += moyenneParUE;
                    moyenneParUE = 0;


                });

                moyenneGenerale = parseFloat(totalMoyenneParUE)/nombredeUE;
                //Affichage de la moyenne Générale
                html += '<tr>';
                html += '<td colspan="2" class="text-right"> <b>MOYENNE GENERALE</b> </td>';
                html += '<td class="text-center">'+ parseFloat(moyenneGenerale).toFixed(2) +'</td>';
                html += '<td class="text-center"> TOTAL CREDITS </td>';
                html += '<td class="text-center">'+sommeCreditObtenuParUE+'/'+sommeCreditGenerale+'</td>';
                html += '</tr>';

                var admis = (parseFloat(sommeCreditGenerale) * 75 )/100;
                if(sommeCreditObtenuParUE < admis){
                    decisionDuConseil = "Autoriser à redoubler."
                }else{
                    if (sommeCreditObtenuParUE == sommeCreditGenerale) {
                        decisionDuConseil = "Admissible";
                    }
                    else{
                        decisionDuConseil = "Autoriser à passer au niveau supérieur";
                    }
                }
                //Affichage de la Déécision du conseil
                html += '<tr>';
                html += '<td colspan="5" class="text-left"> <b>OBSERVATION FINALE &nbsp &nbsp : &nbsp &nbsp &nbsp</b> '+ decisionDuConseil.toUpperCase()+'</td>';
                html += '</tr>';

                 $("#affichage_bulletin tbody").html(html);

            }});

        });

    });