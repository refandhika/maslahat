<!Doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<!-- Style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/dataTables.bootstrap.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/normalize.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>?version=7">
	<!--<link rel="stylesheet" href="assets/css/style-s.css">-->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<!-- Header Bar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#logged-navbar-collapse" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			    </button>
				<a href="<?php echo base_url(); ?>" class="navbar-brand">Maslahat</a>
			</div>
			<div class="collapse navbar-collapse" id="logged-navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="<?php echo base_url('landing/logout'); ?>">Keluar</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container-fluid">