<?php
   include("config.php");
   session_start();
   $all = $_POST['id_commento'];
   foreach ($all as $id) {
    $sql = "DELETE FROM Commenti WHERE Commenti.id = $id";
    mysqli_query($db,$sql);
   }
   header("Location: {$_SERVER['HTTP_REFERER']}");
    
     


?>
