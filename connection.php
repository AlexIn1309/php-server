<?php
function connection(){
    // Database credentials
    $servername = "localhost";
    $username = "english_access";
    $password = "miContrasenya&321";
    $dbname = "english";

    // Establish a connection to MySQL
    $connection = mysqli_connect($servername, $username, $password, $dbname);
}
?>