<?php


if(isset($_POST['submit'])){
			
			$FirstName = !empty($_POST['FirstName'])?$_POST['FirstName']:'';
			$LastName = !empty($_POST['LastName'])?$_POST['LastName']:'';
			$Phone = !empty($_POST['Phone'])?$_POST['Phone']:'';
			$Email = !empty($_POST['Email'])?$_POST['Email']:'';
			$Message1 = !empty($_POST['Message'])?$_POST['Message']:'';
			$Message = wordwrap($Message1,70);
	
            
			$to = "myk410@gmail.com";
			$subject = "GriffinPI Consultation";
			$message = "<p><b>First Name:</b> $FirstName<br>
				<b>Last Name:</b> $LastName<br>
				<b>Phone:</b> $Phone<br>
				<b>Email:</b> $Email<br>
				<b>Message:</b> $Message<br></p>";
         
			$header = "From:$Email \r\n";
			$header .= " \r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Content-type: text/html\r\n";
        
			mail ($to,$subject,$message,$header);
			header("Location: https://griffinprivateinvestigations.com/contact.html");
			

}



         

?>