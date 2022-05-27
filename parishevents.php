<?php
$con = new mysqli("localhost", "root", "", "smymdb");
session_start();
$id=$_SESSION['userid'];
$sql="SELECT * from registration where id='$id'";
$query_runs=mysqli_query($con,$sql);
$rowUser = mysqli_fetch_array($query_runs);
$name=$rowUser['parish'];
$sql = "SELECT * from events where parish='$name'";
$result = $con->query($sql);
$cnt=1;
?>
<html>  
<style>
.alert {
  padding: 20px;
  background-color: white;
  color: black;
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
  
    <form action="parishevents.php.php" method="POST" enctype="multipart/form-data">
		<p>Check Events</p>
        <?php
        if($result->num_rows > 0)
        {
        while($row = $result->fetch_assoc())
       { 
  ?>
        <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;

</span> 

  <strong>Parish Events</strong><br>
  Event Name:<?php echo $row['event_name'];?><br>
  Event Description:<?php echo $row['event_desc'];?><br>
  Date:<?php echo  $row['event_date'];?><br>
  Time:<?php echo $row['event_time'];?><br>
</div>
<?php
}
}?>
 
    </form>
  
  </div>
    </body>
</html>
