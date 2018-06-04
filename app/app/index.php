<?php

error_reporting(E_ALL); //  we don't want to see errors on screen
 
require_once('control/db_con.php'); // include the database connection

?>
<!DOCTYPE htmlPUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="assets/css/div-centering.css" />
    <link rel="stylesheet" href="assets/css/popup.css" />
    
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type = 'text/javascript' src= "assets/js/Chart.bundle.min.js"></script>
    <script type = 'text/javascript' src= "assets/js/Chart.PieceLabel.min.js"></script>
    <script type = 'text/javascript' src= "assets/js/chart.js"></script>
    
  
  <title>DOWELS SYSTEM</title>
  
</head>


<body bgcolor="#ECECEA">

<h1 align="center">DOWELS SYSTEM</h1>

<hr>

<!-- chart -->
<div id="content" class="outer-div" >  
<div style="width: 320px; height: 320px;" class="inner-div">
  <canvas id="myChart"></canvas>
</div>
</div>  


 <!-- Popup begins here -->
<div id="id01" class="modal" >
   
  <form id="login-form" class="modal-content animate" action="control/control.php" method="POST" style="width: 320px; height: 350px;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	   
    </div>

    <div class="container">

      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username"  required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit" class="logbtn"  value="Login">Login</button>

    </div>

    <div class="container" style="background-color:#f1f1f1">
      
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>

  </form>
  
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<hr>
<div id='footer' align="center">Copyright reserved - [ Doctors Welfare Assosiation ]</div>
</body>
</html>