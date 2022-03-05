<?php
/* Template name: Player Page */
?>

<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="utf-8">
	<base href="./">
	<title>Urban Space Radio</title>
	<meta content="" name="description">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<meta content="path/to/image.jpg" property="og:image">
	<meta content="#000" name="theme-color">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
</head>
<body>
<header class="headerWrapper playerPage-header">
	<div class="siteWrapper header">
		<div class="header-logo">
			<img alt="USR" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logoLight.svg">
		</div>
	</div>
</header>
<section>
	<div class="playerPage">
		<div class="playerPage-container">
			<div class="jp-jplayer" id="player"></div>
			<div arHia-label="media player" class="jp-audio-stream" id="jp_container_1" role="application">
				<div class="playerPage-container_btn jp-play">
					<div class="play"></div>
					<div class="pause"></div>
				</div>
				<div class="playerPage-container_info activeInfo">
					<div class="js-singer">URBAN SPACE RADIO</div>
					<div class="js-song">СЛУХАЙ УКРАЇНСЬКЕ</div>
					<div class="now">зараз в ефірі</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script
	crossorigin="anonymous"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.jplayer.min.js"
		  type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/player.js" type="text/javascript"></script>
</body>
</html>
