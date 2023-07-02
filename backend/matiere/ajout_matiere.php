<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
if ($con) {
        $matiere=$_POST['matiere'];
        $coefficient=$_POST['coefficient'];
        $niveau=$_POST['niveau'];
        $req = "SELECT * FROM matiere WHERE matiere = '$matiere' AND niveau = '$niveau'";
        $sql="INSERT INTO matiere  VALUES('$matiere','$niveau',$coefficient)";
        $result_1=mysqli_query($con,$req);
        if(mysqli_num_rows($result_1) > 0){
            echo "erreur";
        }else{
        $result=mysqli_query($con,$sql);
        $result = $con->query("SELECT * FROM matiere");

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
        }
    
} else {
 die(mysqli_error($con));
 }
?>