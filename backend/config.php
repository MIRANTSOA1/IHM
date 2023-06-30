<?php

$conn = mysqli_connect("localhost", "root", "", "gestion_des_notes");
if (!$conn) {
    echo "Connection Failed";
}