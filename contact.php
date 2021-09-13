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
			$message = "<!doctype html>
<html>
			
			<style>
				body {
				background-color: #b6b6b6;
			}
	
					.jumbotron {
			  padding: 2rem 1rem;
			  margin: 2rem;
			  background-color: #300A14;
			  border-radius: 0.3rem;
			}
				
			
				.innerJumbotron {
			  padding: 2rem 1rem;
			  margin-bottom: 2rem;
					margin-left: 5rem;
					margin-right:5rem;
			  background-color: #fff;
			  border-radius: 0.3rem;
				color: #000000;
					font-size: 1.25rem;
			}
				
				p{
			color: #fff;
			}
			h1{
			color:#ffcc00;
			}
			h2{
			color:#fff;
			}
				h3{
					color:#ffcc00;
				}

				
				@media (max-width: 800px) {
					.innerJumbotron {
			  padding: 2rem 1rem;
			  margin-bottom: 2rem;
					margin-left: 2rem;
					margin-right:2rem;
			  background-color: #fff;
			  border-radius: 0.3rem;
				color: #000000;
					font-size: 1rem;
			}
				}
	</style>
			
			<div class=\"jumbotron\">
			<center>
			<h1><u>New Consultation</u></h1><br>
			<h2>You have received a message from <u>$FirstName $LastName</u>:</h2>
			<br><br>
				
				<div class=\"innerJumbotron\">
					$Message
				</div><br>
				<h3>Contact $FirstName:</h3>
				<p>
				<b>Phone:</b> $Phone<br>
				<b>Email:</b> $Email<br></p>
				</center>
				</div>
				</html>"
;
         
			/* $header = "From:$Email \r\n";
			$header .= " \r\n";
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Content-type: text/html\r\n"; */
	
			$headers .= "Reply-To: The Sender <GriffinPI@no-rerply.com>\r\n"; 
  			$headers .= "Return-Path: The Sender <GriffinPI@no-rerply.com>\r\n"; 
  			$headers .= "From: The Sender <GriffinPI@no-rerply.com>\r\n";
  			$headers .= "MIME-Version: 1.0\r\n";
  			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  			$headers .= "X-Priority: 3\r\n";
  			$headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
        
			mail ($to,$subject,$message,$headers);
			header("Location: https://griffinprivateinvestigations.com/contact.html");
			

}



         

?>