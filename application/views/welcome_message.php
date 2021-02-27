<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include_once(APPPATH.'common_files/header.php');?>
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<!-- Main Header -->
			<header class="main-header">
				<?php include_once(APPPATH.'common_files/top_header.php');?>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<?php include_once(APPPATH.'common_files/left_sidebar.php');?>
			</aside>
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
			  <!-- Content Header (Page header) -->
			  <section class="content-header">
			    <h1>
			      Page Header
			      <small>Optional description</small>
			    </h1>
			    <ol class="breadcrumb">
			      <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
			      <li class="active">Here</li>
			    </ol>
			  </section>

			  <!-- Main content -->
			  <section class="content container-fluid">

			    <!--------------------------
			      | Your Page Content Here |
			      -------------------------->

			  </section>
			  <!-- /.content -->
			</div>
			<!-- /.content-wrapper -->
			<?php include_once(APPPATH.'common_files/footer.php'); ?>
		</div>
	</body>
</html>