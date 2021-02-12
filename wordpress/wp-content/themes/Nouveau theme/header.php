<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Nouveau thème Wordpress</title>
<!-- CSS de Bootstrap -->
<link
href="https=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
rel="stylesheet">
<!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
<link href= "<?php echo get_stylesheet_directory_uri() . "/style.css" ?>"
rel="stylesheet">
<!-- Ajout d'une nouvelle feuille de style qui sera spécifique à nos blogs -->
<link href="<?php bloginfo('template_directory');?>/blog.css" rel="stylesheet">
<!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour les versions plus anciennes que InternetExplorer 9 -->
<! --[if lt IE 9]>
<script src="https://oss.maxcdn.com/htmlshiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
<div class="header">
<div class="container">
<nav id="navigation-principale" role="navigation">
<?php wp_nav_menu( array ('theme_location' => 'menu-principal' ) ); ?>
<div class="submenu"></div>
</nav>
</div>
</div>
<div class="container">
<div class="blog-header">
<h1 class="blog-title"><a class="blog-title-a" href="<?php echo get_bloginfo( 'wpurl' ); ?>"><?php echo
get_bloginfo( 'name' ); ?></a></h1>
<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
</div>