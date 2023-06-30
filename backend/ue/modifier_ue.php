<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {

    $nomUE_vaovao=$_POST['ue_modif'];
    $nomUE_taloha=$_POST['ue_modif_taloha'];
    $niveau=$_POST['niveau_modif'];
    $matiere = $_POST['matiere_modif'];
    $nomUE = '';

    $sql="DELETE FROM ue WHERE nomUE = '$nomUE_taloha'";
    mysqli_query($con,$sql);

    foreach ($matiere as $nomMat) {
        $sql="INSERT INTO ue ( nomUE,niveau, matiere)  VALUES('$nomUE_vaovao','$niveau','$nomMat')";
        mysqli_query($con,$sql);
    }
    
} else {    

 }
?>