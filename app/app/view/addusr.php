<?php 
error_reporting(E_ALL); //  we don't want to see errors on screen
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['role']!="assit"){
      header("location:../index.php");
   }
   
require_once "../control/header.php";
?>

<body bgcolor="#ECECEA">

<div class="text-center">
<h1>USER REGISTRATION FORM</h1>
</div>
<hr>

<div class="text-center" >
<form class="form-horizontal" action="../control/adduserlogic.php" method="POST"  id="user-form">



   <div class="table-responsive text-center">
      <table class="table table-bordered">

        <tr>
        <td>User NO</td>
        <td> <input type="text" class="form-control" id="usrno" name="usrno" placeholder="User NO"></td>
        </tr>


        <tr>
        <td>Name</td>
        <td><input type="text" class="form-control" id="name" name="name" placeholder="Name"></td>
        </tr>


        <tr>
        <td>NIC No</td>
        <td><input type="text" class="form-control" id="nic" name="nic" placeholder="NIC No"></td>
        </tr>

        <tr>
        <td>Date of birth</td>
        <td><input type="date" class="form-control" id="dob" name="dob" placeholder="Date of birth"></td>
        </tr>

        <tr>
        <td>User name</td>
        <td><input type="text" class="form-control" id="uname"  name="uname" placeholder="User name"></td>
        </tr>

        <tr>
        <td>Password</td>
        <td> <input type="password" class="form-control" id="password" name="password" placeholder="Password"></td>
        </tr>

        <tr>
        <td>Bank</td>
        <td><input type="text" class="form-control" id="bank" name="bank" placeholder="Bank"></td>
        </tr>


        <tr>
          <td>Account No</td>
          <td><input type="text" class="form-control" id="accno"  name="accno" placeholder="Account No"></td>
        </tr>


         <tr>
          <td>Email</td>
          <td> <input type="email" class="form-control" id="inputemail"  name="inputemail" placeholder="Email"></td>
        </tr>

         <tr>
          <td>Telephone NO</td>
          <td><input type="text" class="form-control" id="telno" name="telno" placeholder="Telephone NO"></td>
        </tr>

         <tr>
          <td>Date of registration</td>
          <td><input type="date" class="form-control" id="rdate" name="rdate" placeholder="Date of registration"></td>
        </tr>

         <tr>
          <td><input type="submit" name="submit " class="btn btn-info" value="REGISTER"></input>
              <a href="clerk-view.php" class="btn btn-info">BACK</a>
              <input type="reset" name="reset " class="btn btn-info" value="RESET">
          </td>
          <td><span id="feedback" class="alert alert-info " hidden="true"></span></td>
        </tr>

        </table>
    </div>

   
</form>
</div>

<script type="text/javascript" src="../assets/js/user.js">
</script>

<style type="text/css">
.table {
    margin: 0 auto;
    width: 60%;
}
</style>

</body>
</html>