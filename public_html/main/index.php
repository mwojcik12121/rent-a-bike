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
  <title>Strona główna - Rent-A-Bike</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<style>
    #complaints {
        margin-top: 50px;
        margin-bottom: 25px;
        margin-left: 50px;
        margin-right: 25px;
    }
    #users {
        margin-top: 50px;
        margin-bottom: 25px;
        margin-left: 25px;
        margin-right: 50px;
    }
    #chats {
        margin-top: 25px;
        margin-bottom: 50px;
        margin-left: 50px;
        margin-right: 25px;
    }
    #map {
        margin-top: 25px;
        margin-bottom: 50px;
        margin-left: 25px;
        margin-right: 50px;
    }
</style>

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
        <div class="container" style="display: block; margin: auto; width: 1000px; height: 400px; text-align: center; position: absolute; top: 35%; left: 50%; transform: translate(-50%, -50%)">
            <div>
                <div id="complaints" class="card" onclick="window.location='https://wypozyczalnia-rowerow-io.000webhostapp.com/complaints';" style="display: inline-block; width: 400px; background-color: aqua; border-color: aqua">
                    <img class="card-img-top" src="complaints_icon.jpg" alt="<missing file>">
                    <div class="card-body">
                        <p class="card-text" style="text-align: center; background-color: ">
                            <font style="font-size: 24px; color: white">
                                <b>Reklamacje</b>
                            </font>
                        </p>
                    </div>
                </div>
                <div id="users" class="card" onclick="window.location='https://wypozyczalnia-rowerow-io.000webhostapp.com/users';" style="display: inline-block; width: 400px; background-color: aqua; border-color: aqua">
                <img class="card-img-top" src="users_icon.jpg" alt="<missing file>">
                    <div class="card-body">
                        <p class="card-text" style="text-align: center; background-color: ">
                            <font style="font-size: 24px; color: white">
                                <b>Baza wypożyczających</b>
                            </font>
                        </p>
                    </div>
                </div>
            </div>
            
            <div>
                <div id="chats" class="card" onclick="window.location='https://wypozyczalnia-rowerow-io.000webhostapp.com/chats';" style="display: inline-block; width: 400px; background-color: aqua; border-color: aqua">
                    <img class="card-img-top" src="chats_icon.jpg" alt="<missing file>">
                    <div class="card-body">
                        <p class="card-text" style="text-align: center; background-color: ">
                            <font style="font-size: 24px; color: white">
                                <b>Wiadomości prywatne</b>
                            </font>
                        </p>
                    </div>
                </div>
                <div id="map" class="card" onclick="window.location='https://wypozyczalnia-rowerow-io.000webhostapp.com/map';" style="display: inline-block; width: 400px; background-color: aqua; border-color: aqua">
                <img class="card-img-top" src="map_icon.png" alt="<missing file>">
                    <div class="card-body">
                        <p class="card-text" style="text-align: center; background-color: ">
                            <font style="font-size: 24px; color: white">
                                <b>Mapa stacji</b>
                            </font>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- Background image -->
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>