

<?php

  if (isset($_POST['submit'])) {

    require_once('PHPMailer/PHPMailerAutoload.php');

//$destination_email='razi@whytecreations.in';//developer

  $destination_email='info@slf-qa.com';//PM

 //$destination_email='Info.tech@floragroup.net';//Client



 $name = $_POST['name'];

 $email = $_POST['email'];

 $phone = $_POST['phone'];

 $description = $_POST['message'];



 $subject = "Contact enquiry from $name";



 $message = "<div>

	<table border='1px solid black' class='table table-striped table-bordered'>

		<thead>

		<tr><th colspan='2' class='text-center text-info text-uppercase'><img src='http://whytecompany.com/alsulaitilawfirm/images/logo.png'><h3>$subject</h3></th></tr>

		</thead>

		<tbody>

			<tr><td>Name</td><td>$name</td></tr>

			<tr><td>Email</td><td>$email</td></tr>

			<tr><td>Phone</td><td>$phone</td></tr>

			<tr><td>Message</td><td>$description</td></tr>

		</tbody>

	</table>

</div>";

 



 $message = '<html><body>';

 $message .= '<p style="font-size:16px;">Name: '.$name.'</p>';

 $message .= '<p style="font-size:14px;">Email : '.$email.'</p>';

 $message .= '<p style="font-size:14px;">Phone : '.$phone.'</p>';

 $message .= '<p style="font-size:14px;">Message : '.$description.'</p>';

 $message .= '</body></html>';

 $mailer = new PHPMailer();

//$mailer->isSMTP();

 $mailer->Host = 'sg2plcpnl0129.prod.sin2.secureserver.net';

 $mailer->Port = 465;

 $mailer->SMTPAuth = false;

 $mailer->SMTPSecure = true;

 $mailer->From      = $email;

 $mailer->FromName  = $name;

 $mailer->Subject   = $subject;

 $mailer->Body      = $message;

 $mailer->IsHTML(true);

 $mailer->AddAddress( $destination_email );



  $previous_page = isset($_POST['location'])?$_POST['location']:"contact-us.php";

//send the message, check for errors

if (!$mailer->send()) {

  header("Location: $previous_page?mail=failed");

  die();



//   echo "<script>

//   document.addEventListener('DOMContentLoaded', function(event) {

//     var mailFailed = document.getElementById('mail-failed');

// //show

//     mailFailed.style.display = 'block';

//   });



// </script>";

} else {

    header("Location: $previous_page?mail=success");

  die();

//   echo "<script>

//   document.addEventListener('DOMContentLoaded', function(event) {

//     var mailSuccess = document.getElementById('mail-success');

// //show success message

//     mailSuccess.style.display = 'block';

//   });

// </script>";

}

unset($_POST['submit']);

}

?>