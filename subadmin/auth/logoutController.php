<?php
session_start();
unset($_SESSION["smymSessionId"]);
unset($_SESSION["userId"]);
unset($_SESSION["userDesignation"]);
unset($_SESSION['MasterAdmin']);
header("Location: ../index.php");
?>
