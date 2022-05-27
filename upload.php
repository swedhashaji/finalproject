<?php
$con = new mysqli("localhost", "root", "", "smymdb");
if(isset($_POST['ok']))
{
    $name=$_POST["fullname"];
	$church=$_POST["church"];
	$place=$_POST["place"];
    $fileName=$_FILES["file"]["name"];
    $targetDir="images/id/";
    $targetFilePath = $targetDir . $fileName;
    move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);
   $con = new mysqli("localhost", "root", "", "smymdb");
   $con->query("INSERT INTO idcard(`name`, `place`, `church`, `image`) VALUES ('$name','$place', '$church','$targetFilePath')");
   $lastid=mysqli_insert_id($con);
	header("location:makepdf2.php?id=$lastid");

}

?>
<html>  

	<body>
		<head>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		</head>
		<button class="btn btn-primary" onclick="window.location.href='indexmain.php'" type="submit">Back</button>
  <div class="container mt-5">
  
    <form action="upload.php" method="POST" enctype="multipart/form-data">
		<p>Fill out the form to download ID card</p>
      <input type="text" class="form-control" placeholder="Name" name="fullname" id="fullname" pattern="[A-Za-z]{1,32}" required><br>
	  <input type="text" class="form-control" placeholder="Church" name="church" id="church" pattern="[A-Za-z]{1,32}" required><br>
      <input type="text" class="form-control" placeholder="Place" name="place" id="place" pattern="[A-Za-z]{1,32}" required><br><br>
	  <label for="myfile">Select a file:</label><input type="file" id="file" name="file"><br><br>
      <input type="submit" class="btn btn-success btn-lg btn-block" class="button" name="ok" id="ok" value="Generate ID">
    </form>
  
  </div>
    </body>
</html>