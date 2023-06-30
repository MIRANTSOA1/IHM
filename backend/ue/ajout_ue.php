<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {

    $nomUE=$_POST['ue'];
    $niveau=$_POST['niveau'];
    $matiere = $_POST['matiere'];

    foreach ($matiere as $nomMat) {
        $sql="INSERT INTO ue ( nomUE,niveau, matiere)  VALUES('$nomUE','$niveau','$nomMat')";
        mysqli_query($con,$sql);
    }
    
} else {    

 }
?>