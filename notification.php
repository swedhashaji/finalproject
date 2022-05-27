<?php
$con = new mysqli("localhost", "root", "", "smymdb");
session_start();
$id=$_SESSION['userid'];
// if(isset($_POST['accept']))
// {
// 	$status1='accept';
//    $con = new mysqli("localhost", "root", "", "smymdb");
//    $con->query("Update request set status='$status1' where requestto_id='$id'");

// }
// if(isset($_POST['reject']))
// {
// 	$status2='reject';
//    $con = new mysqli("localhost", "root", "", "smymdb");
//    $con->query("Update request set status='$status2' where requestto_id='$id'");

// }
$status3="requested";
$sql = "SELECT * from request where status='requested' and requestto_id='$id'";
$result = $con->query($sql);
$cnt=1;
?>
<html>  
<style>
.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
	<body>
		<head>
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		</head>
		<button class="btn btn-primary" onclick="window.location.href='indexmain.php'" type="submit">Back</button>
  <div class="container mt-5">
  
    <form action="notification.php" method="POST" enctype="multipart/form-data">
		<p>Check Notifications</p>
        <?php
        if($result->num_rows > 0)
        {
        while($row = $result->fetch_assoc())
       { 
  ?>
        <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;

</span> 

  <strong>Blood Required</strong><br>
  Patient Name:<?php echo $row['Patient_name'];?><br>
  Hospital Name:<?php echo $row['Hospital_name'];?><br>
  Location:<?php echo  $row['Location'];?><br>
  Date:<?php echo $row['Date'];?><br>
  <button class="btn btn-primary" ><a href="accept.php?id=<?php echo $row["request_id"]; ?>">Accept</a></button>
  <button class="btn btn-primary" ><a href="reject.php?id=<?php echo $row["request_id"]; ?>">Reject</a></button>
</div>
<?php
}
}?>
 
    </form>
  
  </div>
    </body>
</html>
