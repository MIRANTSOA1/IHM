<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {
    $data = json_decode(file_get_contents('php://input'), true);
    $matiere = $data['2'];
    $niveau = $data['1'];
    $matricule = $data['0'];
    $sql=" DELETE FROM note WHERE matricule = '$matricule' and niveau = '$niveau'  AND matiere = '$matiere'";
    $result=mysqli_query($con,$sql);
} else {
 die(mysqli_error($con));
 }
?>