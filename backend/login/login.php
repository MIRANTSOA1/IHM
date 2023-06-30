<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
$email = $_POST['email'];
$mdp = $_POST['password'];

    if ($con) {
        $sql="SELECT * FROM login WHERE email = '$email' AND motdepasse ='$mdp';";
        $result=mysqli_query($con,$sql);
        if ($result->num_rows > 0) {
            $_SESSION['SESSION_EMAIL'] = $email;
            $resp = "v";
        }
        else {
            $resp = "nv";
        }
        $response = array('valiny' => $resp);
    // Envoyer la réponse JSON
    echo json_encode($response);
    } else {
    die(mysqli_error($con));
    }
?>