<?php
$server="localhost";
$user="root";
$pwd="";
$base="bd_notes";
//$db = mysqli_connect($server,$user,$pwd,$base);
$db =new PDO('mysql:host='.$server.';dbname='.$base, $user, $pwd);
 
if (!$db)
 echo "La connexion  à la base de donnée bd_notes a échoué ";
?>