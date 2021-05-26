<?php
   include("config.php");
   session_start();
   $user=$_POST['nuovo_user'];
   $passcode=$_POST['nuova_password'];

   $find_id="SELECT MAX(id) as max_id FROM Utenti";
   $res_id=mysqli_query($db,$find_id);
   $row = mysqli_fetch_assoc($res_id); 

    $id = $row['max_id'] + 1;

    $sql="INSERT INTO Utenti VALUES ('$id', '$user', '$passcode')";
    if (mysqli_query($db, $sql)) {
        //echo "Account creato correttamente";
        header("location: ../Login/index.html");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
    mysqli_close($db);

?>

