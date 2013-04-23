<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2013 Lyon. All rights reserved.
 * @license		GNU General Public License version 2 or later, see LICENSE.txt.
 */

//no direct access
defined('_JEXEC') or die;

/* The following line gets the application object for things like displaying the site name. */
$app = JFactory::getApplication();
$menu = $app->getMenu();

// check modules
$showbottom			= ($this->countModules('position-9') or $this->countModules('position-10') or $this->countModules('position-11'));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html 	xmlns="http://www.w3.org/1999/xhtml" 
		xml:lang="<?php echo $this->language; ?>" 
		lang="<?php echo $this->language; ?>" 
		dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link
	href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/bootstrap.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/bootstrap-responsive.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/main.css"
	rel="stylesheet" type="text/css" />

<style type="text/css">
</style>

<script type="text/javascript">

</script>
</head>

<body>
	<!-- navigation bar -->
	<div class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a> <a class="brand" href="<?php echo $this->baseurl; ?>"> <?php echo htmlspecialchars($app->getCfg('sitename')); ?>
				</a>
				<div class="nav-collapse">
					<jdoc:include type="modules" name="position-1" style="container" />
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>

	<!-- /container -->
	<div class="container main">
		<?php if($menu->getActive() == $menu->getDefault()): ?>
		<div id="myCarousel" class="carousel slide">
			<div class="carousel-inner">
				<div class="item">
					<img class="center"
						src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/img/pic1.png"
						alt="">
					<div class="carousel-caption">
						<h4>Kiinalainen Ravintola, Suuri Tang</h4>
						<p>Olemme kiinalainen ravintola, tulla ja nauttia herkullisista kiinalaista ruokaa täällä Lahdessa.</p>
					</div>
				</div>
				<div class="item">
					<img class="center"
						src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/img/pic2.png"
						alt="">
					<div class="carousel-caption">
						<h4>Tilaat, me palvelemme.</h4>
						<p>Lounas, päivällinen astia tai mukaan, se on kaikki valintasi. voimme jopa toimittaa ruokaa suoraan kotiisi.</p>
					</div>
				</div>
				<div class="item active">
					<img class="center"
						src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/img/pic3.png"
						alt="">
					<div class="carousel-caption">
						<h4>Kaunis paikka, herkullista ruokaa.</h4>
						<p>Yhteyttä meidän yhteystiedot sivun alareunassa.</p>
					</div>
				</div>
			</div>
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
		</div>

		<?php else: ?>

		<div>
			<img
				src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/img/intro.jpg"
				alt="intro" class="intro center">
		</div>

		<?php if ($this->countModules('position-2')): ?>
		<div id="breadcrumbs" class="breadcrumb">
			<jdoc:include type="modules" name="position-2" />
		</div>
		<?php endif; ?>

		<?php endif ?>
		
		<jdoc:include type="message" />
		<?php if ($this->countModules('position-12')): ?>
				<div id="top">
					<jdoc:include type="modules" name="position-12" />
				</div>
				<?php endif; ?>

		<div class="row-fluid">
			<?php if($menu->getActive() != $menu->getDefault()): ?>
			<div class="span3">
				<jdoc:include type="modules" name="position-4" />
				<jdoc:include type="modules" name="position-5" />
				<jdoc:include type="modules" name="position-7" />
			</div>
			<div class="span9">
				<jdoc:include type="component" />
			</div>
			<?php else: ?>
			<div class="span12">
				<jdoc:include type="component" />
			</div>
			<?php endif; ?>
		</div>


<!-- 		<hr> -->

		<div id="footer-outer">
			<?php if ($showbottom) : ?>
			<div id="footer-inner">
				<div id="bottom" class="row-fluid footer-cols">
					<div class="span4">
						<jdoc:include type="modules" name="position-9" />
					</div>
					<div class="span4">
						<jdoc:include type="modules" name="position-10" />
					</div>
					<div class="span4">
						<jdoc:include type="modules" name="position-11" />
					</div>
				</div>
			</div>
<!-- 			<hr> -->
			<?php endif ; ?>
			<div id="footer-sub">
				<div id="footer">
					<jdoc:include type="modules" name="position-14" />
					<p>
						Copyright 2012-2013 &#169; <a href="http://www.surritang.com">Suuri Tang</a>. Kaikki oikeudet pidätetään. 
					</p>
				</div>
				<!-- end footer -->
			</div>
		</div>
		<jdoc:include type="modules" name="debug" />
	</div>

	<div class="di"><small> Developer: <a href="http://www.twitter.com/sunly">@sunly</a>.</small></div>
	<!-- back to the top link -->
	<div id="toTop">
		<a href="#main"><i class="icon-arrow-up"></i><br>YLÖS</a>
	</div>


	<!-- 	place javascript on the bottom to faster page loading -->
	<script type="text/javascript"
		src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/jquery-1.9.1.min.js">
	</script>
	<script type="text/javascript"
		src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/jquery.smooth-scroll.min.js">
	</script>
	<script type="text/javascript"
		src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/js/bootstrap.js">
	</script>
	<script type="text/javascript">
		$('.carousel').carousel();
		// hide first
		// $('#toTop').hide();
		document.id('toTop').fade('hide');
        // fade in
        window.addEvent('scroll', function() {
            if (window.getScroll().y > 100) {
                document.id('toTop').fade('in');
            } else {
                document.id('toTop').fade('out');
            }
        });
        // using smoothScroll js library
        $('#toTop a').smoothScroll();
        $('a').smoothScroll({offset: -100});
	</script>
</body>
</html>
