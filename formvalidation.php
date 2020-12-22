<!DOCTYPE shtml>
<html>
    <head><meta charset="utf-8">
        <title>Form Validation</title>
        
        <style>
            html {
                background-color:rgb(90, 89, 78);
            }
            .content {
                padding-left:60px;
            }
            form {
                border:solid 3px black;
                width:400px;
                padding:5px;
            }
            form > input {
                width:100%;
            }
            .title {
                font-size:20px;
            }
            p {
                font-weight: bold;
            }
        </style>

        <? include "menu.html"; ?>
    </head>
    <body>
        <div class="content">
           <p class="title">Form Validation</p>

            <script name="validate">
            function validateForm() {
                var x = document.forms["myForm"]["fname"].value;
                var y = document.forms["myForm"]["lname"].value;

                if (x === "" && y === "") {
                    alert("First Name and Last Name must be filled out");
                    return false;
                }
                if (x === "") {
                    alert("First Name must be filled out");
                    return false;
                }
                if (y === "") {
                    alert("Last Name must be filled out");
                    return false;
                }

                return true;
            }

        </script>

            <div class="formInput">
            <form action="addUser.php" method="post" name="myForm" onSubmit="return validateForm()">
                <p>First Name:</p>
                <input name="fname" type="text" /> 
                <p>Last Name:</p>
                <input name="lname" type="text" />
                <p>Telephone:</p>
                <input name="phone" type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                <p>Email:</p>
                <input id="email" name="email" type="email" required>
                <p id="output"></p>
                
                <br>
                
                <input type="submit" value="Submit"/>
            </form>
        </div> 
        </div>
        

    </body>
</html>