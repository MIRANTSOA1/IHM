<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {
$sql="SELECT * FROM note";
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