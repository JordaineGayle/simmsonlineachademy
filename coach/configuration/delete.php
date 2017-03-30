<?php
/*
$con = mysqli_connect("localhost","BOB","","bob");


if($con == true){
    echo "success \n";
}

$userid = $_POST['id'];

$sql = "DELETE FROM course_class WHERE class_ID=$userid";

$del = mysqli_query($con,$sql);

if(!$del){
   echo "Error deleting data";
}else{
    
     echo "success";
}*/
/*require "../../simms/coach/classes/section_class.php";

class delete{
    
    public $connect;
    
    public $id;
    
    public function __construct(){
        
        
        
        $this->connect = mysqli_connect("localhost","BOB","","bob");
        
        $this->id = $_POST['id'];
        
        $userID = $this->id;
        
        $sql = "DELETE FROM course_class WHERE class_ID=$userID";
        
        $query = $this->connect->query($sql);
        
        $del = $query;
        
        if(!$del){
   echo "Error deleting data";
        }
        else{
     echo "success";
} 
        
    }
    
}

$ok = new delete();
*/
/*require "config.php";

class delete extends configuration{
    
    public function uer(){
        
        $userID = $_POST['id'];
        
        sql = "DELETE FROM course_class WHERE class_ID=$userID";
        
        $query = $this->connect->query(sql);
        
        $del = $query;
        
        if(!$del){
   echo "Error deleting data";
   //header("refresh:1; url=../../simms/coach/classroom.php");
}else{
    
     echo "success";
}      
        
    }
    
    

}
$ok = new delete;

$ok->uer();
*/
include "../classes/section_class.php";
class Delete extends configuration{
    
    public function del_row($userID){
        if($this->connect == true){
            echo "Connect Successfully";
        }else{
            echo"Error connecting to db";
        }
        
        $sql = "DELETE FROM course_class WHERE class_ID=$userID";
        
        $del = $this->connect->query($sql);
        
        if($del == true){
            echo "Data successfully Deleted";
        }else{
            echo "Data not deleted!";
        }
        
        
    }
}

?>