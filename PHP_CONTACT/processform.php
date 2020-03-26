
<?php print_r($_POST) ;
	if(isset($_POST['submit'])){
			$first_name= trim($_POST['first_name']);
			$last_name= trim($_POST['last_name']);
			$email= trim($_POST['email']);
			$department= trim($_POST['department']);
			$gender= trim($_POST['gender']);
			$message= ($_POST['message']);
			$message = $message;
			$content = "This is an enquiry email from ".$first_name . " ".$last_name."\r\n\r\n".
			
			$message
			
			. "\r\n\r\n Email Address : ".$email
			
			. "\r\n\r\n Department : ".$department
			
			. "\r\n\r\n Gender : ".$gender;
			
			// echo $content; die();
			$foldername = $first_name . " ".$last_name;
			if(!is_dir($foldername)) { 
				mkdir ($foldername, 0777); 
				chmod($foldername, 0777);
			}
					
			$fp = fopen($foldername.'/'.$first_name.'.txt', 'w');
			if(fwrite($fp, $content)) {
				echo "file created successfully";
			} else {
				echo "Error creating file";
			}
			
		}
		?>