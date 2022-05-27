<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanjirappally Forane</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}
    </style>
</head>
<body>
<button class="btn btn-primary" onclick="window.location.href='forane.php'" type="submit">Back</button><br><br>
  <?php
  include 'dbcon.php';
  $id = $_GET['id'];
  $sql = "SELECT * FROM forane where forane_id='$id'";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {


?>

<div class="container mt-4">
    <h2><?php echo $row['name'];?></h2>
    
    <h3>Forane Executives</h3>
    <div class="card" style="width: 18rem;">
  <img src="assets/img/avatar1.png" alt="Avatar" style="width: 100%">
  <div class="container">
    <h5><b>Name</b></h5>
    <p style="color:grey"><?php echo $row['exc1_name'];?></p>
    <h5><b>Location</b></h5>
    <p style="color:grey"><?php echo $row['exc1_location'];?></p>
    <h5><b>Position</b></h5>
    <p style="color:grey"><?php echo $row['exc1_position'];?></p>
    <h5><b>Contact Number</b></h5>
    <p style="color:blue"><?php echo $row['exc1_contact'];?></p>
  </div>
</div><br>
<div class="card" style="width: 18rem;">
  <img src="assets/img/avatar2.png" alt="Avatar" style="width: 100%">
  <div class="container">
    <h5><b>Name</b></h5>
    <p style="color:grey"><?php echo $row['exc2_name'];?></p>
    <h5><b>Location</b></h5>
    <p style="color:grey"><?php echo $row['exc2_location'];?></p>
    <h5><b>Position</b></h5>
    <p style="color:grey"><?php echo $row['exc2_position'];?></p>
    <h5><b>Contact Number</b></h5>
    <p style="color:blue"><?php echo $row['exc2_contant'];?></p>
  </div>
</div>
<br>
<div class="card" style="width: 18rem;">
  <img src="assets/img/avatar1.png" alt="Avatar" style="width: 100%">
  <div class="container">
    <h5><b>Name</b></h5>
    <p style="color:grey"><?php echo $row['exc3_name'];?></p>
    <h5><b>Location</b></h5>
    <p style="color:grey"><?php echo $row['exc3_location'];?></p>
    <h5><b>Position</b></h5>
    <p style="color:grey"><?php echo $row['exc3_position'];?></p>
    <h5><b>Contact Number</b></h5>
    <p style="color:blue"><?php echo $row['exc3_contact'];?></p>
  </div>
</div><br>

</div>
<?php }}?>
</body>
</html>