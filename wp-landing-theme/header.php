<!DOCTYPE html>
<html>
<head>
	<title><?php echo wp_get_document_title() ?></title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700i,800,800i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous"> -->
	<?php wp_head(); ?> 
</head>
<body>
	<header>
		<div class="navigation">
			<?php wp_nav_menu(array(
				'theme_location' => 'top',
				'containter' => null,
				'menu_class' => 'nav'
			)); ?>
	</header>
