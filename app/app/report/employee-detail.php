<?php 
error_reporting(E_ALL); //  we don't want to see errors on screen
session_start();


if(!isset($_SESSION['logged_in']) || ($_SESSION['role']!="admin")){
      header("location:../index.php");
   }

require_once "../control/header.php";

?>


<body bgcolor="#ECECEA">
<div class="text-center">
<h1>REPORTS</h1>
</div>
<hr>

<script src="../assets/js/jspdf.min.js"></script>
<script src="../assets/js/pdfFromHTML.js"></script>
<script src="../assets/js/jspdf.plugin.autotable.js"></script>

<div class="text-center">
		
		<a href="../view/admin-view.php" class="btn btn-info">BACK</a>
		<a href='../control/logout.php' class="btn btn-info ">LOG OUT</a>
		<a href='#' onclick="HTMLtoPDF()" class="btn btn-info ">PRINT</a>



</div>
<div>
	<?php 

		echo "<br><h4 align='center'>Staff Details </h4>";

		if ($result = $mysqli->query("SELECT * FROM emptbl" ))
		{
			if ($result->num_rows > 0)
			{
			// display records in a table
			echo "<table class='table table-bordered' id='table'>";

			// set table headers
			echo "<tr><th>Employee ID</th><th>Name</th><th>NIC</th><th>Date Of Birth</th><th>Email</th><th>Telephone No</th><th>Registered Date</th></tr>";

			while ($row = $result->fetch_object())
			{
				// set up a row for each record
				echo "<tr>";
				echo "<td>" . $row->EmpNo . "</td>";
				echo "<td>" . $row->Name . "</td>";
				echo "<td>" . $row->NIC . "</td>";
				echo "<td>" . $row->DOB . "</td>";

				echo "<td>" . $row->Email . "</td>";
				echo "<td>" . $row->TelNO . "</td>";
				echo "<td>" . $row->RegDate . "</td>";
				echo "</tr>";
			}

			echo "</table>";
		}else
		{
		echo "No results to display!<br />";
		}
	}
include("report-footer.php");

	?>
