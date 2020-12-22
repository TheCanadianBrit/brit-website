<?php

$mysqli = mysqli_connect("69.172.204.200", "beckley", "bE_2020_website", "beckley_testDB");

$newFirstName = filter_input(INPUT_POST, 'fname');
$newLastName = filter_input(INPUT_POST, 'lname');
$newPhone = filter_input(INPUT_POST, 'phone');
$newEmail = filter_input(INPUT_POST, 'email');

$sql = "INSERT INTO users(`First Name`, `Last Name`, `Phone Number`, `Email`) VALUES('$newFirstName','$newLastName','$newPhone','$newEmail');";

$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

?>

<html>
    <head>
        <title>New User</title>
        <? include "menu.html"; ?>
        <style>
            html {
                background-color:rgb(90, 89, 78);
            }
            .content {
                padding-left:60px;
            }
            td {
                padding:7px;
                border:1px solid;
            }
        </style>
    </head>

    <body>
        <div class="content">
            <p style="font-size:20px"><strong>New record added succesfully</strong></p>
            <br>
            <table>
                <tr>
                    <td><strong>First Name</strong></td>
                    <td><strong>Last Name</strong></td>
                    <td><strong>Phone</strong></td>
                    <td><strong>Email</strong></td>
                </tr>
                <tr>
                    <td><?php echo $newFirstName;?></td>
                    <td><?php echo $newLastName;?></td>
                    <td><?php echo $newPhone;?></td>
                    <td><?php echo $newEmail;?></td>
                </tr>
            </table>
        </div>
    </body>

</html>