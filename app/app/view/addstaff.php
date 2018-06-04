<?php 
error_reporting(E_ALL); //  we don't want to see errors on screen
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['role']!="admin"){
      header("location:../index.php");
   }
   
require_once('../control/db_con.php'); // include the database connection
require_once "../control/header.php";
?>

<body bgcolor="#ECECEA">

<div class="text-center">
<h1>STAFF REGISTRATION FORM</h1>
</div>
<hr>


<div class="text-center" >

<form class="form-horizontal" action="../control/addstafflogic.php" method="POST"  id="staff-form">
   


  <div class="table-responsive text-center">
      <table class="table table-bordered">
        <tr>
        <td>Employee NO</td>
         <td><input type="text" class="form-control" id="empno" name="empno" placeholder="Employee NO"></td>
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
         <td><input type="date" class="form-control" id="dob" name="dob"></td>
         </tr>

         <tr>
        <td>User name</td>
         <td> <input type="text" class="form-control" id="uname" placeholder="User name" name="uname"></td>
         </tr>

         <tr>
        <td>Password</td>
         <td> <input type="password" class="form-control" id="password" placeholder="Password" name="password"></td>
         </tr>

         <tr>
        <td>Email</td>
         <td><input type="email" class="form-control" id="inputemail" placeholder="Email" name="inputemail"></td>
         </tr>

         <tr>
        <td>Telephone NO</td>
         <td> <input type="text" class="form-control" id="telno" placeholder="Telephone NO" name="telno"></td>
         </tr>

          <tr>
        <td>Employee Type</td>
         <td>  <label class="radio-inline">
           <input type="radio" name="type" id="massits" value="1" checked> Management Assistant</label>
           <label class="radio-inline">
            <input type="radio" name="type" id="audit" value="2"> Audit</label></td>
         </tr>

          <tr>
        <td>Date of Registration</td>
         <td><input type="date" class="form-control" id="rdate" name="rdate"></td>
         </tr>

          <tr>
        <td><input type="submit" name="submit " class="btn btn-info" value="REGISTER"></input> <a href="admin-view.php" class="btn btn-info">BACK</a>
        <input type="reset" name="reset " class="btn btn-info" value="RESET">
        </td>
         <td><span id="feedback" class="alert alert-info " hidden="true" ></span>
        </td>
         </tr>

      </table>
 </div>

    
</form>
</div>

</body>

<script type="text/javascript" src="../assets/js/staff.js"></script>
<style type="text/css">
.table {
    margin: 0 auto;
    width: 60%;
}
</style>
</html>