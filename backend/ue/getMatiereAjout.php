<?php
$niveau = $_POST['niveau'];
$con=mysqli_connect('localhost','root','','gestion_des_notes');
    if ($con) {
        //$sql="SELECT matiere FROM matiere WHERE niveau = '$niveau';";
        $sql = "SELECT * FROM matiere WHERE matiere NOT IN (SELECT matiere FROM ue WHERE niveau = '$niveau') AND niveau = '$niveau'";
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
     
}
?>