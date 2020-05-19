<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mightygraphics</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

	<div class="wrapper">
		<div class="header">
			<div class="header-inner mobile-header">
				<div class="logo">
                    <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" alt="Mightygraphics Logo">
				</div>
				<nav class="sidenav" data-state="closed">
					<div class="close-btn nav-close">
						<img src="<?php echo get_theme_file_uri('/images/menu_close.png') ?>" alt="">
					</div>
					<ul>
						<li><a href="/">Home</a></li>
						<li><a href="/portfolio">Work</a></li>
						<li><a href="/about">About</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</nav>
				<div class="open-btn nav-open">
					<img src="<?php echo get_theme_file_uri('/images/menu_open.png') ?>" alt="Menu Button">
				</div>
			</div>

			<div class="header-inner desktop-header">
				<div class="logo">
					<img src="<?php echo get_theme_file_uri('images/logo.png')?>" alt="Mightygraphics Logo">
				</div>
				<nav>
					<ul>
						<li><a href="/" class="active">Home</a></li>
						<li><a href="/portfolio">Work</a></li>
						<li><a href="/about">About</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</nav>
			</div>
			
		</div>