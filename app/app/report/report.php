<?php 
error_reporting(E_ALL); //  we don't want to see errors on screen
session_start();


if(!isset($_SESSION['logged_in']) || ($_SESSION['role']!="admin" && $_SESSION['role']!="audit")){
      header("location:../index.php");
   }

require_once "../control/header.php";

?>


<body bgcolor="#ECECEA">
<div class="text-center">
<h1>REPORTS</h1>
</div>
<hr>
<div class="text-center">

		<table class='table '>

		<tr>
			<td><a href="full-detail.php" class="btn btn-info">FULL DETAIL</a> </td>
			<td> <a href="monthly-net-total.php" class="btn btn-info">Monthly Net Total</a></td>	

			<td> <a href="monthly-approved-total.php" class="btn btn-info">Monthly Approved Total</a></td>
			<td> 	<a href="monthly-pending-approval.php" class="btn btn-info">Monthly Pending Approval Total</a></td>
		</tr>

		<tr>
			<td> <a href="userwise-total.php" class="btn btn-info">USERWISE TOTAL</a></td>
			<td><a href="grand-total.php" class="btn btn-info">GRAND TOTAL</a> </td>	
			<td> <a href="user-detail.php" class="btn btn-info">USER DETAILS</a></td>
			<td><a href='../control/logout.php' class="btn btn-info ">LOG OUT</a> </td>	
		</tr>

		

		</table>



</div>


<style type="text/css">
.table {
    margin: 0 auto;
    width: 80%;
}
</style>
</body>
</html>