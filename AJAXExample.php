<!DOCTYPE html>
<html>
    <head><meta charset="utf-8">
        <title>AJAX Example</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="postJquery.js"></script>
        <? include "menu.html"; ?>
        
        <style>
            html {
                background-color:rgb(90, 89, 78);
            }
            .content {
            padding-left:60px;
            width:680px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <p>AJAX Example</p>
        
            <script>
                function loadFile() {
                    document.getElementById("file").innerHTML = "Function Ran";
                    document.getElementById("lfState1").innerHTML = "";
                    document.getElementById("lfState2").innerHTML = "";
                    document.getElementById("lfState3").innerHTML = "";
                    document.getElementById("lfState4").innerHTML = "";
                    
                    var xhttp = new XMLHttpRequest();

                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 2 && this.status == 200) {
                            document.getElementById("lfState1").innerHTML = "State One has been completed";
                            document.getElementById("lfState2").innerHTML = "State Two has been completed";
                        }
                        if (this.readyState == 3 && this.status == 200) {
                            document.getElementById("lfState3").innerHTML = "State Three has been completed";
                        }
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("lfState4").innerHTML = "State Four has been completed";
                            document.getElementById("file").innerHTML = this.responseText;
                        }
                    };
                     xhttp.open("GET", "ajaxtest.txt", true);
                    xhttp.send();
                }
            </script>
            <script>
                function sendName() {
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("POST","addName.php",true);
                    let postname = document.getElementById("name").value;
                    
                    document.getElementById("snState1").innerHTML = "";
                    document.getElementById("snState2").innerHTML = "";
                    document.getElementById("snState3").innerHTML = "";
                    document.getElementById("snState4").innerHTML = "";

                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 2 && this.status == 200) {
                            document.getElementById("snState1").innerHTML = "State One has been completed";
                            document.getElementById("snState2").innerHTML = "State Two has been completed";
                        }
                        if (this.readyState == 3 && this.status == 200) {
                            document.getElementById("snState3").innerHTML = "State Three has been completed";
                        }
                        if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("snState4").innerHTML = "State Four has been completed";
                            document.getElementById("result").innerHTML = this.responseText;
                        }
                    };
                    
                    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xhttp.send(postname);
                    
                    /*
                    I basically copied this code form Mitch's presentation, and I still couldn't get it to work.
                    The SQL on the other end just does not grab the passed value for postname.
                    
                    I have tried many different wait ways of doing POST and followed many different tutorials and 
                    just cannot get it to work.
                    
                    //This is the php code for addName.php
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
                    */
                };
            </script>
            <script>
                function grabName() {
                    var xhttp = new XMLHttpRequest();
                    var name = document.getElementById("fname").value;
                    
                    document.getElementById("gnState1").innerHTML = "";
                    document.getElementById("gnState2").innerHTML = "";
                    document.getElementById("gnState3").innerHTML = "";
                    document.getElementById("gnState4").innerHTML = "";
                    
                    xhttp.onreadystatechange = function() {
                        if (this.readyState == 2 && this.status == 200) {
                            document.getElementById("gnState1").innerHTML = "State One has been completed";
                            document.getElementById("gnState2").innerHTML = "State Two has been completed";
                        }
                        if (this.readyState == 3 && this.status == 200) {
                            document.getElementById("gnState3").innerHTML = "State Three has been completed";
                        }
                        if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("gnState4").innerHTML = "State Four has been completed";
                            document.getElementById("result2").innerHTML = this.responseText;
                        }
                    };
                    
                    xhttp.open("GET", "grabName.php?name="+name, true);
                    xhttp.send();
                };
            </script>
        

            <div>
                <p>Load File / Server Connection Test</p>
                <p id="lfState1"></p>
                <p id="lfState2"></p>
                <p id="lfState3"></p>
                <p id="lfState4"></p>
                
                <button type="button" onclick="loadFile()">Load File</button>
                
                <p id="file"></p>
                 
                <br>
            </div>
            <div>
            <form id="myForm" >
                First Name to Send:<input name="name" id="name" type="text"> 
                <button id="sub" type="button" onclick="sendName()">Submit</button>
                <p>Send Name / Post Connection Test</p>
                <p id="snState1"></p>
                <p id="snState2"></p>
                <p id="snState3"></p>
                <p id="snState4"></p>
                <p id="result"></p>
                <p id="help">^^^ This is still broken ;_; ^^^</p>
                First Name to Grab:<input name="fname" id="fname" type="text"> 
                <button id="sub2" onclick="grabName()" type="button">Submit</button>
                <p>Send Name / Post Connection Test</p>
                <p id="gnState1"></p>
                <p id="gnState2"></p>
                <p id="gnState3"></p>
                <p id="gnState4"></p>
                <p id="result2">Name Status: Not sent</p>
                <p>You can pull: Corey, Deb, Dave, Davie</p>
            </form>
            </div>
        </div>
        

    </body>

</html>