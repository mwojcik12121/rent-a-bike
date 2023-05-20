<?php
session_start();

if(!isset($_SESSION['userId'])) {
    header('location: https://wypozyczalnia-rowerow-io.000webhostapp.com');
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Mapa - Rent-A-Bike</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <div
        class="bg-image"
        style="background-image: url('bg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        height: 100vh;">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" style="margin: 0; float: none;" href="https://wypozyczalnia-rowerow-io.000webhostapp.com/main" style="max-width: 30%;">
                    <img src="logo-white.png" class="img-fluid" style="display: inline-block; height: 5%; width: 5%;"/>
                    <span style="display: inline-block;">Rent-A-Bike</span>
                </a>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="https://wypozyczalnia-rowerow-io.000webhostapp.com/logout.php" aria-current="page" style="text-align: center">Wyloguj
                                <span class="visually-hidden"></span>
                                <img src="logout.png" class="img-fluid" style="display: inline-block; height: 10%; width: 10%;"/>
                            </a>
                        </li>
                    </ul>
                </div>
                <a class="nav-link" style="color: white; margin: 0; float: none; width: 360px; text-align: left">
                    Zalogowano jako:
                </a>
                <a class="nav-link" style="color: white; text-align: left" href="https://wypozyczalnia-rowerow-io.000webhostapp.com/me"><?php echo $_SESSION["user"];?>
                </a>
            </div>
        </nav>
        
        <div style="background-color: rgba(255,255,255,0.3); width: 1700px; height: 800px; position: absolute; top: 53%; left: 50%; transform: translate(-50%, -50%); padding: 30px">
                <div style="width: 400px; height: 740px; background-color: rgba(255,255,255,0.3)">
                    <button type="button" onclick="location.href='../complaints'" style="width: 90%; height: 20%; margin: 19px; background-color: aqua; border-color: aqua"class="btn btn-primary btn-lg btn-block"><b>Reklamacje</b></button>
                    <button type="button" onclick="location.href='../users'" style="width: 90%; height: 20%; margin: 19px; background-color: aqua; border-color: aqua" class="btn btn-primary btn-lg btn-block"><b>Baza wypożyczających</b></button>
                    <button type="button" onclick="location.href='../chats'" style="width: 90%; height: 20%; margin: 19px; background-color: aqua; border-color: aqua" class="btn btn-primary btn-lg btn-block"><b>Wiadomości prywatne</b></button>
                    <button type="button" onclick="location.href='../map'" style="width: 90%; height: 20%; margin: 19px; background-color: deeppink; border-color: deeppink" class="btn btn-primary btn-lg btn-block"><b>Wyświetl mapę</b></button>
                </div>
            </div>
            
            <div class="col-lg-6 my-4" style="display: inline-block; width: 1200px; position: absolute; top: 51%; left: 61%; transform: translate(-50%, -50%)">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506.1731426445946!2d19.033119367785517!3d50.25546865595823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4716ce4ab18489bf%3A0x9696aa16441bbdec!2sKrasi%C5%84skiego%208%2C%2040-019%20Katowice!5e0!3m2!1spl!2spl!4v1675011476953!5m2!1spl!2spl" width="1200" height="740" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        
    </div>
   
  </main>
  
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>