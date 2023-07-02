<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {
    $matricule=$_POST['matricule'];
    $matiere=$_POST['matiere'];
    $niveau=$_POST['niveau'];
    $note = $_POST['note'];
    // $matiere = "Dev Mobile";
    // $matricule = "2011";
    // $note = "12";
    // $niveau = "L3 ASR";
    $sql1 = "SELECT * FROM note WHERE matricule = '$matricule' and niveau = '$niveau'  AND matiere = '$matiere'";
    $result_1=mysqli_query($con,$sql1);
    if (mysqli_num_rows($result_1) > 0) {
       echo "erreur";
    }else{
        $sql="INSERT INTO note ( matricule, matiere,niveau, note)  VALUES('$matricule','$matiere','$niveau','$note')";
        mysqli_query($con,$sql);
        echo "success";
    }
    
} else {
 }
?>