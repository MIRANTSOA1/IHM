<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
    if ($con) {
        $sql="SELECT matiere FROM matiere GROUP BY matiere;";
        $result=mysqli_query($con,$sql);
        $matieres = array();
        if ($result->num_rows > 0) {
            // Récupérer les matieres depuis le résultat de la requête
            while ($row = $result->fetch_assoc()) {
                $matieres[] = $row['matiere'];
            }
        }
    
    $response = array('matieres' => $matieres);
    // Envoyer la réponse JSON
    echo json_encode($response);
    }else {
        die(mysqli_error($con));
}
?>