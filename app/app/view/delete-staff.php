<?php 
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['role']!="admin"){
      header("location:../index.php");
   }
   
require_once "../control/header.php";
?>

<body bgcolor="#ECECEA">
<div class="text-center">
<h1>STAFF REMOVAL PAGE</h1>
</div>
<hr>
<div>

  <div class="text-center">
    <!--// Any content in here will be centered.-->
	
	
	<form name="listdata" action="" method="POST"> 
	<?php


// get the records from the database
	if ($result = $mysqli->query("SELECT * FROM emptbl "))
	{
		// display records if there are records to display
		if ($result->num_rows > 0)
		{
			// display records in a table
			echo "<table class='table table-bordered ' >";

			// set table headers
			echo "<tr><th>Employee ID</th><th>Name</th><th>NIC</th><th>Registered Date</th><th>Remove</th></tr>";

			while ($row = $result->fetch_object())
			{
				// set up a row for each record
				echo "<tr>";
				echo "<td >" . $row->EmpNo . "</td>";
				echo "<td>" . $row->Name . "</td>";
				echo "<td>" . $row->NIC . "</td>";
				echo "<td>" . $row->RegDate . "</td>";
				echo "<td class='text-center'>" ?> <input type="checkbox" name="num[]" value="<?php echo $row->EmpNo; ?>" /> <?php echo "</td>";
				echo "</tr>";
			}

			echo "</table>";
			echo "<br>";
		}
		// if there are no records in the database, display an alert message
		else
		{
		echo "<br><div class='text-center'><span id='feedback' class='alert alert-info' >NO employees to display .</span></div>";
		}
	}
	// show an error if there is an issue with the database query
	else
	{
		echo "Error: " . $mysqli->error;
	}




?>
	<input type="submit" class="btn btn-info " value="DELETE" name="submit" />
	<a href="admin-view.php" class="btn btn-info " >BACK</a>
	<a href='../control/logout.php' class="btn btn-info ">LOG OUT</a>
	</form>
	
  </div>
</div>

<?php 

if(isset($_POST["submit"]))
{


	if(!isset($_POST['num']))
	{
		echo "<br><div class='text-center'><span id='feedback' class='alert alert-info' >Please Select Record to delete.</span></div>";
	}else{
		$box=$_POST['num'];
		While(list($key,$val)=@each($box)){
			
			if($mysqli->query("DELETE FROM emptbl WHERE EmpNo=$val"))
			{
				?><script type="text/javascript">
				window.location.href=window.location.href;
				</script> <?php
			}else
			{
				echo "Error";
			}
			
		}
	}

	
}
// close database connection
$mysqli->close();
?>
<style type="text/css">
.table {
    margin: 0 auto;
    width: 80%;
}
</style>

</body>
</html> 
