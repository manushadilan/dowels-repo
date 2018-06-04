<?php 
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['role']!="assit"){
      header("location:../index.php");
   }
   
require_once "../control/header.php";
?>

<body bgcolor="#ECECEA">
<div class="text-center">
<h1>MANAGEMENT ASSISTANT PAGE</h1>
</div>
<hr>
<div>
	
  <div class="text-center">
    <!--// Any content in here will be centered.-->
	
	<a href="addusr.php" class="btn btn-info">ADD USER</a>
	<a href="payment.php" class="btn btn-info " >PAYMENT</a>
	<a href="delete-payment.php" class="btn btn-info " >DELETE PAYMENT</a>
	<a href='../control/logout.php' class="btn btn-info ">LOG OUT</a>
	
  </div>
</div>

</body>
</html> 
