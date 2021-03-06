<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]> <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]> <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php
// get current menu name
$menu = JSite::getMenu();
if ($menu && $menu->getActive())
    $menu = $menu->getActive()->alias;
else
	$menu = "";

if ($_SERVER['SERVER_PORT'] === 8888 ||
		$_SERVER['SERVER_ADDR'] === '127.0.0.1' ||
		stripos($_SERVER['SERVER_NAME'], 'ccistaging') !== false ||
		stripos($_SERVER['SERVER_NAME'], 'dev') === 0) {

	$testing = true;
	error_reporting(E_ALL);
	ini_set('display_errors', '1');
} else {
	$testing = false;
}

$analytics = "UA-28509530-1"; // FIXME Update to client ID
JHtml::_('behavior.mootools');
?>

<head>
	<meta charset="utf-8" />
	<?= ($testing)? '':  '<meta http-equiv="X-UA-Compatible" contents="IE=edge,chrome=1">' ?>

 	<jdoc:include type="head" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="/templates/<?= $this->template ?>/resources/favicon.ico">
	<link rel="apple-touch-icon" href="/templates/<?= $this->template ?>/resources/apple-touch-icon.png">

	<!-- load css -->
	<?php if ($testing): ?>
		<link rel="stylesheet" href="/templates/<?= $this->template ?>/css/template.css">
	<?php else: ?>
		<link rel="stylesheet" href="/templates/<?= $this->template ?>/css/template.min.css">
	<?php endif; ?>

	<!-- load modernizer, all other at bottom -->
	<script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-1.7-development-only.js"></script>
</head>

<body class="<?= $menu ?>"><div class="inner">

	<div id="wrapper">
		<div id="header">
			<jdoc:include type="modules" name="header" style="xhtml" />
			<div class="clear"></div>
		</div>

		<div id="body"><div><div>
			<div id="menu">
				<jdoc:include type="modules" name="menu" style="xhtml" />
				<div class="clear"></div>
			</div>
	
			<div id="contents">
				<? if ($this->countModules('top')): ?>
					<div id="top" class="gradient">
						<jdoc:include type="modules" name="top" style="xhtml" />
						<div class="clear"></div>
					</div>
				<? endif; ?>
			
				<? if(count(JFactory::getApplication()->getMessageQueue())): ?>
					<div id="messages" class="gradient"><jdoc:include type="message" /></div>
				<? endif; ?>
				
				<div id="component">
					<jdoc:include type="component" />
				</div>
				
				<? if ($this->countModules('bottom')): ?>
					<div id="bottom">
						<jdoc:include type="modules" name="bottom" style="xhtml" />
						<div class="clear"></div>
					</div>
				<? endif; ?>
			</div>
			
			<div id="sidebar">
				<jdoc:include type="modules" name="sidebar" style="rounded" />
				
				<div class="module"><div><div>
					<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fsarnialambtonopenhouses.ca&amp;send=false&amp;layout=standard&amp;width=204&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=35&amp;appId=124096491039103" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:204px; height:45px;" allowTransparency="true"></iframe>
				</div></div></div>
				<div class="clear"></div>
			</div>
			
			<div class="clear"></div>
		</div></div></div>
		
		<div id="copyright">
			<div class="right">Site by <a href="http://ccistudios.com" target="_blank">CCI Studios</a></div>
			<div class="left">&copy; Sarnia Open House <?php echo date('Y') ?>. All Rights Reserved.</div>
			
			<div class="clear"></div>
		</div>
	</div>
	
	<!-- load scripts -->
	<?php if ($testing): ?>
		<script src="/templates/<?= $this->template ?>/js/columns.js"></script>
		<script src="/templates/<?= $this->template ?>/js/dropmenu.js"></script>
		<script src="/templates/<?= $this->template ?>/js/html5.js"></script>
		<script src="/templates/<?= $this->template ?>/js/rollover.js"></script>
	<?php else: ?>
		<script>
			var _gaq=[["_setAccount","<?php echo $analytics?>"],["_trackPageview"]];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
				g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
				s.parentNode.insertBefore(g,s)}(document,"script"));
	  	</script>
		<script src="/templates/<?= $this->template ?>/js/scripts.min.js"></script>
	<?php endif; ?>
</div></body>
</html>
