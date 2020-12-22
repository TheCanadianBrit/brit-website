<?php

$mysqli = mysqli_connect("69.172.204.200", "beckley", "bE_2020_website", "beckley_testDB");

$name = $_GET['name'];

$sql = "SELECT names FROM names WHERE names='".$name."';";
$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

if(mysqli_num_rows($result) > 0)
    echo $name . " has been grabbed";
else
    echo $name . " was not grabbed";
?>
