<!DOCTYPE html>
<html>
    <head>
        <title>
            Login Form
        </title>
        <body>
            <form action="getpost.php" method="get">
                <label for="uname"> User Name: </label> <br>
                <input type="text" name="UN">
                <br><br>
                <label for="password"> Password: </label> <br>

                <input type="number" name="PASS">
                <br><br>
                <Button>Login</Button>
            </form>
        </body>
    </head>
</html>
<?php
    $name=$_GET["UN"];//. " <br" for line break
    echo"{$name}<br>";
    $password=$_POST["PASS"];
    echo"{$password} <br>";
?>