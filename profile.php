<?php
$con = new mysqli("localhost", "root", "", "smymdb");
session_start();
$mobile= $_SESSION['mobile'];
if(isset($_POST['ok']))
{
	$password=$_POST["password"];
   $con = new mysqli("localhost", "root", "", "smymdb");
   $con->query("Update registration set password='$password' where usermobile='$mobile'");

}

$sql = "SELECT * FROM `registration` WHERE usermobile= '$mobile'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>
<html>  

	<body>
		<head>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		</head>
		<button class="btn btn-primary" onclick="window.location.href='indexmain.php'" type="submit">Back</button>
  <div class="container mt-5">
  
    <form action="profile.php" method="POST" enctype="multipart/form-data">
		<p>Check your profile and update if needed</p>
        <label for="css">Full Name</label>
      <input type="text" class="form-control" placeholder="Name" name="fullname" id="fullname" pattern="[A-Za-z]{1,32}" value="<?php echo $row['fullname'];?>"readonly><br>
      <label for="css">Mobile Number</label>
	  <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" id="mobile" pattern="{1,32}"value="<?php echo $row['usermobile'];?>" readonly><br>
      <label for="css">Forane</label>
      <input type="text" class="form-control" placeholder="Forane" name="forane" id="forane" pattern="[A-Za-z]{1,32}"value="<?php echo $row['forane'];?>" readonly><br>
      <label for="css">Blood Group</label>
      <input type="text" class="form-control" placeholder="Blood Group" name="blood" id="blood" pattern="[A-Za-z]{1,32}"value="<?php echo $row['bgroup'];?>" readonly><br>
      <label for="css">Password</label>
      <input type="text" class="form-control" placeholder="Password" name="password" id="password"value="<?php echo $row['password'];?>" required><br>  
      <input type="submit" class="btn btn-success btn-lg btn-block" class="button" name="ok" id="ok" value="update">
      <?php
  }
}
  ?>
    </form>
  
  </div>
    </body>
</html>
