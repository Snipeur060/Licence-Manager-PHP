<?php 
function grade($gradeID) {
	if($gradeID === 0){
		return "User";
	}
	elseif($gradeID === 1){
		return "Admin";
	}
	else{
		return "NULL";
	}
}

