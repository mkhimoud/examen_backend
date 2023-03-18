<?php
include_once "operation.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">     
        <title>Inscription</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <div class="blok">
        <div class="blok1">
            <h1>Sign Up</h1>
            <h4>Privaci et Term of service <hr></h4>           
        </div>
        <div>
            <form class="flex-container" action="login.php" method="POST">
                <label for="fname">USERNAME</label>
                <input type="text" required id="username" name="username" placeholder="name">
                <label for="lname">E-MAIL</label>
                <input type="email" required id="email" name="email" placeholder="name@example.com">
                <label for="lname">PASSWORD</label>
                <input type="password"  required id="password" name="password" placeholder="************">
                <label for="lname">CONFIRM PASSWORD</label>
                <input type="confirmpassword"  required id="confirmpassword" name="confirmpassword" placeholder="************">  
                <div class="btn">
                    <button class="button" name="register_submit" type="submit" ><span>Register </span></button>
                    <p>or</p>
                    <button class="button_SignIn"><span>Sign In  </span></button>                    
                </div>               
            </form>           
        </div>
    </body>
</html>