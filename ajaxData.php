<?php
include_once 'dbcon.php';
if(!empty($_POST["forane_id"])){
    $query = "SELECT * FROM tbl_parish WHERE forane_id=".$_POST['forane_id']." AND parish_status = 1 ORDER BY parish_name ASC";
    $result = $con->query($query);

    if($result->num_rows > 0){
        echo '<option value="">Select Parish</option>';
        while($row = $result->fetch_assoc()){
            echo '<option value="'.$row['parish_id'].'">'.$row['parish_name'].'</option>';
        }
    }else{
        echo '<option value="">Parish not available</option>';
    }
}