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

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html dir="<?php echo $this->direction; ?>"
	version="-//W3C//DTD HTML 4.01 Transitional//EN"
	lang="<?php echo $this->language; ?>">
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
						src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/img/sample6.png"
						alt="">
					<div class="carousel-caption">
						<h4>First Thumbnail label</h4>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
							Donec id elit non mi porta gravida at eget metus. Nullam id dolor
							id nibh ultricies vehicula ut id elit.</p>
					</div>
				</div>
				<div class="item">
					<img class="center"
						src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/img/sample7.png"
						alt="">
					<div class="carousel-caption">
						<h4>Second Thumbnail label</h4>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
							Donec id elit non mi porta gravida at eget metus. Nullam id dolor
							id nibh ultricies vehicula ut id elit.</p>
					</div>
				</div>
				<div class="item active">
					<img class="center"
						src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/img/sample8.png"
						alt="">
					<div class="carousel-caption">
						<h4>Third Thumbnail label</h4>
						<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.
							Donec id elit non mi porta gravida at eget metus. Nullam id dolor
							id nibh ultricies vehicula ut id elit.</p>
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

		<div class="row-fluid">
			<?php if($menu->getActive() != $menu->getDefault()): ?>
			<div class="span3">
				<jdoc:include type="modules" name="position-7" />
				<jdoc:include type="modules" name="position-4" />
				<jdoc:include type="modules" name="position-5" />
			</div>
			<div class="span9">
				<?php if ($this->countModules('position-12')): ?>
				<div id="top">
					<jdoc:include type="modules" name="position-12" />
				</div>
				<?php endif; ?>
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
						<?php echo JText::_('TPL_BSD4J2_POWERED_BY');?>
						<a href="http://www.joomla.org/">Joomla!&#174;</a>
					</p>
				</div>
				<!-- end footer -->
			</div>
		</div>
		<jdoc:include type="modules" name="debug" />
	</div>

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
