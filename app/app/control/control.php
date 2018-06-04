<?php
require_once('db_con.php'); // include the database connection
session_start();
//validation
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

global $error;
$username=test_input($_POST["username"]);
$password=test_input($_POST["password"]);

$result = $mysqli->query("SELECT * FROM login WHERE uname = '$username'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    //echo "User name or password is incorrect.";
  	 session_destroy();
   	header('Location: ../index.php');
}
else
{
	$user = $result->fetch_assoc();

    if ( password_verify($password, $user['passwrd']) ) {
		
		$userrole=$user['role'];
		
		switch($userrole){
			case 'admin':
				$_SESSION['username']=$username;
				$_SESSION['role']="admin";
				// This is how we'll know the user is logged in
				$_SESSION['logged_in'] = true;
				header('Location: ../view/admin-view.php');
				break;
			case 'assit':
				$_SESSION['username']=$username;
				$_SESSION['role']="assit";
				$_SESSION['logged_in'] = true;
				header('Location: ../view/clerk-view.php');
				break;
			case 'user':
				$_SESSION['username']=$username;
				$_SESSION['role']="user";
				$_SESSION['logged_in'] = true;
				header('Location: ../view/user-view.php');
				break;
			case 'audit':
				$_SESSION['username']=$username;
				$_SESSION['role']="audit";
				$_SESSION['logged_in'] = true;
				header('Location: ../view/audit-view.php');
				break;
			default:
				session_destroy();
				//echo "User name or password is incorrect.";
				header('Location: ../index.php');
		} 
	}
	else{
		//echo "User name or password is incorrect.";
		session_destroy();
		header('Location: ../index.php');
	}
}

mysqli_close($mysqli);

?>
