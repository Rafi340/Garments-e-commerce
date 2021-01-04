	<?php
	
		$name = $userId = $email = $pass = $cPass = $phone = $bGroup = $gender = $dob = "";
		  $nameError ="";
		  $userIdError ="";
		  $emailErr ="";
		  $passErr="";
		  $passError ="";
		  $cPassError ="";
		  $validPass ="";
		  $bloodgroupError="";
		  $genderError ="";
		  $noError ="";
		  $numberrError ="";
		  $dobError="";
		  $fileError;
		  $profileError="";
		  $position="";
		  $position1="";
		  $leng ="";
		  $fileError="";
		  
		if (isset($_POST['submit']))
		{
		  
		  $name = $_POST["mname"];
		  $userId = $_POST["userId"];
		  $email = $_POST["memail"];
		  $pass = $_POST["mpassword"];
		  $cPass = $_POST["mcpassword"];
		  $phone = $_POST["mphone"];
		  //$bGroup = $_POST["bloodgroup"];
		  //$gender = $_POST["gender"];
		  $dob = $_POST["date"];
		  
		if (empty($name) || !preg_match("/^[a-zA-Z-' ]*$/",$name))
		{
			$nameError =  "Please enter valid name"; 
			
		}
		else{
			$name;
		}
		
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
        $emailErr = "Invalid email format"; 
		}
		$userCheck="";
        
		
		//if(isset($userId) && !preg_match("/[10-20]-[10000-99999]/",$userId))
	//		{ 
				// $userIdError = "Invalid user Id you must use XX-XXXX format";
				 
			//}
		if(empty($userId))
		{
			$userIdError ="empty user Id field";
		}
		if(!empty($userId)){
		$pos = strpos($userId,"-");
		$leng =strlen($userId);
		
		
		   if($pos== 2  && $leng == 8 && !preg_match("/^[a-zA-Z-' ]*$/",$userId))
		   {
			   $userId;
		   }
		   else{
			   $userIdError = "You should use this format in number xx-xxxxx";
		   }
		
		
		}
		
		/*
       if(!empty($pass)){
        
        if (strlen($pass) != '8' || strlen($pass)< '8' ){
            $passError = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$pass)) {
            $passError = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$pass)) {
             $passError = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$pass)) {
            $passError = "Your Password Must Contain At Least 1 Lowercase Letter!";
        }
		else {
             $passError = "";
        }
       }
	   */
	   
	     if(!empty($pass)){
        
         $length = strlen($pass);
		 echo $length;
		 if($length!="8" && $length<"8")
			 
			 {
				 $passError ="You should atleast 8 characters";
			 }
	   }
		
		if (empty($pass))
		{
			$passErr = "Set the Password";
		}
		
		if (empty($cPass))
		{
			$cPassError = "Set the Confirm Password";
		}
		
		if(isset ($pass) && isset($cPass) && $cPass != $pass)
		{
	
			 $validPass = "Password doesn't Match";
			
		}
		
		if (empty($_POST["gender"]))
		{
			$genderError = "Seclect the Gender";
		}
		if (empty($_REQUEST["bloodgroup"]))
		{
			$bloodgroupError = "Choose blood Group";
		}
		if(isset($phone))
			{
				 // Allow +, - and . in phone number
				 $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
				 // Remove "-" from number
				 $phone_to_check = str_replace("-", "", $filtered_phone_number);
				 // Check the lenght of number
				 // This can be customized if you want phone number from a specific country
				 if (strlen($phone_to_check) == 11 || strlen($phone_to_check) == 14) {
					$phone;
					
				 }
				  else {
				  $noError = "you have to put valid phone Number";
				 }
			}
		
		if (empty($phone))
		{
		$noError = "Mobile Number is required";
		}
		 else if (!is_numeric($phone))
		{
			$number = "";
			$numberrError = "Please Enter Valid Number";
		}
		
		if (empty($dob))
		{
			$dobError = "Seclect the Date of Birth";
		}
		
	

		
		}
		
		
		?>