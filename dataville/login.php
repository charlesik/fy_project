<?php

    $email = $_POST["email"];
    $passcode = $_POST["passcode"];

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "dataville_db";

    $conn = mysql_connect($dbhost,$dbuser,$dbpass,$dbname);

    if (!$conn){
        die("Connection Failed:" . mysqli_connect_error());
    }else{
        echo "Succesfully connected to database";
    }

    mysqli_close($conn);

    

?>