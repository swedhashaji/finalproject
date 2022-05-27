<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>Registration</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- MATERIAL DESIGN ICONIC FONT -->
   <link rel="stylesheet" href="fonts1/material-design-iconic-font/css/material-design-iconic-font.min.css">

   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
   <!-- STYLE CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <link rel="stylesheet" href="registrationstyle.css">
   <style>
      .body {

         background-image: url('images/notre-dame-basilica-montreal-GettyImages-462576645.jpg');
         background-repeat: no-repeat;
         background-size: 150%;
         color: blueviolet;
        }

      .p {
         background-image: url("images/notre-dame-basilica-montreal-GettyImages-462576645.jpg");
         background-size: cover;
         background-repeat: no-repeat;
         height: 100%;
         width: 100%;

        }

      .inner {
         width: 50vw;
         height: 100%;
         display: flex;
         background-color: #F5F5F5;
         border-radius: 10px;
         backdrop-filter: blur(10px);
         opacity: 0.9;
        }

      .wrapper {
         height: 200%;
         width: 100%;
         display: flex;
         justify-content: center;
         align-items: center;
         backdrop-filter: blur(7px) brightness(0.9);
      }

      .signup-container {
         padding: 2vw;
         width: 100%;

      }
   </style>
   <script type="text/javascript">
      function getbranch(val) {
         $.ajax({
            method: "POST",
            url: "get_sub.php",
            data: 'batchid=' + val,
            success: function(data) {
               $("#branch-list").html(data);
            }
         });
      }
   </script>
</head>

<body>
   <div class="p">

      <div class="wrapper">
         <div class="inner">
            <br><br>
            <form action="" method="POST" class="signup-container">
               <h3 style="color:red;">Create Account</h3>
            <form>

                  <div class="form-group">
                     <label for="exampleFormControlInput1">Name</label>
                     <input type="text" class="form-control" name="user" id="exampleFormControlInput1" placeholder="full name">
                  </div>
                  

                  <div class="form-group">
                     <label for="exampleFormControlSelect2">Gender</label>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                     </div>

                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="option2">
                        <label class="form-check-label" for="inlineRadio2">Female</label>
                     </div>
                  

                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Branch</label>
                        <select onChange="getbranch(this.value);"  name="branch" id="branch" class="form-control" required >
                        <option value="">Select</option>
                           <option>Btech</option>
                           <option>Mtech</option>
                           <option>Mca</option>

                        </select>
                     </div>

                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Batch</label>
                        <select onChange="getbranch(this.value);" name="batch" id="batch" class="form-control" required>
                           <option value="">Select</option>
                           <option value="2015">2015</option>
                           <option value="2016">2016</option>
                           <option value="2017">2017</option>
                           <option value="2018">2018</option>
                           <option value="2019">2019</option>
                           <option value="2020">2020</option>
                           <option value="2021">2021</option>
                        </select>

                     </div>

                     <div class="form-group">
                        <label for="exampleFormControlInput1">City</label>
                        <input type="text" name="city" required Placeholder="Enter your city" class="form-control"  pattern="[A-Za-z]{1,32}">
                     </div>

                     <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" name="mail" required Placeholder="Enter your email" class="form-control"  pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}">
                     </div>


                     <div class="form-group">
                        <label for="exampleFormControlInput1">Phone</label>
                        <input type="text" id="phone" required placeholder="Phone number" class="form-control"name="phone"  pattern="[0-9]{10}">
                     </div>

                     <div class="form-group">
                        <label for="exampleFormControlInput1">Username</label>
                        <input type="text"name="user1" placeholder="Username" required Class="form-control" pattern="[a-zA-Z'-'\s]*">
                
                     </div>


                     <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password"name="pass" placeholder="Enter your password" required Class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                     </div>

                     <div class="form-group">
                        <label for="exampleFormControlInput1">Re-Password</label>
                        <input type="password"name="pass1" placeholder="Re-Enter Password" required Class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                     </div>
                     <div class="form-group">
                     <label for="myfile">Select a file:</label><input type="file" id="file" name="file"><br><br>
                     </div>

                  </div>

                  <br>
                  <center>
                     <div class="form-group">
                        <label for="exampleFormControlInput1"></label>
                        <input type="submit" class="btn btn-success" name="submit" value="Submit">
                     </div>
                  </center>
      </div>
   </div>
   </div>
         
</body>
</html>
