<?php
// Initializing Error Variables To Null.
$nameError ="";
$emailError ="";
$websiteError ="";
// This code block will execute when form is submitted
if(isset($_POST['submit'])){
/*--------------------------------------------------------------
Fetch name value from URL and Sanitize it

/*------------------------------------------------------------------
Fetch email value from URL, Sanitize and Validate it
--------------------------------------------------------------------*/
if($_POST['email'] != ""){
//sanitizing email
$_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
//After sanitization Validation is performed
$_POST['email'] = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$emailError = $_POST['email']."is Sanitized an Valid Email.";
if($_POST['email'] == ""){
$emailError = "Please enter a valid email";
}
}
else {
$emailError = "Please enter your email";
}
/*---------------------------------------------------------------------------
Fetch website value from URL, Sanitize and Validate it
----------------------------------------------------------------------------*/
if($_POST['website'] != ""){
//sanitizing URL
$_POST['website'] = filter_var($_POST['website'], FILTER_SANITIZE_URL);
//After sanitization Validation is performed
$_POST['website'] = filter_var($_POST['website'], FILTER_VALIDATE_URL);
$websiteError = $_POST['website']."is Sanitized an Valid Website URL.";
if ($_POST['website'] == ""){
$websiteError = "Please enter a valid website start with http://";
}
}
else {
$websiteError = "Please enter your website URL.";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Form Sanitization and Validation Using PHP - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href="styless.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<div class="form_div">
<div class="title">
<h2>Form Sanitization and Validation Using PHP</h2>
</div>
<form action="sanitization.php" method="post">
<h2>Form</h2>
<p>* Required Fields</p>
Name: <span class="invalid">*</span>
<input class="input" name="name" type="text" value="">
<p><?php echo $nameError;?></p>
E-mail: <span class="invalid">*</span>
<input class="input" name="email" type="text" value="">
<p><?php echo $emailError;?></p>
Website: <span class="invalid">*</span>
<input class="input" name="website" type="text" value="">
<p><?php echo $websiteError;?></p><input class="submit" name="submit" type="submit" value="Submit">
</form>
</div>
</div> <!-- HTML Ends Here -->
</body>
</html>