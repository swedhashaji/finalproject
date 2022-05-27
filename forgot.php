<?php
    include "dbcon.php";
    if(isset($_POST['sub'])){
      $usermobile=$_POST['usermobile'];
      $password=$_POST['pass'];
      $cpass = $_POST['cpass'];

      $login="SELECT * FROM registration WHERE usermobile = '$usermobile'";

      if($password == $cpass){
      $res = mysqli_query($con, $login) or die (mysqli_error($con));
      $rows = mysqli_num_rows($res);

      
        if ($rows == 1) {

            $query = "UPDATE registration SET password = '$password' WHERE usermobile = '$usermobile'";
            mysqli_query($con, $query);
            echo 'Updated Successfully';
          $_SESSION['email']=$email;
             //Redirect user to indexmain.php
          header('Location: userlogin.php');
        }else{
            //echo $login
        }
    }
    else{
        echo '<script language="javascript">';
echo 'alert("Wrong Password")';
echo '</script>';
    }
    }
?>


<html lang="en">
<head>
<script language="javascript" type="text/javascript">
        window.history.forward();
        </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="loginstyle.css">
  <style>
body
{

  background-image: url('images/login.jpg');
  background-repeat: no-repeat;
  background-size: 100%;

}
.p{
  background-color: rgba(0, 0, 0, 0.4);
  height:100%;
  width: 100%;
  padding-bottom: 185px;
  background-size: 50%;
    

}
a{
  text-decoration: none;
  color: red;
  height:200px;
 font-size:14pt;
}
.fname{
width: 20vw;

}
  </style>
  <link rel="stylesheet" href="css/11.css">
  <link rel="stylesheet" type="text/css" href="loginstyle.css">
</head>
<body>
<div class="loginbox"></div>

    <div class="p">
      <center>
        <br>
        <br>
        <br>
        <br>


    <div class=" col-sm-4 col-ld-4 col-md-4">
    <center>
  <form method="post"  action="" class="form-group-sm  ">
  <h2 style="color: black;" ><b>Forgot Password</b></h3>

    <br>
  <input type="text" class="form-control fname" name="usermobile" required placeholder="User Mobile Number" pattern="^\d{10}$"><br>
  <span id="u"style="color:red; font-size:20px;"></span><br>
  <input type="password"class="form-control  form-group fname" required  name="pass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"><br>
  <span id="u1" style="color:red; font-size:20px;"></span><br>
  <input type="password"class="form-control  form-group fname" required  name="cpass" placeholder="Confirm Password" ><br>
  <span id="u1" style="color:red; font-size:20px;"></span><br>
  <!-- <div id="forgote"></div><br> -->

    </center>


  <input type="submit" class="btn btn-success" name="sub" value="Submit" >
  <br>
  <br>
  <h5><a style="color:white;" href="registration.php">Doesn't have an account? Register Here. </a></h5>
  &nbsp;<h5><a style="color:white;" href="forgot.php">Forgot Password? Reset Here. </a></h5>
  </form>

  </center>
  </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
 </body>
</html>