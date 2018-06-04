<?php 
error_reporting(E_ALL); //  we don't want to see errors on screen
session_start();
require_once('db_con.php'); // include the database connection


if(isset($_POST["uid"]))
{

  $uid=$_POST["uid"];
  $name=$_POST["name"];
  $nic=$_POST["nic"];
  $amount=$_POST["amount"];
  $paydate=$_POST["paydate"];
  $aval=0;

  $query='';

  for($count=0;$count<count($uid);$count++)
  {
    $clean_uid=mysqli_real_escape_string($mysqli,$uid[$count]);
    $clean_name=mysqli_real_escape_string($mysqli,$name[$count]);
    $clean_nic=mysqli_real_escape_string($mysqli,$nic[$count]);
    $clean_amount=mysqli_real_escape_string($mysqli,$amount[$count]);
    $clean_paydate=mysqli_real_escape_string($mysqli,$paydate[$count]);

    //validation
    if($clean_uid != '' && $clean_name != '' && $clean_nic != '' && $clean_amount != '' && $clean_paydate != '' )
   {
    if (!preg_match("/^[a-zA-Z ]*$/",$clean_name)) {
      echo "Only letters and white space allowed"; 
    }
    else
    {
      if(strlen($clean_nic)!=10)
     {
         echo "NIC no is invalid";
      }
      else
      {
        if(!is_numeric($clean_amount))
        {
          echo "Not valid amount !";
        }
        else
        {
           if(validateDate($clean_paydate)){
             $query .= 'INSERT INTO payment (UID, Name, NIC, Amount,PayDate,Approved) VALUES ("'.$clean_uid.'" ,"'.$clean_name.'", "'.$clean_nic.'","'.$clean_amount.'" ,"'.$clean_paydate.'","'.$aval.'");';
           }else{
              echo "Date is not in valid format !";
           }
        }
      }
    }
  }
  else
      {
        echo 'All fields are required. ';
      }

  }

  if($query != '')
  {
    if(mysqli_multi_query($mysqli,$query))
    {
      echo 'Data inserted ! ';
    }
    else{
      echo 'Error'. $mysqli->error;;
    }
  }
 

}


function validateDate($date)
{
    $d = DateTime::createFromFormat('Y-m-d', $date);
    return $d && $d->format('Y-m-d') === $date;
}

$mysqli->close();

?>