<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mightygraphics</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('images/favicon-03.png') ?>" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('images/favicon-02.png') ?>" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_theme_file_uri('images/favicon-01.png') ?>" sizes="64x64">

</head>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="header-inner mobile-header">
				<div class="logo">
					<a href="/">
						<img src="<?php echo get_theme_file_uri('images/logo.png') ?>" alt="Mightygraphics Logo">
					</a>
				</div>
				<nav class="sidenav" data-state="closed">
					<div class="close-btn nav-close">
						<img src="<?php echo get_theme_file_uri('images/menu_close.svg') ?>" alt="">
					</div>
					<ul>
						<li><a href="/" <?php if(is_page('home')){ echo 'class="active"'; }; ?>>Home</a></li>
						<li><a href="/work" <?php if(is_page('work')){ echo 'class="active"'; }; ?>>Work</a></li>
						<li><a href="/about" <?php if(is_page('about')){ echo 'class="active"'; }; ?>>About</a></li>
						<li><a href="/contact" <?php if(is_page('contact')){ echo 'class="active"'; }; ?>>Contact</a></li>
					</ul>
				</nav>
				<div class="open-btn nav-open">
					<img src="<?php echo get_theme_file_uri('images/menu_open.svg') ?>" alt="Menu Button">
				</div>
			</div>

			<div class="header-inner desktop-header">
				<div class="logo">
					<a href="/">
						<img src="<?php echo get_theme_file_uri('images/logo.png') ?>" alt="Mightygraphics Logo">
					</a>
				</div>
				<nav>
					<ul>
						<li><a href="/" <?php if(is_page('home')){ echo 'class="active"'; }; ?>>Home</a></li>
						<li><a href="/work" <?php if(is_page('work')){ echo 'class="active"'; }; ?>>Work</a></li>
						<li><a href="/about" <?php if(is_page('about')){ echo 'class="active"'; }; ?>>About</a></li>
						<li><a href="/contact" <?php if(is_page('contact')){ echo 'class="active"'; }; ?>>Contact</a></li>
					</ul>
				</nav>
			</div>
			
		</div>