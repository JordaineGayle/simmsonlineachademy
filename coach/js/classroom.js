// JavaScript Document

function addCourse(selection) {
		$(".container_main,.container_select").fadeIn(500);
	}
function cancelAddCourse(){
	$(".container_main,.container_select").fadeOut(500);
	}	
function addCourceSelection(subject,identifier){
	$.post("classes/extention.php",{subject:subject,collect:"addCourseEdit"},function(data){
		$("#main").html(data);
		$("#main").animate({height:"600px"},1000);
		});
	}
	