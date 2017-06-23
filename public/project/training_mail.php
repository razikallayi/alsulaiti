<?php

  if (isset($_POST['submit'])) {

    require_once('PHPMailer/PHPMailerAutoload.php');

//$destination_email='razi@whytecreations.in';//developer

  $destination_email='info@slf-qa.com';//PM

 //$destination_email='Info.tech@floragroup.net';//Client



 $name = $_POST['first_name']." ". $_POST['last_name'];

 $subject = $_POST['subject'];

 $qatar_id = $_POST['qatar_id'];

 $dob = $_POST['dob'];

 $phone = $_POST['phone'];

 $email = $_POST['email'];

 $high_school_attended = $_POST['high_school_attended'];

 $high_school_results = $_POST['high_school_results'];

 $university_name = $_POST['university_name'];

 $year_of_study = $_POST['year_of_study'];

 $year_of_graduation = $_POST['year_of_graduation'];

 $results_achieved = $_POST['results_achieved'];

 $predicted_graduation_results = $_POST['predicted_graduation_results'];

 

 $file = $_FILES['file']['name'];





$message = "

<div>

	<table border='1px solid black' class='table table-striped table-bordered'>

		<thead>

		<tr><th colspan='2' class='text-center text-info text-uppercase'><img src='http://whytecompany.com/alsulaitilawfirm/images/logo.png'><h3>$subject</h3></th></tr>

		</thead>

		<tbody>

			<tr><td>Name</td><td>$name</td></tr>

			<tr><td>Qatar ID </td><td>$qatar_id</td></tr>

			<tr><td>Date of birth </td><td>$dob</td></tr>

			<tr><td>Phone</td><td>$phone</td></tr>

			<tr><td>Email</td><td>$email</td></tr>

			<tr><td>high_school_attended</td><td>$high_school_attended</td></tr>

			<tr><td>high_school_results</td><td>$high_school_results</td></tr>

			<tr><td>university_name</td><td>$university_name</td></tr>

			<tr><td>year_of_study</td><td>$year_of_study</td></tr>

			<tr><td>year_of_graduation</td><td>$year_of_graduation</td></tr>

			<tr><td>results_achieved</td><td>$results_achieved</td></tr>

			<tr><td>predicted_graduation_results</td><td>$predicted_graduation_results</td></tr>

		</tbody>

	</table>

</div>";



 $mailer = new PHPMailer();

//$mailer->isSMTP();

 $mailer->Host = 'sg2plcpnl0129.prod.sin2.secureserver.net';

 $mailer->Port = 465;

 $mailer->SMTPAuth = false;

 $mailer->SMTPSecure = true;

 $mailer->From      = $email;

 $mailer->FromName  = $name;

 $mailer->Subject   = "$subject from $name";

 $mailer->Body      = $message;

 $mailer->IsHTML(true);

 $mailer->AddAddress( $destination_email );



  $tab= isset($_POST['location'])?$_POST['location']:"";



 	if(is_uploaded_file($_FILES['file']['tmp_name'])){

		$tempimg = addslashes(time() . $_FILES["file"]["name"]);

		$_FILES["file"]["name"] = $tempimg;

		if (!file_exists('uploads/training')) {

			mkdir('uploads/training', 0777, true);

		}

		move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/training/" . $_FILES["file"]["name"]);

		$attachment=$_FILES["file"]["name"];

	}	



	$file_to_attach = "uploads/training/$attachment";

	$mailer->AddAttachment( $file_to_attach , $attachment );



  $previous_page = "training.php";



//send the message, check for errors

if (!$mailer->send()) {

  header("Location: $previous_page?mail=failed$tab");

  die();



//   echo "<script>

//   document.addEventListener('DOMContentLoaded', function(event) {

//     var mailFailed = document.getElementById('mail-failed');

// //show

//     mailFailed.style.display = 'block';

//   });



// </script>";

} else {

    header("Location: $previous_page?mail=success$tab");

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