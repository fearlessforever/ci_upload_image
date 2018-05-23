<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>Upload Image</title> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/css/bootstrap.min.css"/> 
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets'); ?>/plugins/dropzone/dropzone.css"> 
</head>
<body>
<div id="theme-wrapper"> 
<div id="page-wrapper" class="container">
<div class="row"> 
<div id="content-wrapper">
<div class="row">
<div class="col-lg-12">
<div class="row">
<div class="col-lg-12">
<ol class="breadcrumb">
<li><a href="#">Home</a></li>
<li class="active"><span>Drop File Zone</span></li>
</ol>
<h1>Drop File Zone</h1>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="main-box clearfix" style="min-height: 820px;">
<header class="main-box-header clearfix">
<h2>Drag &amp; Drop file upload</h2>
</header>
<div class="pull-right" style="margin-top:-50px;"><a href="<?php echo base_url(''); ?>"><button class="btn btn-info">List</button></a></div>
<div class="main-box-body clearfix">

<div id="dropzone">
<form id="demo-upload" class="dropzone dz-clickable" action="<?php echo base_url('upload/save'); ?>">
<div class="dz-default dz-message">
<span>Drop files here to upload</span>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div> 
</div>
</div>
</div>
</div>  
<script src="<?php echo base_url('assets'); ?>/js/jquery.js"></script>
<script src="<?php echo base_url('assets'); ?>/js/bootstrap.js"></script> 
 
<script src="<?php echo base_url('assets'); ?>/plugins/dropzone/dropzone.js"></script> 
 
</body>
</html>