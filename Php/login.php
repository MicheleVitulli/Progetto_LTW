<?php
   include("config.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password mandati dal form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT id FROM Utenti WHERE user= '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // Se ho un riscontro devo avere una line soltanto

      if($count == 1) {
         $_SESSION['login_user'] = $myusername;
         echo "Login: Utente: ".$_SESSION['login_user'];
         header("location: ../Html/home.html");
      }else {
         $error = "Il tuo Username o Password è errato";
         echo $error;

      }
   }
   mysqli_close($db);
?>
<br>
<script>alert("sono partito");</script>
<a href="../Html/index.html">Torna al login</a>
