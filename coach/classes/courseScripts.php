<?php
session_start();
require "../../classes/config.php";

class courseMain extends configuration {
	
	public function new_course($aim,$syllNumber,$days,$times,$identifier,$course_Title){
		//collect data and save it in the database
		$this->connect->query("INSERT INTO `course` (`course_name`,`course_time`,`course_aim_id`,`course_section_id`,`account`) VALUES ('$course_Title','$times','$aim','$syllNumber','$identifier') ");
		
		// check if aims where submitted
		$index = 1;
		 //$this->aims($identifier,$index,$aim);
		}
		
	private function aims($identifier,$index,$aim){
		$query = $this->connect->query("SELECT `account` FROM `course_aim` WHERE `account`='$identifier' ");
		$result = $query->fetch_assoc();
		$account = $result['account'];
		// check if user has submitted any aims as yet.
		
		if(isset($account) && !empty($account)){
			//if aims do exist
			
			}else{
				echo "<table>";
				// if no aims where created as yet
				for($x = 0; $x <= $aim; $x++){
					
					?>
						
                        	<tr>
                            	<td>Option <?php echo $x;?></td>
                                <td><input type="text" name="option<?php echo $x;?>"></td>
                            </tr>
                           
					<?php
					
					}
				echo "</table>";
				}
		
		}
	private function sections(){
		
		}		
	}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    @$aim    	= test_input($_POST["aim"]);
	@$syllNumber  	= test_input($_POST["syllNumber"]);
	@$days			= test_input($_POST["daysArray"]);
	@$times			= test_input($_POST["timeArray"]);
	@$course_Title		= test_input($_POST["course_Title"]);
}

//escape function
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$course = new courseMain;
echo $course->new_course($aim,$syllNumber,$days,$times,$_SESSION["account"],$course_Title);
