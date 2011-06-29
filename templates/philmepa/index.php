<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<jdoc:include type="head" />
		<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/style.css" type="text/css"/>
		<!--[if IE 7]>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/IE7.css" type="text/css"/>
		<![endif]-->
		<!--[if IE 8]>
			<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/IE8.css" type="text/css"/>
		<![endif]-->
	</head>
	<?php 
		$pageview = jRequest::getVar('view', "");
	?>
	<body>
		<div id="main">
			<div id="header">
				<div id="top">
					<div id="header-top">
						<div id="logo">
							<img alt="logo" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/logo_06.png" />
							<div class="logo-name">PHILMEPA</div>
							<div class="logo-slogan">Philippine Marine Environment Protection Association</div>
						</div>
						<div id="header-right">
							<div id="search">
								<jdoc:include type="modules" name="search" />
							</div>
						</div>
					</div>
				</div>
						<?php if($pageview == "frontpage" || $pageview == "contact") :?>
				<div id="bottom">
					<div id="header-bottom">
						<div id="menu">
							<jdoc:include type="modules" name="primary-menu" />
						</div>
						<div id="banner" >
							<jdoc:include type="modules" name="banner" />
							
						</div>
					</div>
				</div>
						<?php endif;?>
			</div>
			<div id="content">
				<div class="container">
					<div class="left">
						<?php if($pageview != "frontpage" && $pageview != "contact") :?>
						<div id="innerpage-menu">
							<jdoc:include type="modules" name="primary-menu" />
						</div>
						<?php endif;?>
						<div id="latest-news">
							<h2>Latest News</h2>
							<jdoc:include type="modules" name="latest-news" />
						</div>
						<div id="sponsor">
							<h2>Sponsors/Affiliation</h2>
							<jdoc:include type="modules" name="sponsor" />
						</div>
					</div>
					<div class="right">
						<div id="main-content">
							<jdoc:include type="component" />
						</div>
					</div>
				</div>
			</div>
			<div id="footer">
				<div id="footer-content">
					<jdoc:include type="modules" name="footer_menu" />
					<div id="copy-rights">&copy;2011 Philippine Marine Environment Protection Association, Inc.</div>
					<div id="power-by">Power by: <a href="www.98labs.com">98Labs Inc.</a></div>
				</div>
			</div>
		</div>
<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://playground.98labs.com/piwik/" : "http://playground.98labs.com/piwik/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://playground.98labs.com/piwik/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->
	</body>
</html>