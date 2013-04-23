<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />

<?php if ($this->direction == 'rtl') : ?>
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template_rtl.css" type="text/css" />
<?php endif; ?>

<link
	href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/bootstrap.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/bootstrap-responsive.css"
	rel="stylesheet" type="text/css" />
<link
	href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template;?>/css/main.css"
	rel="stylesheet" type="text/css" />
</head>
<body class="contentpane">
<div class="container main">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
	</div>
</body>
</html>
