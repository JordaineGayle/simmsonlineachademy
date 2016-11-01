<?php
session_start();
require "config.php";

class register extends configuration {
    
    public function getRegister($user,$p1,$p2,$terms) {
        
        if($terms == "accept"){
            $hash = password_hash($p1,PASSWORD_BCRYPT);
            
            $query = $this->connect->query("INSERT INTO `users` (`email`,`password`) VALUE ('$user','$hash') ");
            
            $_SESSION["email"] = $user;
            
            header("Location:../select.php");
        }else{
            echo header("Location:../register.php?error=noaccept");
        }
    }
    
    public function setType($user,$type) {
        $this->connect->query("UPDATE `users` SET `type`='$type' ");
    }
    
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user    = test_input($_POST["username"]);
    $p1      = test_input($_POST["password1"]);
    $p2      = test_input($_POST["password2"]);
    $terms   = test_input($_POST["termscheck"]);
    $selection = test_input($_POST["selection"]);
}

//escape function
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$reg = new register;

switch ($selection) {
    case 'logregister':
        echo $reg->getRegister($user,$p1,$p2,$terms);
        break;
    
    case 'coach':
        echo $reg->setType($_SESSION["email"],"coach");
        break;
        
    default:
        // code...
        break;
}

