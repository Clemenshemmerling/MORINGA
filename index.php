<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>MorinPlus</title>
	<link rel="stylesheet"  href="<?php bloginfo(stylesheet_url) ?>">

</head>
<body>
	<header class="header">
		<h1 class="green-text"><?php bloginfo('name'); ?></h1>
	    <h2 class="green-text"><?php bloginfo('description') ?> </h2>
	</header>
	<ul>
		<li><?php bloginfo('name'); ?></li>
		<li><?php bloginfo('description'); ?></li>
		<li><?php bloginfo('wpurl'); ?></li>
		<li><?php bloginfo('admin_email'); ?></li>
		<li><?php bloginfo('charset'); ?></li>
		<li><?php bloginfo('version'); ?></li>
		<li><?php bloginfo('html_type'); ?></li>
		<li><?php bloginfo('language'); ?></li>
		<li><?php bloginfo('sytlesheet_directory'); ?></li>
		<li><?php bloginfo('sytlesheet_url'); ?></li>
	</ul>
</body>
</html>
