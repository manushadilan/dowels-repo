
	<?php 
	include("report-head.php");
		echo"<h4 align='center'>User Details</h5>";

		if ($result = $mysqli->query("SELECT * FROM usrtbl" ))
		{
			if ($result->num_rows > 0)
			{
			// display records in a table
			echo "<table class='table table-bordered' id='table'>";

			// set table headers
			echo "<tr><th>User ID</th><th>Name</th><th>NIC</th><th>Date Of Birth</th><th>Bank</th><th>Account NO</th><th>Email</th><th>Telephone No</th><th>Registered Date</th></tr>";

			while ($row = $result->fetch_object())
			{
				// set up a row for each record
				echo "<tr>";
				echo "<td>" . $row->UID . "</td>";
				echo "<td>" . $row->Name . "</td>";
				echo "<td>" . $row->NIC . "</td>";
				echo "<td>" . $row->DOB . "</td>";
				echo "<td>" . $row->Bank . "</td>";
				echo "<td>" . $row->AccNO . "</td>";
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