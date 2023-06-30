<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {
        
        $matricule=$_POST['matricule_cache'];
        $matiere=$_POST['matiere_cache'];
        $note=$_POST['note'];
        $niveau=$_POST['niveau_cache'];
        $sql="UPDATE note SET note = $note WHERE matiere = '$matiere' AND matricule = '$matricule' AND niveau = '$niveau'";
        $result=mysqli_query($con,$sql);
} else {
 die(mysqli_error($con));
 }
?>