
	<?php 

	include("report-head.php");

		echo"<h4 align='center'> User wise Total</h5>";

		if ($result = $mysqli->query("SELECT Name, sum(Amount) AS Total FROM payment  GROUP BY UID " ))
		{
			if ($result->num_rows > 0)
			{
			// display records in a table
			echo "<table class='table table-bordered'id='table'>";

			// set table headers
			echo "<tr><th>Name</th><th>Total</th></tr>";

			while ($row = $result->fetch_object())
			{
				// set up a row for each record
				echo "<tr>";
				echo "<td >" . $row->Name . "</td>";
				echo "<td>" . $row->Total . "</td>";
				
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
