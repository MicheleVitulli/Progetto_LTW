<?php
   include("config.php");
   session_start();
   $user = $_POST['user'];
   $lezione = $_POST['lezione'];
   $commento =$_POST['commento'];

   $find_id="SELECT MAX(id) as max_id FROM Commenti";
   $res_id=mysqli_query($db,$find_id);
   $row = mysqli_fetch_assoc($res_id);

    $id = $row['max_id'] + 1;

    $sql="INSERT INTO Commenti VALUES ('$id', '$lezione', '$user', '$commento')";
    if (mysqli_query($db, $sql)) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
    } else {
      echo mysqli_error($db);

    }
    mysqli_close($db);

?>
