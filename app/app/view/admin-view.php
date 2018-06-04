<?php 
session_start();

if(!isset($_SESSION['logged_in']) || $_SESSION['role']!="admin"){
      header("location:../index.php");
   }
   
require_once "../control/header.php";
?>
<body bgcolor="#ECECEA">
<div class="text-center">
<h1>ADMINISTRATOR CONTROL PANEL</h1>
</div>
<hr>
<div>

  <div class="text-center">
    <!--// Any content in here will be centered.-->
	
	<a href="payment.php" class="btn btn-info">PAYMENT</a>
	<a href="addstaff.php" class="btn btn-info" >ADD STAFF</a>
	<a href="../report/report.php" class="btn btn-info" >REPORTS</a>
	<a href="../report/employee-detail.php" class="btn btn-info" >STAFF DETAILS</a>
	<a href="delete-staff.php" class="btn btn-info" >REMOVE STAFF</a>
	<a href="delete-user.php" class="btn btn-info" >REMOVE USER</a>
	<a href="delete-payment.php" class="btn btn-info " >DELETE PAYMENT</a>
	<a href='../control/logout.php' class="btn btn-info">LOG OUT</a>
	
  </div>
</div>

</body>
</html>