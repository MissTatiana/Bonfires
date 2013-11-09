<?php

class validationModel {
	
	function checkMessage($data) {
		
		//define regex
		$namePattern = "/^[a-z ,.'-]+$/i";
		$emailPattern = "/[^@]+@[^@]+\.[^@]+/";
		
		//vars for data coming in
		$name = $data['name'];
		$email = $data['email'];
		
		$result = "";
		
		//check name against regex
		if(preg_match($namePattern, $name)) {
			$result = 1;
			return $result;
		}
		else {
			$result = 0;
			return $result;
		}
		
		//check email against regex
		if(preg_match($emailPattern, $email)) {
			$result = 1;
			return result;
		}
		else {
			$result = 0;
			return result;
		}
		
	}//end checkMessage
	
}//end validationModel

?>