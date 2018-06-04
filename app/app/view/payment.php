<?php 
session_start();
if(!isset($_SESSION['logged_in']) || ($_SESSION['role']!="admin" && $_SESSION['role']!="assit")){
      header("location:../index.php");
   }
   
include("../control/header.php");
?>

<body bgcolor="#ECECEA">
<div class="text-center">
<h1>PAYMENT PAGE</h1>
</div>
<hr>


	<div class="table-responsive">
  		<table class="table table-bordered" id="curd_table">
  			<tr>
  				<th width="15%">User ID</th>
  				<th width="20%">Name</th>
  				<th width="20%">NIC</th>
  				<th width="20%">Amount</th>
  				<th width="25%">Pay date (YYYY-MM-DD)</th>
  				<th></th>
  			</tr>
  			<tr>
  				<td contenteditable="true" class="uid"></td>
  				<td contenteditable="true" class="name"></td>
  				<td contenteditable="true" class="nic"></td>
  				<td contenteditable="true" class="amount"></td>
  				<td contenteditable="true" class="paydate"></td>
  				<td></td>
  			</tr>
  		</table>

  		<br>
    		<div align="center">
  			<button type="button" name="add" id="add" class="btn btn-success "> Add Row </button>
  			<button type="button" name="save" id="save" class="btn btn-info" > SUBMIT </button>
  			<button type="button" name="send" id="send" class="btn btn-info" value="send" > INFORM AUDIT </button>
  			<a href='../control/logout.php' class="btn btn-info ">LOG OUT</a>
  		</div>

  		<br>
  		

	</div>
	<div class="text-center">
  			<span id="feedback" class="alert alert-info " hidden="true"></span>
  		</div>



</body>
<style type="text/css">
.table {
    margin: 0 auto;
    width: 80%;
}
</style>

<script type="text/javascript" src="../assets/js/pay.js"></script>

</html> 



