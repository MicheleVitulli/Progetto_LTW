<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="../JavaScript/script.js"></script>
    <title>Lezione Tre</title>


</head>

<body>
    <!-- HEADER -->

    <header class="header bg-light sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <div class="container">
                    <span class="navbar-brand" href="#">LTW</span>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                        </ul>
                        <div>
                            <a href="../index.html" class="btn btn-outline-primary" role="button"
                                onclick="sessionStorage.clear();">Log out</a>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Lezione -->
    <div class="container-fluid ">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/"
                        class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        id="menu">
                        <li class="nav-item">
                            <a href="home.html" class="nav-link align-middle px-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-house-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd"
                                        d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-book" viewBox="0 0 16 16">
                                    <path
                                        d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                                </svg> <span class="ms-1 d-none d-sm-inline">Lezioni</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="lezione1.html.php" class="nav-link px-0" id="lezione1">
                                        <span class="d-none d-sm-inline">Lezione</span>
                                        1
                                    </a>
                                </li>
                                <li>
                                    <a href="lezione2.html.php" class="nav-link px-0" id="lezione2"> <span
                                            class="d-none d-sm-inline">Lezione</span>
                                        2
                                    </a>
                                </li>
                                <li>
                                    <a href="lezione3.html.php" class="nav-link px-0" id="lezione2"> <span
                                            class="d-none d-sm-inline">Lezione</span>
                                        3
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-archive" viewBox="0 0 16 16">
                                    <path
                                        d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                </svg> <span class="ms-1 d-none d-sm-inline">Sezione</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#uno" class="nav-link px-0"> <span class="d-none d-sm-inline">Video</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#due" class="nav-link px-0"> <span
                                            class="d-none d-sm-inline">Commenti</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                    <hr>

                </div>
            </div>

            <div class="col py-3">
                <a name="uno"></a>

                <div class=" border-bottom container col-xxl-12 px-2 py-2">
                    <div class="row flex-lg-row  g-5 py-5">


                        <div class="col">
                            <h1 id="lezione" class="display-5 fw-bold lh-1 mb-3 text-center">Lezione 3</h1>
                        </div>

                    </div>
                </div>

                <div class="container">

                    <div class="mt-4">
                        <div class="ratio ratio-16x9">
                            <iframe class="videoLezione border p-2"
                                src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                        </div>
                    </div>


                    <div class="mt-4">
                        <a href="https://drive.google.com/file/d/1OAd4MN_J0aHgSoqrO8RVv2-a4_2NGwlR/view?usp=sharing"
                            target="_blank">Slides della lezione</a>
                    </div>
                    <div class="col mt-4 border-bottom">
                        <p class="lead">Approfondimento di Html, formattazione dei documenti e relativi stili con Css</p>
                    </div>
                    <div class="mt-4"> <a name="due"></a>
                        <h2 class="titoli-sezioni">Commenti</h2>
                        <section id="commenti">
                            <ul id="lista_commenti">
                                <?php
                                   include("../Php/config.php");
                                   include("config.php");
                                   $sql ="SELECT * FROM Commenti WHERE Commenti.lezione = 'Lezione 3'";
                                   $res=mysqli_query($db,$sql);
                                   while($row = mysqli_fetch_assoc($res)){
                                     echo "<li>".$row['utente'].': '.$row['commento']."</li>";
                                   };
                                ?>
                            </ul>
                        </section>
                        </section>
                        <h3 class="titoli-sezioni">Inserisci un commento</h3>
                        <div class="mb-3">
                            <form id="myForm" class="" onsubmit="mySubmit()" action="../Php/inserisci_commento.php"
                                method="post">
                                <input class="form-control" type="text" id="testo" rows="3" name="commento">
                                <input type="hidden" id="user_name" name="user" value="">
                                <input type="hidden" id="lezione_name" name="lezione" value="">
                                <input type="button" onclick="mySubmit(); document.getElementById('testo').value ='';"
                                    name="" value="Aggiungi" class=" m-3 btn btn-primary">
                            </form>
                        </div>
                        <script>
                            function mySubmit() {
                                document.getElementById('user_name').value = sessionStorage.getItem('login_user');
                                document.getElementById('lezione_name').value = document.getElementById('lezione').innerHTML;
                                document.getElementById("myForm").submit();
                            }
                            function open() {
                                document.getElementById('myForm').style.visibility = 'hidden';
                            }

                        </script>
                        <!--sezione per eliminazione-->
                        <h3>Elimina un tuo commento</h3>

                        <form id="myForm" style="visibility: visible;" class="" action="../Php/elimina_commento.php"
                            method="post">
                            <?php
                                 include("../Php/config.php");
                                 $sql ="SELECT * FROM Commenti";
                                 $res=mysqli_query($db,$sql);
                                 while($row = mysqli_fetch_assoc($res)){
                                     if($row['utente'] == $_SESSION['login_user_for_php']&& $row['lezione'] == 'Lezione 3'){
                                   echo "<label class='mx-2'>".$row['commento']."</label>";
                                   echo "<input type='checkbox' class='form-check-input' name='id_commento[]' value='".$row['id']."'>";
                                   echo "<br>";
                                     }
                                }
                              ?>
                            <input type="submit" class="m-3 btn btn-secondary" name="" value="Elimina">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>






    <!-- FOOTER -->

    <footer class="footer pt-4 pb-4 bg-light">
        <div class="container">
            <div class="row">
                <div class=" h-100 text-center">
                    <ul class="list-inline mb-2">



                    </ul>
                    <p class=" text-muted small mb-4 mb-lg-0 ">Progetto LTW Macrì Vitulli</p>
                </div>


            </div>
        </div>

    </footer>


</body>

</html>