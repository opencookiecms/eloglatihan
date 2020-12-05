<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Lockscreen</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/alte/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/alte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/alte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/alte/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <style>
  #qrcode1 {
  width:350px;
  height:350px;
  margin-left:80px;
  display:block;
}
  </style>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition lockscreen">
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="../../index2.html"><b>Bomba</b>PP</a>
  </div>
  <!-- User name -->
  <div class="lockscreen-name">   
  <input type="hidden" value="<?php echo site_url('kursus/pegesahan/'.$harikursus .'/'.$idk) ?>" id="textcode1"/>
                    <div id="qrcode1"></div>   </div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
   
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->

    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->

 
  <div class="lockscreen-footer text-center">
    Copyright &copy; 2020 <b><a href="https://adminlte.io" class="text-black">Bomba Pulau Pinang</a></b><br>
    All rights reserved
  </div>
</div>
<!-- /.center -->

<!-- jQuery 3 -->
<script src="<?php echo base_url() ?>assets/alte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/alte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="<?php echo base_url() ?>assets/qrcodejs/qrcode.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/qr.js"></script>
</body>
</html>
