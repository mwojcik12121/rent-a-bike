<?php
session_start();

if(!isset($_SESSION['userId'])) {
    header('location: https://wypozyczalnia-rowerow-io.000webhostapp.com');
    exit;
}

function getAllResults()
{
    require_once("../config.php");
    
    $iter = 1;
    
    if($query = mysqli_prepare($db, "SELECT * FROM klient"))
    {
        mysqli_stmt_execute($query);
        mysqli_stmt_bind_result($query, $rid, $mail, $phone, $money, $pwd, $usrname);
        
        while($row = mysqli_stmt_fetch($query))
        {
            echo "<tr>";
            echo "<th>". $rid ."</th>";
            echo "<td>". $usrname ."</td>";
            echo "<td><a href=\"https://wypozyczalnia-rowerow-io.000webhostapp.com/users/details?id=" . $rid . "\">Podgląd</a></td>";
            echo "</tr>";
            
            $iter++;
        }
        $iter = 0;
    }
    mysqli_close($db);
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Wypożyczający - Rent-A-Bike</title>
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
                    <button type="button" style="width: 90%; height: 20%; margin: 19px; background-color: aqua; border-color: aqua" onclick="location.href='../complaints'" class="btn btn-primary btn-lg btn-block"><b>Reklamacje</b></button>
                    <button type="button" style="width: 90%; height: 20%; margin: 19px; background-color: deeppink; border-color: deeppink" onclick="location.href='../users'" class="btn btn-primary btn-lg btn-block"><b>Baza wypożyczających</b></button>
                    <button type="button" href="https://wypozyczalnia-rowerow-io.000webhostapp.com/chats" style="width: 90%; height: 20%; margin: 19px; background-color: aqua; border-color: aqua" onclick="location.href='../chats'" class="btn btn-primary btn-lg btn-block"><b>Wiadomości prywatne</b></button>
                    <button type="button" href="https://wypozyczalnia-rowerow-io.000webhostapp.com/map" style="width: 90%; height: 20%; margin: 19px; background-color: aqua; border-color: aqua" onclick="location.href='../map'" class="btn btn-primary btn-lg btn-block"><b>Wyświetl mapę</b></button>
                </div>
            </div>
            
            <div class="col-lg-6 my-4" style="display: inline-block; text-align: center; padding: 70px; width: 1200px; height: 740px; background-color: rgba(255,255,255,0.3); position: absolute; top: 50%; left: 61%; transform: translate(-50%, -50%)">
                
                <h1 style="font-size: 48px; color: white"><b>Wypożyczający</b></h1>
                
                <div div style="margin: 20px; margin-top: 40px; padding: 5px; background-color: rgba(255,255,255,0.3); height: 500px">
                    <div style="margin: 5px; background-color: white">
                        <table class="table table-striped table-hover" style="overflow: auto; max-height: 670px">
                            <thead style="color: white; background-color: aqua">
                                <tr>
                                    <th scope="col">ID klienta</th>
                                    <th scope="col">Nazwa użytkownika</th>
                                    <th scope="col">Szczegóły</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php getAllResults();?>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                
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