<?php
include "dbcon.php";
$id=$_GET["parish_id"];
$stat=0;
mysqli_query($con, "update tbl_parish set parish_status = '0' where parish_id=$id");
?>
<script type="text/javascript">
    window.location="view_parish2.php";
</script>