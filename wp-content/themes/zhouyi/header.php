<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">
		<title>周依</title>
		<link rel="shortcut icon" href="<?=site_url()?>/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?=site_url()?>/favicon.ico" type="image/x-icon">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div class="header">
			<ul class="nav">
				<li class="logo"><img src="<?= get_template_directory_uri() ?>/images/logo1.gif" ><br />Yi Zhou Studio</li>
				<li class="on">
					<a href="<?= site_url() ?>">
						Biography
						<br />
						简介
					</a>
				</li>
				<li>
					<a href="<?= site_url() ?>/artworks/">
						Artworks
						<br />
						作品
					</a>
				</li>
				<li class="logo"><img src="<?= get_template_directory_uri() ?>/images/logo2.gif" ><br />ShangHai Pyramis Point Ltd</li>
				<li><a href="<?= site_url() ?>/media/">
						Media
						<br />
						媒体</a>
				</li>
				<li class="logo"><img src="<?= get_template_directory_uri() ?>/images/logo3.gif" ><br />
					Moon Prism 
					Digital Entertainment Arts Ltd
				</li>
				<li><a href="<?= site_url() ?>/artist/">
						Artist Line
						<br />
						艺术家系列</a>
				</li>
				<li><a href="<?= site_url() ?>/special">
						Special Projects
						/
						Crossover projects 
						with 
						brand
						<br />
						特殊项目</a>
				</li>
				<li><a href="<?= site_url() ?>/contact">
						Contact
						<br />
						联系</a>
				</li>
				<li class="logo">
					<img src="<?= get_template_directory_uri() ?>/images/logo4.gif" >
				</li>
			</ul>

		</div>
