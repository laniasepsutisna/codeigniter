<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Home | Flat Theme</title>
	<link href="<?php echo base_url() . "assets/"; ?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() . "assets/"; ?>css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() . "assets/"; ?>css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo base_url() . "assets/"; ?>css/animate.css" rel="stylesheet">
	<link href="<?php echo base_url() . "assets/"; ?>css/main.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="<?php echo base_url()."assets/"; ?>js/html5shiv.js"></script>
	<script src="<?php echo base_url()."assets/"; ?>js/respond.min.js"></script>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo base_url() . "assets/"; ?>images/ico/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() . "assets/"; ?>images/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() . "assets/"; ?>images/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() . "assets/"; ?>images/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url() . "assets/"; ?>images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url() . "index.php/web/index"; ?>"><img src="<?php echo base_url() . "assets/"; ?>images/logo.png" alt="logo"></a>
			</div>

			<!--START navigasi-->
			<?php echo $nav; ?>
			<!--END navigasi-->

		</div>
	</header><!--/header-->
