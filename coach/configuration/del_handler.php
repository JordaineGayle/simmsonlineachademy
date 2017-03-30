<?php
//Test file!;

include "delete.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    @$getid = secure_data($_POST['id']);
}else{
    echo "No request sent!";
}



function secure_data($data)
{   $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>