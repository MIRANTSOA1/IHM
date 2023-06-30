<?php
$con=mysqli_connect('localhost','root','','gestion_des_notes');
$texte = $_POST['recherche'];
    if ($con) {
        if (isset($texte))
        {
           // $sql="SELECT * FROM etudiant WHERE niveau = '$niveau'";
            $sql="SELECT * FROM etudiant WHERE nom LIKE '%$texte%' OR matricule LIKE '%$texte%' OR adresse LIKE '%$texte%'";
            $result=mysqli_query($con,$sql);
            while ($row = mysqli_fetch_assoc($result)) {
                ob_start();  //Capturer le tableau html
                echo    '<tr class="tr-shadow">';
                            echo    "<td>" . $row["matricule"] . "</td>";
                            echo    '<td><span>' . $row["nom"] . "</span></td>";
                            echo    '<td class="desc">' . $row["adresse"] . "</td>";
                            echo    "<td>" . $row["niveau"] . "</td>";
                            echo    '<td>
                                        <div class="table-data-feature">
                                            <button class="item" id="btn_modifier" data-toggle="modal" data-target="#scrollmodal_modif">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item btn_supprimer" type="button" data-toggle="modal" data-target="#scrollmodal_supprimer">
                    <i class="zmdi zmdi-delete"></i>
                </button>
                                        </div>
                                    </td>';
                echo    '</tr>
                <tr class="spacer"></tr>';
            }
            $tableau_html = ob_get_clean(); //Obtenir le contenue de la capture
            echo $tableau_html;
        }
        else
        {
            $sql="SELECT * FROM etudiant ";
            $result=mysqli_query($con,$sql);
            while ($row = mysqli_fetch_assoc($result)) {
                ob_start();  //Capturer le tableau html
                echo    '<tr class="tr-shadow">';
                            echo "<td>" . $row["matricule"] . "</td>";
                            echo '<td><span>' . $row["nom"] . "</span></td>";
                            echo '<td class="desc">' . $row["adresse"] . "</td>";
                            echo "<td>" . $row["niveau"] . "</td>";
                            echo '<td>
                                        <div class="table-data-feature">
                                            <button class="item" id="btn_modifier" data-toggle="modal" data-target="#scrollmodal_modif">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item btn_supprimer" type="button" data-toggle="modal" data-target="#scrollmodal_supprimer">
                    <i class="zmdi zmdi-delete"></i>
                </button>
                                        </div>
                                    </td>';
                echo    '</tr>
                <tr class="spacer"></tr>';
            }
            $tableau_html = ob_get_clean(); //Obtenir le contenue de la capture
            echo $tableau_html;
        }
    } else {
    die(mysqli_error($con));
    }
?>