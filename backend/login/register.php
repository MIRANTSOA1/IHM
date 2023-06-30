<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {
    $email=$_POST['email'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confpassword=$_POST['confpassword'];
    $req = "SELECT * FROM login WHERE email='$email'";
    $sql="INSERT INTO login (email, nom, motdepasse)  VALUES('$email','$username','$password')";
    $result_1=mysqli_query($con,$req);
    if (mysqli_num_rows($result_1) > 0) {
        echo "<div class='alert alert-danger'>{$email} - Existe déja.</div>";
    }else{
        mysqli_query($con,$sql);
        echo "<div class='alert alert-success'>Ajout avec succès.</div>";
    }
} else {
    die(mysqli_error($con));
 }
?>