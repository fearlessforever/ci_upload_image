<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title>List Image</title> 
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
<li class="active"><span>List file</span></li>
</ol> 
</div>
</div>
<div class="row">
<div class="col-lg-12">
<div class="main-box clearfix" style="min-height: 820px;">
<header class="main-box-header clearfix">
<h2>Uploaded image </h2>
</header>
<div class="main-box-body clearfix">
<div class="pull-right"><a href="<?php echo base_url('upload'); ?>"><button class="btn btn-danger">Tambah</button></a></div>
<table class="table table-border">
	<thead><tr><th>ID</th><th>View Image</th></tr></thead>
	<tbody>
<?php
  if(empty($imageList)){
	  echo '<tr><td colspan="2">Tidak ada data</td></tr>';
  }elseif(is_array($imageList)){
	  foreach($imageList as $val)
	  {
		  echo '<tr><td>'.$val['file_id'].'</td><td><a target="_blank" href="'. base_url($val['folder'].$val['file_name']) .'"><button class="btn btn-info">View</button></a></td></tr>';
	  }
  }
?>
	</tbody>
</table>
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
</body>
</html>