<?php 
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['role']!="user"){
      header("location:../index.php");
   }
   
require_once "../control/header.php";

?>

<body bgcolor="#ECECEA">
<div class="text-center">
<h1>YOUR RECORDS</h1>
</div>
<hr>
<div>

  <div class="text-center" >
    <!--// Any content in here will be centered.-->
<?php

$uname=mysqli_real_escape_string($mysqli,$_SESSION['username']);

$res=$mysqli->query("SELECT id FROM login WHERE uname='$uname' limit 1");
$val=$res->fetch_object();
$uid=$val->id;




// get the records from the database
	if ($result = $mysqli->query("SELECT * FROM payment WHERE UID='$uid'"))
	{
		// display records if there are records to display
		if ($result->num_rows > 0)
		{
			// display records in a table

			echo "<table class='table table-bordered ' id='table'>";

			// set table headers
			echo "<tr><th>Payment ID</th><th>Amount</th><th>Pay date</th><th>Approval</th></tr>";

			while ($row = $result->fetch_object())
			{
				// set up a row for each record
				echo "<tr>";
				echo "<td class='col-md-3'>" . $row->PayID . "</td>";
				echo "<td class='col-md-3'>" . $row->Amount . "</td>";
				echo "<td class='col-md-3'>" . $row->PayDate . "</td>";
				if($row->Approved==1){echo "<td class='col-md-3'>" . 'Approved'. "</td class='col-md-3'>";}else{echo "<td>" .'Pending'. "</td>";} 
				echo "</tr>";
			}

			echo "</table>";
		}
		// if there are no records in the database, display an alert message
		else
		{
		echo "No records to display!<br />";
		}
	}
	// show an error if there is an issue with the database query
	else
	{
		echo "Error: " . $mysqli->error;
	}


	
		echo"<h4 align='center'>Total Amount</h5>";

		if ($result = $mysqli->query("SELECT sum(Amount) as 'Total' FROM payment WHERE UID='$uid'"))
		{
			if ($result->num_rows > 0)
			{
			// display records in a table
			echo "<table class='table table-bordered'>";

			// set table headers
			echo "<tr><th>Total Amount</th></tr>";

			while ($row = $result->fetch_object())
			{
				// set up a row for each record
				echo "<tr>";
				echo "<td>" . $row->Total . "</td>";
				
				echo "</tr>";
			}

			echo "</table>";
		}else
		{
		echo "No results to display!<br />";
		}
	}



	echo"<h4 align='center'>Your Approved Total Amount</h5>";

		if ($result = $mysqli->query("SELECT sum(Amount) as 'Approved' FROM payment WHERE UID='$uid' and Approved='1'"))
		{
			if ($result->num_rows > 0)
			{
			// display records in a table
			echo "<table class='table table-bordered'>";

			// set table headers
			echo "<tr><th>Your Approved Total Amount</th></tr>";

			while ($row = $result->fetch_object())
			{
				// set up a row for each record
				echo "<tr>";
				echo "<td>" . $row->Approved . "</td>";
				
				echo "</tr>";
			}

			echo "</table>";
		}else
		{
		echo "No results to display!<br />";
		}
	}



// close database connection
$mysqli->close();

?>
	<br>
	<a href='#' onclick="HTMLtoPDF()" class="btn btn-info ">PRINT</a>
	<a href='../control/logout.php' class="btn btn-info ">LOG OUT</a>
	
  </div>
</div>

</body>

<style type="text/css">
.table {
    margin: 0 auto;
    width: 80%;
}
</style>
<script src="../assets/js/jspdf.min.js"></script>
<script src="../assets/js/pdfFromHTML.js"></script>
<script src="../assets/js/jspdf.plugin.autotable.js"></script>

</html> 
