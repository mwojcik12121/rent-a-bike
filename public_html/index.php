<?php

require_once "config.php";
require_once "session.php";

$error = '<br>';

if(isset($_SESSION["userId"])) {
    header("location: https://wypozyczalnia-rowerow-io.000webhostapp.com/main");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if(empty($username) || empty($username)) {
        $error = '<p class="error">Nieprawidłowa nazwa użytkownika lub hasło!</p>';
    }
    
    if($error = '<br>') {
        if($query = mysqli_prepare($db, "SELECT * FROM pracownicy WHERE nazwa_uzytkownika = ? AND haslo = ?")) {
            
            mysqli_stmt_bind_param($query, "ss", $username, $password);
            mysqli_stmt_execute($query);
            mysqli_stmt_bind_result($query, $rid, $mail, $tel, $pwd, $usr);
            $row = mysqli_stmt_fetch($query);
            
            if($row) {
                
                $_SESSION["userId"] = $rid;
                $_SESSION["user"] = $usr;
                
                header("location: https://wypozyczalnia-rowerow-io.000webhostapp.com/main");
                exit;
            } else {
                $error = '<p class="error">Nieprawidłowa nazwa użytkownika lub hasło!</p>';
            }
        }
        mysqli_close($db);
    }
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Logowanie - Rent-A-Bike</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<style>
    .form-control:not(active) {
        color: white;
    }
    .form-control:focus {
        border-color: #000000;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(0, 0, 0, 0.6);
        color: white;
    }
</style>

<body>
  <header>
    <!-- place header here-->
  </header>
  <main>
    <!-- Background image -->
    <div
        class="bg-image"
        style="background-image: url('bg.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        height: 100vh;">

        <div class="container" style="overflow: auto; display: block; margin: auto; width: 620px; height: 800px; text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%)">
            <img src="logo-black.png" class="img-fluid" style="display: inline-block; max-height: 400px; max-width: 434px; margin: auto; text-align: center"/>
            <br>
            <h1 style="font-size:45px; font-family:courier; color:black"><i><b>RENT-A-BIKE</b></i></h1>
            <p><font style="color: white"><?php echo $error; ?></font></p>
            <br>
            <form action="" method="post" style="display: block; margin: auto; text-align: center; width: 80%">
                <!-- Email input -->
                <div class="form-floating mb-3">
                    <input type="text" id="username" name="username" class="form-control" style="display: block; background-color: rgba(255,255,255,0.3); border-color: rgba(255,255,255,0.3); margin: auto" placeholder="name@example.com"/>
                    <label for="username" style="color: white">Nazwa użytkownika</label>
                </div>
        
                <!-- Password input -->
                <div class="form-floating">
                    <input type="password" id="password" name="password" class="form-control" style="display: block; margin: auto; background-color: rgba(255,255,255,0.3); border-color: rgba(255,255,255,0.3)" placeholder="Password"/>
                    <label for="password" style="color: white">Hasło</label>
                </div>
                <br>
        
                <!-- Submit button -->
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4" style="background-color: aqua; border-color: aqua" value="Submit"><b>Zaloguj się</b></button>
                </div>
            </form>
        </div>
        
    </div>

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