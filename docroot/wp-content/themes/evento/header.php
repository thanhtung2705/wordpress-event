<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
	
		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

			<div class="menu fixed">
    <div class="container-fluid">
      <div class="menu__wrap">
        <div class="logo">
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo">
          </a>
        </div>

        <div class="main-menu">
		  	<?php evento_nav('main-menu', 'Main Menu', 'Header Menu'); ?>
        </div>

        <div class="menu-mobile">
          <div class="slicknav_menu">
              <a href="#" class="slicknav_btn">
                <span class="slicknav_menutxt">MENU</span>
                <span class="slicknav_icon">
                  <span class="slicknav_icon-bar">

                  </span><span class="slicknav_icon-bar">

                  </span><span class="slicknav_icon-bar"></span>
                </span>
              </a>

              <ul class="slicknav_nav">
			  	<?php evento_nav('main-menu', 'Main Menu', 'Header Menu'); ?>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


			</header>
			<!-- /header -->
