<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {
    $data = json_decode(file_get_contents('php://input'), true);
    $matiere = $data['0'];
    $niveau = $data['1'];
    $sql="DELETE FROM matiere WHERE  matiere = '$matiere' AND niveau = '$niveau' ";
    $result=mysqli_query($con,$sql);
    $sql="SELECT * FROM matiere";
    $result=mysqli_query($con,$sql);

    while ($row = mysqli_fetch_assoc($result)) {
        ob_start();  //Capturer le tableau html
        echo '<tr class="tr-shadow">';
        echo '<td><span>' . $row["matiere"] . "</span></td>";
        echo '<td class="desc">' . $row["niveau"] . "</td>";
        echo "<td>" . $row["coefficient"] . "</td>";
        echo '<td>
        <div class="table-data-feature">
            <button class="item btn_modifier" id="btn_modifier" data-toggle="modal" data-target="#scrollmodal_modif">
                <i class="zmdi zmdi-edit"></i>
            </button>
            <button class="item btn_supprimer" data-toggle="tooltip" data-placement="top" title="Supprimer" id="btn_supprimer">
                <i class="zmdi zmdi-delete"></i>
            </button>
        </div>
    </td>';
        echo '</tr>
        <tr class="spacer"></tr>';
    }
    $tableau_html = ob_get_clean(); //Obtenir le contenue de la capture
    echo $tableau_html;
    
} else {
 die(mysqli_error($con));
 }
?>