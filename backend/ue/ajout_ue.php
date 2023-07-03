<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {

    $nomUE=$_POST['ue'];
    $niveau=$_POST['niveau'];
    $matiere = $_POST['matiere'];
    $sql1 = "SELECT * FROM ue WHERE nomUE = '$nomUE' AND niveau = '$niveau'";
    $result_1=mysqli_query($con,$sql1);
    if (mysqli_num_rows($result_1) > 0) {
       echo "erreur";
    }else{
        foreach ($matiere as $nomMat) {
            $sql="INSERT INTO ue ( nomUE,niveau, matiere)  VALUES('$nomUE','$niveau','$nomMat')";
            mysqli_query($con,$sql);
        }
        echo "success";
    }
    
} else {    

 }
?>