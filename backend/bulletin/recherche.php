<?php
 $con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {
    $matricule = $_POST['matricule'];
    // $matricule = "1078";
    $sql = "SELECT ue.nomUE, matiere.matiere, COALESCE(note.note, 0) AS note, matiere.coefficient
            FROM etudiant
            CROSS JOIN ue
            LEFT JOIN matiere ON matiere.niveau = etudiant.niveau AND matiere.matiere = ue.matiere
            LEFT JOIN note ON note.matricule = etudiant.matricule AND note.matiere = matiere.matiere AND note.niveau = etudiant.niveau 
            WHERE etudiant.matricule = $matricule AND etudiant.niveau = ue.niveau";
    $result=mysqli_query($con,$sql);
    $ueData = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $nomUE = $row['nomUE'];
        $matiere = $row['matiere'];
        $coefficient = $row['coefficient'];
        $note = $row['note'];
        if (!isset($ueData[$nomUE])) {
            $ueData[$nomUE] = array();
        }
            $ueData[$nomUE][] = array('matiere' => $matiere,'note' => $note, 'coefficient' => $coefficient);
        
    }
    header('Content-Type: application/json');
    echo json_encode($ueData);
}
else{
 }


?>