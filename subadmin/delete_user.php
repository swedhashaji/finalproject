<?php
include "dbcon.php";
$id=$_GET["id"];
mysqli_query($con, "delete from registration where id=$id");
?>
<script type="text/javascript">
    window.location="manage_users.php";
</script>