<?php 
error_reporting(E_ALL); //  we don't want to see errors on screen
session_start();

require_once "header.php";
require_once "mailSend.php";

//Validation 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["usrno"])) {
   echo "User no is required";
   exit();
  } else {
  	$uid = test_input($_POST["usrno"]);

  	$result = $mysqli->query("SELECT * FROM usrtbl WHERE UID = '$uid'");

  	if ( $result->num_rows != 0 ){ 
  		echo "User no is already exist!";
      exit();
	}else{
		$res =$mysqli->query("SELECT * FROM login WHERE ID = '$uid'");
		if($res->num_rows != 0 )
		{
			echo "User no is already exist!";
			exit();
		}

    
  }
  }
  if (empty($_POST["name"])) {
    echo "User name is required.";
    exit();
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      echo "Only letters and white space allowed for name"; 
      exit();
    }
  }
  if (empty($_POST["nic"])) {
    echo "NIC is required";
    exit();
  } else {
    $nic = test_input($_POST["nic"]);

    if(strlen($nic)!=10)
  	{
  			echo "NIC no is invalid";
        exit();
  	}
  }

if (empty($_POST["dob"])) {
    echo  "DOB is required";
    exit();
  } else {
    $dob = test_input($_POST["dob"]);
  }

  if (empty($_POST["uname"])) {
    echo "User name is required";
    exit();
  } else {
    $uname = test_input($_POST["uname"]);
    $res = $mysqli->query("SELECT * FROM login WHERE uname = '$uname'");

  	if ( $result->num_rows != 0 ){ 
  		echo "User name is alrady exist!";
      exit();
	}

  }

  if (empty($_POST["password"])) {
    echo "Password is required";
    exit();
  } else {
    $pass = test_input($_POST["password"]);
  }
if (empty($_POST["bank"])) {
    echo "Bank is required";
    exit();
  } else {
    $bank = test_input($_POST["bank"]);
  }
if (empty($_POST["accno"])) {
    echo "Account no is required";
    exit();
  } else {
    $accno = test_input($_POST["accno"]);
  }



  if (empty($_POST["inputemail"])) {
    echo "Email is required";
    exit();
  } else {
     $email = test_input($_POST["inputemail"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format"; 
      exit();
    }
  }
    
    if (empty($_POST["telno"])) {
    echo "Telephone number is required";
    exit();
  } else {
  		 $telno = test_input($_POST["telno"]);
  	if(strlen($telno)!=10)
  	{
  		echo  "Telephone number is invalid";
      exit();
  		if(!is_numeric($telno))
  		{
  			echo "Telephone number is invalid";
        exit();
  		}
  	}
   
  }

  if (empty($_POST["rdate"])) {
    echo "Register date is required";
    exit();
  } else {
    $rdate = test_input($_POST["rdate"]);
  }




$sql = "INSERT INTO usrtbl (UID, Name, NIC, DOB, Bank, AccNO,Email,TelNO,RegDate) VALUES ('$uid', '$name', '$nic','$dob','$bank','$accno','$email','$telno','$rdate')";


if($mysqli->query($sql))
{
    $encpass=password_hash($pass,PASSWORD_DEFAULT);
    $qry= "INSERT INTO login (ID, uname, passwrd,role) VALUES ('$uid', '$uname', '$encpass','user')";


    if($mysqli->query($qry))
    {
      echo "Login added.";
      mailsend($uname,$pass,$email);
    }
    else
    {
      echo "Error: " . $mysqli->error;
    }

    echo "User Created. ";

}
else
{
  echo "Error: " . $mysqli->error;
}

 
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// close database connection
$mysqli->close();

?>