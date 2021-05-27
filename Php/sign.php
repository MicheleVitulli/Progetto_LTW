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
        
    }
    mysqli_close($db);

?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Home</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>





</head>
<body>
    
    <div class="d-flex justify-content-center">
        <div class="text-center">
            <h1 class="text-primary">Errore nella Registrazione</h1>
        <div class="card m-4" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Potrebbe già esistere un account che utilizza questa e-mail, controlla i campi riempiti.</h5>
    <a href="../index.html">Torna alla pagina iniziale<a>
    <p class="card-text"></p>
    
  </div>
</div>

    </div>
</div>
</body>
</html>
