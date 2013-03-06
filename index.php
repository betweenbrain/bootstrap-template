<?php defined('_JEXEC') or die;

/**
 * File       index.php
 * Created    2/8/13 2:32 PM
 * Author     Matt Thomas
 * Website    http://betweenbrain.com
 * Email      matt@betweenbrain.com
 * Support    https://github.com/betweenbrain/bootstrap-template/issues
 * Copyright  Copyright (C) 2013 betweenbrain llc. All Rights Reserved.
 * License    GNU GPL v3 or later
 */

// Optional: load Twitter Bootstrap Javascript Framework
// http://docs.joomla.org/Javascript_Frameworks#Twitter_Bootstrap_Javascript_Framework
JHtml::_('bootstrap.framework');
// Load core Bootstrap CSS and Bootstrap bug fixes from /media/jui/css/ (bootstrap.min.css, bootstrap-responsive.min.css, bootstrap-extended.css)
// https://github.com/joomla/joomla-cms/blob/master/libraries/cms/html/bootstrap.php#L611
JHtmlBootstrap::loadCss(TRUE, $this->direction);
// Returns a reference to the application object
$app = JFactory::getApplication();
// Returns a reference to the global document object
$doc = JFactory::getDocument();
// Load optional template CSS
$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
?>
<!DOCTYPE html>
<head>
<jdoc:include type="head" />
</head>
<!--[if lt IE 9]>
	<script src="<?php echo $this->baseurl ?>/media/jui/js/html5.js"></script>
<![endif]-->
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="brand" href="<?php echo $this->baseurl; ?>"><?php echo htmlspecialchars($app->getCfg('sitename')) ?></a>
			<?php if ($this->countModules('position-1')) : ?>
			<div class="nav-collapse collapse">
				<jdoc:include type="modules" name="position-1" />
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="container">
	<div class="span8">
		<jdoc:include type="modules" name="position-3" />
		<jdoc:include type="message" />
		<jdoc:include type="component" />
	</div>
	<div class="span3">
		<jdoc:include type="modules" name="position-7" style="xhtml" />
	</div>
</div>

</body>
</html>