<?php

//$mysqli = mysqli_connect("localhost", "cs213user", "letmein", "testDB");
$mysqli = mysqli_connect("69.172.204.200", "beckley", "bE_2020_website", "beckley_testDB");

$sql = "SELECT * FROM users;";
//$sql = "INSERT INTO users(First Name, Last Name, Phone Number, Email) VALUES('$newFirstName','$newLastName','$newEmail','$newPhone','$newEmail');";
$result = mysqli_query($mysqli, $sql) or die(mysqli_error($mysqli));

echo "<pre>";
    echo "First Name     Last Name        Phone Number   Email";
echo "</pre>";
while ($info = mysqli_fetch_array($result)) {
    
    echo "<pre>";
    
    printf("%-12s :\t%-12s :\t%-12s : %-30s", $info['First Name'], $info['Last Name'], $info['Phone Number'], $info['Email']);
    echo "<br>";
    echo "</pre>";
    /*
    echo $info['First Name'];
    echo ",";
    echo $info['Last Name'];
    echo ",";
    echo $info['Phone Number'];
    echo ",";
    echo $info['Email'];
    echo "<br>";
     * */
     
        //$_SESSION['f_name'] = stripslashes($info['firstname']);
        
    }

?>
<html>
<footer>
    <p>1. <a href="index.html" >Home Page</a></p>
    <p>2. <a href="formvalidation.php" >Add another a User</a></p>
    <p>3. <a href="printAllUsers.php" >Or print out all users</a></p>
</footer>
</html>
