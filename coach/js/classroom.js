// JavaScript Document

function addCourse(selection) {
		$(".container_main,.container_select").fadeIn(500);
	}
function cancelAddCourse(){
	$(".container_main,.container_select").fadeOut(500);
	}	
function addCourceSelection(subject){
	$.post("classes/extention.php",{subject:subject,collect:"addCourse"},function(data){
		$("#main").html(data);
		});
	}	