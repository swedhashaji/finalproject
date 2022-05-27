<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Parish</title>
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
.containers {
  padding: 2px 16px;
}
    </style>
    <style>
        .container{
            padding: 20px;
        }
        select{
            font-size:16px;
            padding:4px 8px;
            color: #666;
            margin-right:20px;
        }
        select:last-child{
            margin-right: 0;
        }
    </style>
<!--jQuery library-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#forane').on('change',function(){
            var foraneID=$(this).val();
            if(foraneID){
                $.ajax({
                    type:'POST',
                    url:'ajaxData.php',
                    data:'forane_id=' +foraneID,
                    success:function(html){
                        $('#parish').html(html);
                    }
                });
            }else{
                $('#parish').html('<option value="">Select forane first</option');
            }
    });
    });
</script>
</head>
<body>

   <div class="container">
      <button class="btn btn-primary" onclick="window.location.href='http://localhost/smym/indexmain.php'">Back</button>
       <form method="get">
       <?php
       include_once 'dbcon.php';
       $query="SELECT * FROM forane WHERE status=1 ORDER BY name ASC";
       $result = $con->query($query);
       ?>
       <br><br>
       <select id="forane" name="forane">
           <option value ="">Select Forane</option>
           <?php
           if($result->num_rows>0){
               while($row = $result->fetch_assoc()){
                   echo '<option value="'.$row['forane_id'].'">'.$row['name'].'</option>';
               }
           }else{
               echo '<option value="">Country not available<option>';
           }
           ?>
       </select>

       <select id="parish" name="parish">
       <option value ="">Select Forane First</option>
       </select>
       
       </div> 
       
   <input class="btn btn-primary" type="submit" name="submit" value="Submit">
   </form>
</body>
</html>
<script>
  const change_url = () => {
    var id = $('#record option:selected').val();
    var submit = $("#submit_url");
    if(id != '')
      submit.attr('href',"parish_1.php?id=" + id);
    else
      submit.attr('href',"#");
  };
</script>
<?php
       include_once 'dbcon.php';
       if(isset($_GET['submit']))
       {
           $forane=$_GET['forane'];
           $parish=$_GET['parish'];
           $query="SELECT * FROM tbl_parish WHERE parish_id='$parish' and forane_id='$forane'";
           $result = $con->query($query);
    
       
           if($result->num_rows>0){
               while($row = $result->fetch_assoc()){?>
<div class="containers mt-4">
    <h2><?php echo $row['parish_name'];?></h2>
    
    <h3>Parish Executives</h3>
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
               <?php
                  

               }
           }else{
               echo '<option value="">Forane not selected<option>';
           }
        }
           ?>