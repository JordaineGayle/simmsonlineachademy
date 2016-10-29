<?php 

class configuration {

public $connect;
  
  public function __construct(){
    $this->connect = mysqli_connect("localhost","v5z4a0x4_simmsonlineacademy","[w{B&251BuPD","v5z4a0x4_SOC");
    #$this->connect = mysqli_connect("localhost","sgtcadet","","emelio_devel002");
 
  }
}