<?php
$id=$_GET['id'];
$status1='accept';
    $con = new mysqli("localhost", "root", "", "smymdb");
    $con->query("Update request set status='$status1' where request_id='$id'");
    ?>
    <script type="text/javascript">
    window.location="notification.php";
</script>