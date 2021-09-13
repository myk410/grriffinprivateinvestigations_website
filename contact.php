<?php


if(isset($_POST['submit'])){
			
			$FirstName = !empty($_POST['FirstName'])?$_POST['FirstName']:'';
			$LastName = !empty($_POST['LastName'])?$_POST['LastName']:'';
			$Phone = !empty($_POST['Phone'])?$_POST['Phone']:'';
			$Email = !empty($_POST['Email'])?$_POST['Email']:'';
			$Message1 = !empty($_POST['Message'])?$_POST['Message']:'';
			$Message = wordwrap($Message1,70);
	
            
			$to = "test-hqs765qme@srv1.mail-tester.com";
			$subject = "GriffinPI Consultation";
			$message = "<html>
			<p><b>First Name:</b> $FirstName<br>
				<b>Last Name:</b> $LastName<br>
				<b>Phone:</b> $Phone<br>
				<b>Email:</b> $Email<br>
				<b>Message:</b> $Message<br></p>
				</html>";
         
			/* $header = "From:$Email \r\n";
			$header .= " \r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Content-type: text/html\r\n"; */
	
			$headers .= "Reply-To: The Sender <joq901l9xcgm@p3plzcpnl485516.prod.phx3.secureserver.net>\r\n"; 
  			$headers .= "Return-Path: The Sender <joq901l9xcgm@p3plzcpnl485516.prod.phx3.secureserver.net>\r\n"; 
  			$headers .= "From: The Sender <joq901l9xcgm@p3plzcpnl485516.prod.phx3.secureserver.net>\r\n";
  			$headers .= "MIME-Version: 1.0\r\n";
  			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  			$headers .= "X-Priority: 3\r\n";
  			$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
        
			mail ($to,$subject,$message,$headers);
			header("Location: https://griffinprivateinvestigations.com/contact.html");
			

}



         

?>