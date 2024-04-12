<?php

function VarExist($var){
    if (isset($var)){
        return $var;
    }else{
        header("location:../index.php");
    }
}

$user=new stdClass();

$user->un=VarExist($_POST["username"]);
$user->fn=VarExist($_POST["firstname"]);
$user->ln=VarExist($_POST["lastname"]);
$user->pass=VarExist($_POST["pass"]);
$user->sex=VarExist($_POST["sex"]);
$user->bd=VarExist($_POST["birthdate"]);


insert_into_CSV($user);

function insert_into_CSV($user){
    $filename = "users_list.csv";
    $db = fopen($filename,'a');
    if ($db) {
        fputcsv($db, (array)$user);
        fclose($db); 
        header("Location: Congrats.html");
        exit;
    } else {
        echo "Error: Unable to open file.";
    }
}


?>