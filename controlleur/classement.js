$(document).ready(function(){

    $("#niveau").change(function(event) {
        event.preventDefault();
        $("#niveau_text").text($(this).val());
        affichage($("#niveau").val());
    });
    //Prend toute les matricule de la base
    $.ajax({
    url: '../../backend/classement/getMatricule.php',
    method: 'GET',
    dataType: 'json',
    success: function(response) {
        //Calcule de la moyenne par chaque matricule trouver
        $.each(response.matricule, function(index, value) {
            $.ajax({ type : "POST",url : "../../backend/bulletin/recherche.php", data : {matricule : value},success : function(data) {
                    var moyenneGenerale = 0;
                    var CreditUE = 0;
                    var moyenneParUE = 0;
                    var totalMoyenneParUE = 0;
                    var nombredeUE = 0;
                    
                    //Parcours de la reponse Ajax
                    $.each(data, function (index1, item) { 
                        //Calculer la somme des credits et moyenne par UE
                        $.each(item, function(index2, value1) {
                            CreditUE += parseInt(value1.coefficient);
                        });
                        $.each(item, function(index2, value1) {
                            moyenneParUE += (parseFloat(value1.note) * (parseFloat(value1.coefficient)/CreditUE));
                        });

                        CreditUE = 0;
                        nombredeUE ++;
                        totalMoyenneParUE += moyenneParUE;
                        moyenneParUE = 0;
                    });

                    moyenneGenerale = parseFloat(totalMoyenneParUE)/nombredeUE;
                    //Ajout de la moyenne dans la table Classement pour chaque matricule
                    $.ajax({ type : "POST",url : "../../backend/classement/ajout_moyenne.php", data : { matricule : value , moyenne : moyenneGenerale},success : function(result) {
                    }});

                }
            });
        });
    }
});

//Affichage des données sur le tableau
function affichage(niveau) {
        $.ajax({
            type : "POST",
            url: "../../backend/classement/recherche_classement.php",
            data : {niveau : niveau},
            success: function(data) {
                var rang = 1;
                $(".affichage_classement tbody").empty();
                // Parcourir les données et les ajouter au tableau
                $.each(data, function(index, item) {
                    var row = $("<tr>").addClass("tr-shadow");
                    $("<td>").text(rang).appendTo(row);
                    $("<td>").text(item.matricule).appendTo(row);
                    $("<td>").text(item.nom).appendTo(row);
                    $("<td>").text(parseFloat(item.moyenne).toFixed(2)).appendTo(row);
                    $(".affichage_classement tbody").append(row);
                    // var spacerRow = $("<tr>").addClass("spacer");
                    // $("#affichage_note tbody").append(spacerRow);
                    rang ++;
                });
            }
        });
    }
     $('#niveau').select2({
            tags: false,
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

        animationText("Classement des étudiants par Ordre de mérites.");
});