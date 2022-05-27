<?php
$con = new mysqli("localhost", "root", "", "smymdb");
session_start();
$id=$_SESSION['userid'];
$mobile= $_SESSION['mobile'];
$status3="requested";
$sql = "SELECT * FROM `tblblooddonars` inner join request on request.requestto_id = tblblooddonars.userid and user_id='$id'";
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
  
    <form action="profile.php" method="POST" enctype="multipart/form-data">
		<p>Check Notifications</p>
        <?php
        if($result->num_rows > 0)
{
        while($row = $result->fetch_assoc())
{ ?>
        <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;

</span> 

  <strong>Blood Request</strong><br>
   Name:<?php echo $row['FullName'];?><br>
   Contact:<?php echo $row['MobileNumber'];?><br>
   Status:<?php echo $row['Status'];?><br>  
</div>
<?php
}
}?>
 
    </form>
  
  </div>
    </body>
</html>
