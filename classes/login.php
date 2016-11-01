<?php

session_start();
require "config.php";

class login extends configuration {
    
    public function getCredentials () {
        
    }
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user    = test_input($_POST["username"]);
    $p1      = test_input($_POST["password"]);
    $selection = test_input($_POST["password2"]);

}

//escape function
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

switch ($selection) {
    case 'login':
        echo $reg->getRegister($user,$p1,$p2,$terms);
        break;
    
    case 'coach':
        echo $reg->setType($_SESSION["email"],"coach");
        break;
        
    default:
        // code...
        break;
}
?>