
	<?php 

	include("report-head.php");
		echo"<h4 align='center'> Full payment Details</h5>";

		if ($result = $mysqli->query("SELECT * FROM payment" ))
		{
			if ($result->num_rows > 0)
			{
			// display records in a table
			echo "<table class='table table-bordered' id='table'>";

			// set table headers
			echo "<tr><th>Payment ID</th><th>User ID</th><th>User Name</th><th>Amount</th><th>Payment Date</th><th>Approval</th></tr>";

			while ($row = $result->fetch_object())
			{
				// set up a row for each record
				echo "<tr>";
				echo "<td >" . $row->PayID . "</td>";
				echo "<td>" . $row->UID . "</td>";
				echo "<td >" . $row->Name . "</td>";
				
				echo "<td >" . $row->Amount . "</td>";
				echo "<td>" . $row->PayDate . "</td>";
				if($row->Approved==1){echo "<td>" . 'Approved'. "</td>";}else{echo "<td>" .'Pending'. "</td>";} 
				
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
