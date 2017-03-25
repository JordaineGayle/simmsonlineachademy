<?php

require "config.php";

class assignments extends configuration {
		
		public function DeleteAssignment($classID) {
		$this->connect->query("DELETE FROM `class_assignment` WHERE `class_ID`='$classID'");
		
		$query = $this->connect->query("SELECT * FROM `class_assignment` WHERE `class_ID`='$classID' ");
			
			
			while($result = $query->fetch_assoc()){
				
				?>
					
                    	<tr>
                        	<td><?php echo $result['title'];?></td>
                            <td><?php echo $result['assignment'];?></td>
                            <td><a class="btn" onclick="ManageAssing('delete','<?php echo $result['class_ID']?>')">Delete</a></td>
                            <td><a class="btn" onclick="ManageAssing('edit','<?php echo $result['class_ID']?>')">Edit</a></td>
                        </tr>
                    
				<?php
				
				}}
		public function EditAssignment($assignment,$assigndetail,$classid,$assignID,$account){
			
			if(empty($assignID)){
				
				$this->connect->query("INSERT INTO `class_assignment` (`class_ID`,`title`,`assignment`,`coach`) VALUES ('$classid','$assignment','$assigndetail','$account') ");
				
				$query = $this->connect->query("SELECT * FROM `class_assignment` WHERE `class_ID`='$classid' ");
				
				?>
				<h2 style="">Resources</h2>
                
                <h3>Textbooks</h3><br>
                
                <p>Textbooks are currently unavailable, please check back later when the library comes online</p><br><br>
                
                <h3>Assignments</h3><br>
                <?php 
					while($result = $query->fetch_assoc()){
					
					?>
						<tr>
                        	<td><?php echo $result['title'];?></td>
                            <td><?php echo $result['assignment'];?></td>
                            <td><a class="btn" onclick="ManageAssing('delete','<?php echo $result['assignmentID']?>')">Delete</a></td>
                            <td><a class="btn" onclick="ManageAssing('edit','<?php echo $result['assignmentID']?>')">Edit</a></td>
                        </tr>
					<?php
					}
				?>
                <a class="btn" style="cursor:pointer" onClick="showAssignment()">Add Assignment</a><br><br>
                
                <h3>Quiz</h3><br>
                <a class="btn" style="cursor:pointer">Add Quiz</a><br><br>
                
                <h3>Transcript</h3><br>
                <a class="btn" style="cursor:pointer">Add Transcript</a><br><br>
                
				<?php
				
				}else{
					
					}
			
			}
		public function AddAssignment($classID) {
			
			?>
				<h2>Assignment</h2>
                    <table>
                    	<tr>
                        	<td>Assignment Title:</td>
                            <td><input type="text" name="assignmentName">
                            </td>
                        </tr>
                        <tr>
                        
                            <td colspan="2"><textarea name="assignment" id="editor1"></textarea></td>
                        </tr>
                        <tr>
                        	<td> <a class="btn" style="cursor:pointer" onClick="addAssignment('<?php echo $classID;?>','<?php echo $_SESSION["account"];?>')">Update</a></td>
                        </tr>
                       
                    </table>
                    
                    <script>
                    	function addAssignment(classID,coach){
							var assignment = $("input[name=assignmentName]").val();
							var detail	   = $("textarea[name=assignment]").val();	
							$.post("configuration/master_handler.php",{classID:classID,assignment:assignment,detail:detail,handle:"assignment",action:"edit"},function(data){
								$(".resources").html(data);
								});
							}	
							
							// Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
                    </script>
			<?php
			}	
										
	}

