<?php
include "dbcon.php";
$id=$_GET["id"];
mysqli_query($con, "update registration set status = '0'  where id=$id");
?>
<script type="text/javascript">
    window.location="view_user.php";
</script>