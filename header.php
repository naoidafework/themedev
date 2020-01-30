<?php
/**
 * Created by PhpStorm.
 * User: Naod
 * Date: 1/1/2020
 * Time: 11:48 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?> /css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url');?> /style.css">
	<script src="<?php bloginfo('template_url');?> /js/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url');?> /js/bootstrap.min.js"></script>
	<?php wp_head();?>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}

    /* Set gray background color and 100% height */
    .sidenav {
	background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
	background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
	.sidenav {
		height: auto;
		padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>
</head>
<body>


<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">WebSiteName</a>
		</div>
		<ul class="nav navbar-nav">
			<?php wp_nav_menu(array(
				'menu'=>'primary',
				'theme_location'=> 'primary',
			));
			?>
		</ul>
	</div>
</nav>

