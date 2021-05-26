<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "test";

// Crea Connesione
$db= mysqli_connect($servername,$username,$password,$dbname);
// Verifica Connesione
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
else echo "connesione riuscita";
?>
