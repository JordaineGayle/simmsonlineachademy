<?php
require "config.php";

class register extends configuration {
    
    public function getRegister($user,$p1,$p2,$terms) {
        
        if($terms == "accept"){
            echo "accept";
        }else{
            echo "not";
        }
    }
    
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $user    = test_input($_POST["user"]);
    $p1      = test_input($_POST["p1"]);
    $p2      = test_input($_POST["p2"]);
    $terms   = test_input($_POST["terms"]);
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
echo $reg->getRegister($user,$p1,$p2,$terms);