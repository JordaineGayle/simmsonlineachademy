<?php
session_start();
$ID = $_SESSION["account"];
require "../../classes/config.php";


class section extends configuration {
	
	public function getClasses($SectionID,$ID){
		echo "<h2>Classes</h2>";
		?>
        	
			<div class="addSomething" onClick="addClass()">
            	<i class="material-icons">add_box</i>
            </div>
            
            
            
            
            <script>
            	function addClass() {
					$.post("classes/section_class.php",{loadClass:"addClass",SectionID:"<?php echo $SectionID;?>"},function(data){
						$("#courseUpdates").html(data);
						});
					}
            </script>
		<?php
		}
	
	public function setClasses(){
		
		}
		
	public function addClassesExt($section){
		
		?>
			
            	<input type="text" name="addClasses" />
                <a class="button" onclick="SaveNewClasses()">Save</a>
            
            
            <script>
            	function SaveNewClasses() {
					var addClasses = $("input[name=addClasses]").val();
					var section		= 
					$.post("classes/section_class.php",{addClasses:addClasses,SectionID:"<?php echo $section;?>"},function(data){
						$("#courseUpdates").html(data);
						});
					}
            </script>
		<?php
		
		}
		
	public function addClasses(){
		$query = $this->connect->query("INSERT INTO `course_class` (`section_ID`,`class_name`) VALUES ('$addClasses','$SectionID')");
		}			
	
	}
	
	
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    @$SectionID    	= test_input($_POST["SectionID"]);
	
	@$loadClass		= test_input($_POST["loadClass"]);
	
	@$addClasses 	= test_input($_POST["addClasses"]);
}

//escape function
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}	

$section = new section;

if(isset($SectionID) && !empty($SectionID)){
	$section->getClasses($SectionID,$ID);
	}
if(isset($loadClass) && !empty($loadClass)){
	$section->addClassesExt($SectionID);
	}
if(isset($addClasses) && !empty($addClasses)){
	$section->addClasses($addClasses,$SectionID);
	}		
	
	