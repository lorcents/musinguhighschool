<?php
session_start();
//include("dbconnection");
$_SESSION['login']=="";
////unset();
session_destroy();
session_unset();

?>
<script language="javascript">
alert('You have successfully Logged out');
document.location="index.php";
</script>
