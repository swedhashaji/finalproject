<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "smymdb");


if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["ok"]))
{
$usermobile = $_POST['usermobile'];
$fullname = $_POST['fullname'];
$password = $_POST['pass'];
$cpass = $_POST['cpassword'];
$forane = $_POST['forane'];
$parish=$_POST['parish'];


$str = "SELECT usermobile from tbl_admin WHERE usermobile='$usermobile'";
$result = mysqli_query($conn, $str);



if (mysqli_num_rows($result) > 0) {
  
   echo "<center><h3><script>alert('Sorry.. This phone number is already registered !!');</script></h3></center>";
   header("refresh:0;url=registration.php");
} 
else {
$sql = "INSERT INTO `tbl_admin`(`admin_name`, `admin_mobile`, `admin_password`, `admin_status`, `admin_type`, `admin_forane`, `admin_parish`) VALUES ('$fullname','$usermobile','$password','2','3','$forane','$parish')";
if($password == $cpass){
if (mysqli_query($conn, $sql)) {
  header("Location: userlogin.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else{
  echo '<script language="javascript">';
echo 'alert("Password does not match")';
echo '</script>';
}
}
}

mysqli_close($conn);

?><!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="style.css">
    <style>
.button {
  background-color: #e7e7e7; 
  color: black; /* Green */
  border: none;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}


      </style>
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
    
  const change_url = () => {
    var id = $('#record option:selected').val();
    var submit = $("#submit_url");
    if(id != '')
      submit.attr('href',"parish_1.php?id=" + id);
    else
      submit.attr('href',"#");
  };

</script>
  </head>
  <body>
  <div class="body"></div>
  <div class="grad"></div>
  <div class="header">
    <div><span>Register</span></div>
  </div>
  <br>
  <div class="login" style="margin-top:-100px;">
    <form action="#" method="POST" name="formValidation" id="formValidation"  enctype="multipart/form-data">
      <input type="text" style="color: black;" placeholder="Name" name="fullname" id="fullname" pattern="[A-Za-z]{1,32}" required><br><br>
      <input type="text" style="color: black;" placeholder="Mobile Number" name="usermobile" id="usermobile" pattern="^\d{10}$" required><br>
      <input type="password" style="color: black;"  placeholder="password" name="pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br>
      <input type="password" style="color: black;" placeholder="confrim password" name="cpassword" id="cpassword" pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=\S+$).{6,}$" required>
<?php
   
   include_once 'dbcon.php';
   $query="SELECT * FROM forane WHERE status=1 ORDER BY name ASC";
   $result = $con->query($query);
   ?>
   <br><br>
   <select id="forane" name="forane" style="color:black;">
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
   <br><br>

   <select id="parish" name="parish"style="color:black;">
   <option value ="">Select Forane First</option>
   </select>
<br><br>
      <input type="submit" class="button" name="ok" value="Register">
      Already a Member?<a style="color:white;" href="./admin/auth/indexlogin.php"> Login Here. </a></h5>
      </form>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
  <script type="text/javascript" src="custom.js"></script>
          </body>
</html>