<?php require_once $config['init']; ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>404 - Sayfa Bulunamadı</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?=base_url('')?>/not_found.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>
<body>
	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<h1>Oops!</h1>
				<h2>404 - Sayfa bulunamadı!</h2>
			</div>
			<?php if (isset($_SESSION['admin_session_control']) == true) { ?>
				<a href="<?=base_url('panel/admin')?>">Anasayfa'ya dön</a>
			<?php } else if (isset($_SESSION['supporter_session_control']) == true || isset($_SESSION['customer_session_control']) == true) { ?>
				<a href="<?=base_url('panel/supporter')?>">Anasayfa'ya dön</a>
			<?php } else { ?>
				<a href="<?=base_url('')?>">Anasayfa'ya dön</a>
			<?php } ?>
		</div>
	</div>
</body>
</html>
