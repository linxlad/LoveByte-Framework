<?php 

class mailer
{
	/**
     * Sends validatation HTML email using the SMTP class.
 	 *
 	 * @param  string  $username
	 * @param  string  $newKey
	 * @param  string  $email
 	 * @return string 
 	 */	
	public static function sendValidEmail($username, $newKey, $email)
	{
		$mail = new SMTP();
		
			try {
					// Construct the message
					
					$mail = new SMTP();
					$mail->to($email);
					$mail->from('hello@lovebyte.com', 'The LoveByte Team');
					$mail->subject('Invite Request Received');
					$mail->body("<h4>Just one more step to reserve your invite</h4>

					<h4>Please click the link below to confirm your email address.</h4>
					
					http://lovebyte.co.uk/public/index.php/confirm?".$newKey."<br /><br />");
					
					// Send the email
					$result = $mail->send();
					
					return $result;				
    					
						
				} catch (Exception $e) {
    					echo 'Message was not sent.';
    					echo 'Mailer error: ' . $e->getMessage();
				}	
	}

	/**
     * Sends confirmation HTML email using the SMTP class.
 	 *
 	 * @param  string  $username
	 * @param  string  $newKey
	 * @param  string  $email
 	 * @return string 
 	 */	
	public static function sendConfirmEmail($username, $newKey, $email)
	{
		$mail = new SMTP();
		
			try {
					// Construct the message
					
					$mail = new SMTP();
					$mail->to($email);
					$mail->from('hello@lovebyte.com', 'The LoveByte Team');
					$mail->subject('Invite Request Received');
					$mail->body("<h4>Confirmation of your invite request</h4>

					<h4>The username <font color='#369'>".$username."</font> has been reserved</h4><br />
	
					Your LoveByte invite request has been received and we will get back to shortly.<br />
					Thank you <b>".$username."</b> for your interest in the LoveByte community.<br /><br />
	
					<b>Not long to wait:</b> It won't be long until LoveByte is up and running and waiting for social<br />
					people to make it a great developers community. In the mean time we have reserved<br />
					your username so it will be unique to your account.<br /><br />

					<b>The inspiration:</b> I was inspired to make LoveByte as I felt there was not a social<br />
					network/code/progress sharing website devoted purely to developers. There are lots<br />
					of design orientated website some concentrating completely on design and some who try to<br />
					encorperate a code angle but not very successfully. And so LoveByte was born.<br /><br />

					View the HTML version of this email? Click the link below<br />
					http://lovebyte.co.uk/public/index.php/email?".$newKey."");
					
					// Send the email
					$result = $mail->send();
					
					return $result;				
    					
						
				} catch (Exception $e) {
    					echo 'Message was not sent.';
    					echo 'Mailer error: ' . $e->getMessage();
				}	
	}	

}