<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {
    $matricule= $_POST['matricule'];
    $sql="DELETE FROM etudiant WHERE matricule = '$matricule'";
    $result=mysqli_query($con,$sql);
    $sql="DELETE FROM note WHERE matricule = '$matricule'";
    $result=mysqli_query($con,$sql);
    $sql="DELETE FROM classement WHERE matricule = '$matricule'";
    $result=mysqli_query($con,$sql);
    $sql="SELECT * FROM etudiant";
    $result=mysqli_query($con,$sql);
    while ($row = mysqli_fetch_assoc($result)) {
        ob_start();  //Capturer le tableau html
        echo '<tr class="tr-shadow">';
        echo "<td>" . $row["matricule"] . "</td>";
        echo '<td><span>' . $row["nom"] . "</span></td>";
        echo '<td class="desc">' . $row["adresse"] . "</td>";
        echo "<td>" . $row["niveau"] . "</td>";
        echo '<td>
        <div class="table-data-feature">
            <button class="item btn_modifier" type="button" id="btn_modifier" data-toggle="modal" data-target="#scrollmodal_modif">
                <i class="zmdi zmdi-edit"></i>
            </button>
            <button class="item btn_supprimer" type="button" data-toggle="modal" data-target="#scrollmodal_supprimer">
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