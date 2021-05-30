<?php
  include("config.php");
  $sql ="SELECT * FROM Commenti";
  $res=mysqli_query($db,$sql);
  while($row = mysqli_fetch_assoc($res)){
    echo $row['utente'].": ".$row['commento'];

  };



 ?>
