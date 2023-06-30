<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {
$matricule = $_POST["matricule"];
// $matricule = '1056';
$sql="SELECT * FROM etudiant WHERE matricule = '$matricule'";
$result=mysqli_query($con,$sql);
$data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($data);
}
else{
 die(mysqli_error($con));
 }
?>