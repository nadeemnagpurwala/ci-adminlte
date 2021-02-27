<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>AdminLTE 2 | Dashboard</title>
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php
  echo link_tag('design/adminhtml/bower_components/bootstrap/dist/css/bootstrap.min.css');
  echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
  echo link_tag('design/adminhtml/bower_components/Ionicons/css/ionicons.min.css');
  echo link_tag('design/adminhtml/dist/css/AdminLTE.min.css');
  echo link_tag('design/adminhtml/dist/css/skins/skin-blue.min.css');
  echo link_tag('design/adminhtml/plugins/iCheck/square/blue.css');
?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php echo link_tag('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic'); ?>

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<script src="<?= base_url();?>design/adminhtml/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url();?>design/adminhtml/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url();?>design/adminhtml/dist/js/adminlte.min.js" defer></script>
<!-- iCheck -->
<script src="<?= base_url();?>design/adminhtml/plugins/iCheck/icheck.min.js" defer></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->