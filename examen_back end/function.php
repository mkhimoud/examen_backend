<?php

function registerNewUser( $username, $email, $password, $confirmpassword,  $db_host) {
    $stm = $db_host->prepare("INSERT INTO user ( username, password, confirmpassword, email) VALUES ( :username, :password, :confirmpassword, :email )");
    $stm->bindParam(':username', $username);
    $stm->bindParam(':email', $email);
    $stm->bindParam(':email', $email);
   
// Hash le password
    $password_crypt = password_hash($password, PASSWORD_BCRYPT);
    $stm->bindParam(':password', $password_crypt);
    $confirmpassword_crypt = password_hash($confirmpassword, PASSWORD_BCRYPT);
    $stm->bindParam(':confirmpassword', $confirmpassword_crypt);
    $stm->execute();
   
}
 // verifie que le password = confirmpassword
function verifypassword($password, $confirmpassword, $db_host) {
   
    $stm = $db_host->prepare("SELECT * FROM user WHERE password = :password OR confirmpassword = :confirmpassword ");
    $stm->bindParam(":password", $password);
    $stm->execute();
    $user = $stm->fetch();

    if($password==$confirmpassword ){  
        return [
            "isConnected" => FALSE,
        ];
        }   
}

?>