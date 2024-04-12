<?php

$csvFile = 'users_list.csv';
$un = $_POST["username"];
$pass = $_POST["password"];
$csvData = array_map('str_getcsv', file($csvFile));

foreach ($csvData as $row) {
    if ($row[0] == $un) { 
        if ($row[3] == $pass) {
            session_start();
            $_SESSION["username"] = $un;
            header("Location: ../Pages/HomePage.php");
            exit;
        } else {
            header("Location: ../index.php?error=wrong_password");
            exit;
        }
    }
}

header("Location: ../index.php?error=user_doesnt_exist");
exit;
?>