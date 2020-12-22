<?php
session_start();
$mysqli = mysqli_connect("69.172.204.200", "beckley", "bE_2020_website", "beckley_testDB");

//$name = $_POST['postname'];
$name = filter_input(INPUT_POST, 'postname');

$sql = "INSERT INTO names VALUES('".$name."');";
$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

if($result)
    echo $name . " has been added";
else
    echo $name . " was not added";
?>