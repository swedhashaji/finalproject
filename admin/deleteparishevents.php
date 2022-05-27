<?php
include "dbcon.php";
$id=$_GET["id"];
mysqli_query($con, "UPDATE `events` set status = '0'  where id=$id");
?>
<script type="text/javascript">
    window.location="ViewParishevents.php";
</script>