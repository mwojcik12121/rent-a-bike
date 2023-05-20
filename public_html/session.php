<?php

session_start();

if(isset($_SESSION['userId']) && $_SESSION['userId'] == true) {
    header('location: https://wypozyczalnia-rowerow-io.000webhostapp.com/main/index.php');
    exit;
}

?>