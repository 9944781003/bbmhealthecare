<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Touchsky Bootstrap HTML5 Template</title>
  <meta name="description" content="Free Bootstrap Theme bytouchsky.in">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<?php 
if(isset($_POST["name"],$_POST["email"],$_POST["phone"])){
		$ToEmail = 'karthik@touchskytechnologies.com'; 
		$EmailSubject = 'Brochure Download Details'; 
		$mailheader = "From: arul@touchskytechnologies.com \r\n"; 
		$mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
		$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$MESSAGE_BODY = '<html><body>';
		$MESSAGE_BODY .= '<p style="font-family:verdana;font-size:13px;"> Brochure Download Details</p>';
		$MESSAGE_BODY .= '<table border="1" style="border-color: #d8d8d8;font-family:verdana; font-size:12px;" cellpadding="10" cellspacing="0">';
		$MESSAGE_BODY .= "<tr style='background: #afcbe7;'><td><strong>Name</strong> </td><td>" . strip_tags($_POST['name']) . "</td></tr>";
		$MESSAGE_BODY .= "<tr><td><strong>Email Address</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
		$MESSAGE_BODY .= "<tr style='background: #afcbe7;'><td><strong>Message</strong> </td><td>" . strip_tags($_POST['phone']) . "</td></tr>";
		$MESSAGE_BODY .= "</table>";
		$MESSAGE_BODY .= "</body></html>";
		 if($robotest)
			$error = "Your email sending failed.";
			else 
			{
			mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader); 
			echo "
			<html>
			<body valign='center' align='center'>
			<center>
			<p style='font-family:verdana;font-size:12px;'>
			Thank you for downloading medsky brochure. If you have any query, call 74188 84419
			</p> 
			  <p style='font-family:verdana;font-size:12px;'>
			  Brochure file will be downloaded automatically. If it does not work work, You can click downlaod button to download manually.
			  </p>
			<p style='font-family:verdana;font-size:12px;'>
			<a href='Location:http://bbmhealthcare.in/downloads/BBM_Health_Broucher.pdf'> Download</a>
			</p>
			</center>
			</body>
			</html>";	
			}
			 header("Location:http://bbmhealthcare.in/downloads/BBM_Health_Broucher.pdf");
} else{



echo "
<div id='' class='container'>
<div id='' class='row'>
			
	<div id='' class='col-md-8 col-md-offset-2 col-sm-12'>
		<div class='panel panel-primary'>
	<div class='panel-heading'>
			  MedSky
	</div>
	  <div class='panel-body'>
			 <form class='form-horizontal' name='myform' action='". $_SERVER["PHP_SELF"]."' method='post' id='myform'>
							<div class='form-group'>
								<label for='inputPassword3' class='col-sm-2 control-label'>Name</label>
								<div class='col-sm-10'>
								  <input type='text' class='form-control' id='inputPassword3' name ='name' placeholder='Enter Your Name' required>
								</div>
							  </div>
							  <div class='form-group'>
								  <label for='inputPassword3' class='col-sm-2 control-label'>Phone</label>
								  <div class='col-sm-10'>
									<input type='number' min='5999999999' max='9999999999'class='form-control' id='inputPassword3' name='phone' placeholder='Enter Your Phone Number' required>
								  </div>
							  </div>
							  <div class='form-group'>
							  <label for='inputEmail3' class='col-sm-2 control-label'>Email</label>
							  <div class='col-sm-10'>
								<input type='email' class='form-control' id='inputEmail3' name='email' placeholder='Email'>
							  </div>
							</div>
							<div class='modal-footer'>
							<button type='submit' for='submit-form'  form='myform' name ='download_brochure'class='btn btn-appoint'>Download Now</button>
							</div>
			</form>
	  </div>
	</div>
	</div>
</div>	
</div>

";

















}


?>
