<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'portfolio';

    $conn =  mysqli_connect($host, $user, $pass, $database);

    if(!$conn){
        die('Connection Error: ' mysqli_connect_error());
    }

    if(!function_exists('date_default_timezone_set')) {
        date_default_timezone_set('Asis/Kolkata');
    }

    $dataTime = date('Y-m-d H:i:s');
?>