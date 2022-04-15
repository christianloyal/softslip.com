<?php
		use PHPMailer\PHPMailer\PHPMailer;
		
		require_once 'phpmailer/Exception.php';
		require_once 'phpmailer/PHPMailer.php';
		require_once 'phpmailer/SMTP.php';

		$mail = new PHPMailer(true);

		$alert = '';
      
	   if(isset($_POST['Submit']))
	   {
		   $name = $_POST['Name'];
		   $email = $_POST['Email'];
		   $subject = $_POST['Subject']; 
		   $message = $_POST['Message'];

           try
			{
			   $mail->isSMTP();
			  // $mail->SMTPDebug = 2;
					$mail->Host = 'smtp.gmail.com';
					$mail->SMTPAuth = true;
					$mail->Username = 'christianloyal2@gmail.com';
					$mail->Password = 'nnennaya';
					$mail->SMTPSecure = 'ssl';
					// $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
					$mail->Port = '465';

					$mail->setFrom('christianloyal2@gmail.com');
					$mail->addAddress('christianloyal2@gmail.com');

					$mail->isHTML = (true);
					$mail->Subject = 'New Message Received From Contact Page';
					//$mail->Body = "<h3>Name: $name <br>Email: $email <br>Subject: $subject <br>Message: $message </h3>";
					$mail->Body = 
"Name: $name 
Email: $email 
Subject: $subject
Message: $message";

				   $mail->send();
							$alert = '<div class="alert-success text-center"><span>Message Sent! Thank you for Contacting Us</span></div>';
					
			}
			catch (Exception $e)
			{
						$alert = '<div class="alert-danger text-center"><span> '.$e->getMessage().'</span></div>';
			
			}

        }
     

   ?>