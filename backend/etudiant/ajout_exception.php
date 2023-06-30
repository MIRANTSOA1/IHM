<?php
    //Load Composer's autoloader
   // require '../../frontend/vendor/autoload.php';
//    $chemin = '../config.php';
// include_once($chemin);
    $conn=mysqli_connect('localhost','root','','gestion_des_notes');
    $msg = "";
    if($conn){
        if (isset($_POST['submit'])) {
            $matricule = mysqli_real_escape_string($conn, $_POST['matricule']);
            $nom = mysqli_real_escape_string($conn, $_POST['nom']);
            $adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
            $niveau = mysqli_real_escape_string($conn, $_POST['niveau']);
            if (mysqli_num_rows(mysqli_query($conn, "SELECT FROM etudiant WHERE matricule='{$matricule}'")) > 0) {
                $msg = "<div class='alert alert-danger'>{$matricule} - Existe déja.</div>";
            } else {
                $sql = "INSERT INTO etudiant (matricule, nom, adresse, niveau) VALUES ('{$matricule}', '{$nom}', '{$adresse}', '{$niveau}')";
                $result = mysqli_query($conn, $sql);
                $msg = "<div class='alert alert-success'>Compte créé avec succès.</div>";
            }
        }
    }else{
        die(mysqli_error($conn));
    }
?>