<?php
 $con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {
    $niveau = $_POST['niveau'];
    // $niveau = "L2 GB";
    $sql = "SELECT ue.nomUE, ue.niveau, matiere.matiere, matiere.coefficient FROM ue JOIN matiere ON ue.matiere = matiere.matiere AND ue.niveau = matiere.niveau WHERE ue.niveau = '$niveau'";
    $result=mysqli_query($con,$sql);
    $ueData = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $nomUE = $row['nomUE'];
        $matiere = $row['matiere'];
        $coefficient = $row['coefficient'];
        if (!isset($ueData[$nomUE])) {
            $ueData[$nomUE] = array();
        }
            $ueData[$nomUE][] = array('matiere' => $matiere, 'coefficient' => $coefficient);
        
    }
    header('Content-Type: application/json');
    echo json_encode($ueData);
}
else{
 }


?>