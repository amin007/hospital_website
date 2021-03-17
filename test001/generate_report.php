<?php
require 'tatarajah.php';
require 'Database.php';
require 'fpdf182/fpdf.php';
require 'class_fpdfv01.php';
?><!DOCTYPE HTML>
<html>
<head>
<title>Generate Report System</title>
<meta charset="UTF-8">
<!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<!-- container -->
<div class="container">
<div class="page-header"><h1>Patient Details</h1></div>
<?php
include 'patient.php';

$id=isset($_GET['id_patient']) ? $_GET['id_patient'] : die('ERROR: Record ID not found.');

$body1=new Database();
$link=$body1->MyDatabase();
/*$body2=new patient($link);

$body2->print_user($id);
//*/
?>
</div><!-- end .container -->
     
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>