<?php

define('DBSERVER', 'localhost');
define('DBUSERNAME', 'id20103827_root');
define('DBPASSWORD', '_zdamy_to_I0');
define('DBNAME', 'id20103827_wypozyczalniadb');

$db = mysqli_connect(DBSERVER, DBUSERNAME, DBPASSWORD, DBNAME);

if($db == false) {
    die("Error: connection error. " . mysqli_connect_error());
}

?>