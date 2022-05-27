<?php
include "dbConnect.php";
$id=$_GET["id"];
mysqli_query($con, "update forane set status = '0' where forane_id=$id");
?>
<script type="text/javascript">
    window.location="manage_forane.php";
</script>
?>