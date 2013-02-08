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

// Returns a reference to the global document object
$doc = JFactory::getDocument();
// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');
// Load core Bootstrap CSS and Bootstrap bugfixes
JHtmlBootstrap::loadCss($includeMaincss = true, $this->direction);
// Load optional template CSS
//$doc->addStyleSheet('templates/'.$this->template.'/css/template.css');
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
			<a class="brand" href="<?php echo $this->baseurl; ?>"><?php echo htmlspecialchars($this->params->get('sitedescription')) ?></a>
			<?php if ($this->countModules('position-1')) : ?>
			<div class="nav-collapse collapse">
				<jdoc:include type="modules" name="position-1" style="none" />
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="container">
	<jdoc:include type="message" />
	<jdoc:include type="component" />
</div>
</body>
</html>