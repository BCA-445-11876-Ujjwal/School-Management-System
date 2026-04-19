<?php 
session_start(); 
include_once 'database.php';

if (!isset($_SESSION['user'])) {
  header('Location:./login.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Dashboard</title>

<meta content="width=device-width, initial-scale=1" name="viewport">

<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<style>
body { font-family: 'Segoe UI', sans-serif; }
.small-box { border-radius: 12px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
.small-box .inner h3 { font-size: 30px; font-weight: bold; }
.content-header h1 { font-weight: 600; }
</style>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php include_once 'header.php'; ?>
<?php include_once 'sidebar.php'; ?>

<div class="content-wrapper">

<section class="content-header">
  <h1>Dashboard <small>Overview</small></h1>
</section>

<section class="content">
<div class="row">

<!-- Students -->
<div class="col-lg-3 col-xs-6">
<div class="small-box bg-blue">
<div class="inner">
<?php
$sql="SELECT count(*) as total FROM student";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
echo "<h3>".$row['total']."</h3>";
?>
<p>Total Students</p>
</div>
<div class="icon"><i class="fa fa-user-circle"></i></div>
</div>
</div>

<!-- Teachers -->
<div class="col-lg-3 col-xs-6">
<div class="small-box bg-green">
<div class="inner">
<?php
$sql="SELECT count(*) as total FROM teacher";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
echo "<h3>".$row['total']."</h3>";
?>
<p>Total Teachers</p>
</div>
<div class="icon"><i class="fa fa-black-tie"></i></div>
</div>
</div>

<!-- Subjects -->
<div class="col-lg-3 col-xs-6">
<div class="small-box bg-yellow">
<div class="inner">
<?php
$sql="SELECT count(*) as total FROM subject";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
echo "<h3>".$row['total']."</h3>";
?>
<p>Total Subjects</p>
</div>
<div class="icon"><i class="fa fa-book"></i></div>
</div>
</div>

<!-- Parents -->
<div class="col-lg-3 col-xs-6">
<div class="small-box bg-red">
<div class="inner">
<?php
$sql="SELECT count(*) as total FROM parent";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
echo "<h3>".$row['total']."</h3>";
?>
<p>Registered Parents</p>
</div>
<div class="icon"><i class="fa fa-users"></i></div>
</div>
</div>

</div>
</section>

</div>

<?php include_once 'footer.php'; ?>

</div>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

<script>
var r = document.getElementById("stat");
if(r){ r.className += " active"; }
</script>

</body>
</html>