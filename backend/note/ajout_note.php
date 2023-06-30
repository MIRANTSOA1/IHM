<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {
    $matricule=$_POST['matricule'];
    $matiere=$_POST['matiere'];
    $niveau=$_POST['niveau'];
    $note = $_POST['note'];

    $sql="INSERT INTO note ( matricule, matiere,niveau, note)  VALUES('$matricule','$matiere','$niveau','$note')";
    mysqli_query($con,$sql);
} else {
 }
?>