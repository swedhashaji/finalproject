<?php
$con = new mysqli("localhost", "root", "", "smymdb");
$id=$_GET['id'];
session_start();
$mobile= $_SESSION['mobile'];
$uid=$_SESSION['userid'];
if(isset($_POST['ok']))
{
	  $name=$_POST['name'];
    $hospital=$_POST['hospital'];
    $location=$_POST['location'];
    $date=$_POST['date'];
    $status='requested';
    $con = new mysqli("localhost", "root", "", "smymdb");
    $con->query("INSERT INTO `request`(`Patient_name`, `Hospital_name`, `Location`, `Date`, `user_id`, `requestto_id`, `Status`) VALUES ('$name','$hospital','$location','$date','$uid','$id','$status')");
    echo '<script>alert("Requested");</script>';
}



?>
<html>  

	<body>
		<head>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		</head>
		<button class="btn btn-primary" onclick="window.location.href='../indexmain.php'" type="submit">Back</button>
  <div class="container mt-5">
  
    <form action="" method="POST" enctype="multipart/form-data">
		<p>Check your profile and update if needed</p>
        <label for="css">Patient Name</label>
      <input type="text" class="form-control" placeholder=" Patient Name" name="name" id="name" required><br>
      <label for="css">Hospital Name</label>
	  <input type="text" class="form-control" placeholder="Hospital Name" name="hospital" id="hospital"  required><br>
      <label for="css">Location</label>
      <input type="text" class="form-control" placeholder="Location of Hospital" name="location" id="location" required><br>
      <label for="css">Date</label>
      <input type="date" class="form-control" placeholder="Date " name="date" id="date"  required><br>
      <input type="submit" class="btn btn-success btn-lg btn-block" class="button" name="ok" id="ok" value="request">
  
    </form>
  
  </div>
    </body>
</html>
