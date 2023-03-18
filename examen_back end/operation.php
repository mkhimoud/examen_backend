<?php
require_once 'connexion_db.php';
require_once 'function.php';

$username="";
$email="";
$password="";
$confirmpassword="";

   // envoyer de formulaire de type login
   if (isset($_POST['register_submit'])) {
    
    $username = htmlspecialchars($_POST['username']);
    $email=htmlspecialchars($_POST ['email']);
    $password = htmlspecialchars($_POST['password']);
    $confirmpassword = htmlspecialchars($_POST['confirmpassword']);
    
    registerNewUser( $username, $email, $password, $confirmpassword, $dbh);
}


 ?>