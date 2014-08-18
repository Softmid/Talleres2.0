<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<meta http-equiv="X-UA-Compatible" content="IE=7">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <base href="<? echo base_url(); ?>"></base>
        <link rel="shortcut icon" href="assets/img/logo.png">
        <link rel="stylesheet" href="assets/css/site/main.css">
        <script src="assets/js/min/main-min.js"></script>
        <script src="assets/js/header-persistent.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<title><?php echo $title ?></title>
		<? echo $_styles ?>
	</head>
	<body>
		<div class="contenedor">
			<div class="header-left"><?php echo $navbar_left ?></div>
			<div class="cont-panel">
				<div class="header-top"><?php echo $navbar_top ?></div>
				<div class="area-panel"><?php echo $content ?></div>
			</div>
		</div>		
		<!--- scripts area -->
		<?php echo $_scripts; ?>
	</body>
</html>