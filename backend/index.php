<?php

$user = 'root';
$pass = '';
try{
    $db = new PDO('mysql:host=localhost; dbname=note', $user, $pass);
    foreach($db ->  querry('SELECT * FROM notes') as $row){
        print_r ($row);
    }
} catch(PDOException $e){
    print "Erreur :" . $e -> getMessage() . "<br/>";
    die;
}