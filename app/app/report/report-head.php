<?php 
error_reporting(E_ALL); //  we don't want to see errors on screen
session_start();


if(!isset($_SESSION['logged_in']) || ($_SESSION['role']!="admin" && $_SESSION['role']!="audit")){
      header("location:../index.php");
   }
   
require_once "../control/header.php";

?>


<body bgcolor="#ECECEA" >
<div class="text-center">
<h1>REPORTS</h1>
</div>
<hr>
<div class="text-center" >

</div>


<div class="text-center">
		
		<a href="report.php" class="btn btn-info">BACK</a>
		<a href='../control/logout.php' class="btn btn-info ">LOG OUT</a>
		<a href='#' onclick="HTMLtoPDF()" class="btn btn-info ">PRINT</a>
</div>
<div id="HTMLtoPDF">

<script src="../assets/js/jspdf.min.js"></script>
<script src="../assets/js/pdfFromHTML.js"></script>
<script src="../assets/js/jspdf.plugin.autotable.js"></script>

