<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Forane</title>
</head>
<body>
<button class="btn btn-primary" onclick="window.location.href='indexmain.php'" type="submit">Back</button><br><br>
<div class="container mt-5">
<h3>Parish Details</h3><br>

<div class="form-group">
    <?php
        include 'dbcon.php';
        $sql = "SELECT * FROM tbl_parish";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            echo "<select  id='record' class='form-select' aria-label='Default select example' onchange='change_url()'>";
                ?>
                
                <option selected>Selected</option>
                <?php
              while($row = $result->fetch_assoc()) {
              echo "<option value='" . $row['parish_id'] . "'>" . $row['parish_name'] . "</option>";
            }
           echo "</select>";
          } 
      ?>
                                </div>

<a href="#" id="submit_url">Select</a>
</div>
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