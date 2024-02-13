<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = "photos";
$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){
    die('Erreur : ' . mysqli_connect_error());
    }
?>
