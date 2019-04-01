<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Admin Panel</title>

		<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">

		<link rel="stylesheet" href="../css/bootstrap-datetimepicker.css">
		<link rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css">



    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/jquery-ui.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js"></script>


		<script src="../js/bootstrap-datetimepicker.js" type="text/javascript"></script>
		<script src="../js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>


	</head>

	<style media="screen">
		.x-content {
			width: 130%;
			height: 430px;
			overflow-y: scroll;
			padding: 1px;
		}
		.x-content1 {
			width: 120%;
			height: 180px;
			overflow-y: scroll;
			overflow-x: hidden;
		}
	</style>


	<body>
  <?php

  session_start();
  if ($_SESSION['user']=="") {
    header("location:login.php");
  }

	include '../oop_konek.php';


  ?>
<!-- Header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
      <a class="navbar-brand" href="#">AKTIF</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
            <i class="glyphicon glyphicon-user"> Admin</i><span class="caret"></span></a>
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#"><?php echo $_SESSION['user']; ?></a></li>
            <li><a href="#"></a></li>
            <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container">


  <!-- upper section -->
  <div class="row">
	<div class="col-sm-2">
      <!-- left -->
      <h3><i class="glyphicon glyphicon-briefcase"></i> Toolbox</h3>
      <hr>

      <ul class="nav nav-stacked">
        <li><a href="index.php" target="ext"><i class="glyphicon glyphicon-home"></i> Home</a></li>
        <li><a href="index.php?page=1" target="ext"><i class="glyphicon glyphicon-list-alt"></i> Rekap</a></li>
        <li><a href="index.php?page=2" target="ext"><i class="glyphicon glyphicon-book"></i> Data</a></li>
        <li><a href="index.php?page=3" target="ext"><i class="glyphicon glyphicon-print"></i> Kartu Tes</a></li>
				<li><a href="export.excel.php" target="ext"><i class="glyphicon glyphicon-download-alt"></i> Download Data</a></li>

      </ul>

      <hr>

  	</div><!-- /span-3 -->
    <div class="col-sm-9">

      <!-- column 2 -->
       <h3>Dashboard</h3>

       <hr>

	   <div class="row" >
            <!-- center left-->
         	<div class="col-md-12" id="isi" >

            <?php
            if (!isset($_GET['page'])) {
              require "./page/tbinfo.php";
            } elseif ($_GET['page'] == 1) {
              require "./page/diagrampie.php";
            } elseif ($_GET['page'] == 2) {
              require "./page/tbpendf.php";
            } elseif ($_GET['page'] == 3) {
              require "./page/f_cetak.php";
						} elseif ($_GET['page'] == 5 && !empty($_GET['id'])) {
							require "./aksi/form_edit.php";
						} elseif ($_GET['page'] == 5 && !empty($_GET['lamp'])) {
							require "./aksi/lampiran.php";
						} elseif ($_GET['page'] == 'manual') {
							require "./page/manual.form.admin.php";
						} elseif ($_GET['edit'] == 2 && !empty($_GET['edit_id'])) {
							require "./page/edit_data.php";
						} else {
              echo "<h1>Halaman tidak diketemukan</h1>";
            }


             ?>
         	</div><!--/col-md-->

       </div><!--/row-->
  	</div><!--/col-span-9-->

  </div><!--/row-->
</div><!--/container-->
<!-- /Main -->


<footer class="text-center"></footer>


<div class="modal" id="addWidgetModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Add Widget</h4>
      </div>
      <div class="modal-body">
        <p>Add a widget stuff here..</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dalog -->
</div><!-- /.modal -->




	<!-- script references -->
		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script> -->

		<script>
		  $(function() {
		    $( "#datepicker" ).datepicker({dateFormat: 'd MM yy' });
		    $( "#datepicker1" ).datetimepicker({    format: "HH:ii",
    					defaultTime: '00:00',
    					pickSeconds: false,
    					datepicker: false});
		  });
		</script>


	</body>
</html>
