<?php $templates = $this->baseurl . "/templates/philmepa-new"; ?>
<?php 
	$pageoption = JRequest::getVar('option', '');
	$pageview = JRequest::getVar('view', '');
	$pageitemid = JRequest::getVar('Itemid', '');
	$pageid = JRequest::getVar('id', '');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<jdoc:include type="head" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TemplateWorld.com Template - Industrial</title>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body <?= $pageview == "frontpage" ? "" : "class='inner-page'" ?>>
 <div id="logo_banner">
 	<div id="logo_container">
 		<img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/images/logo.png" alt="" />
 	</div>
   <div class="menu_area">
	 <jdoc:include type="modules" name="primary-menu" />
   </div>
  </div>
	<div id="calendar">
		<jdoc:include type="modules" name="latest-news" />
	</div>
	<?php if($pageview == "frontpage") :?>
  <div id="banner">
    <div class="banner_textarea"> 
	    <p class="banner_head">Protection of the Marine Environment</p>
	    <p class="banner_head1">Click <a href="/index.php?option=com_content&amp;view=article&amp;id=4:take-action-ways-you-can-help&amp;catid=12:take-action-and-maritime-environment">here</a> or <a href="/index.php?option=com_contact&amp;view=contact&amp;id=1&amp;Itemid=8">contact us</a> for more details!</p>
	    <p></p>
	    <p>When our power of choice is untrammelled and when nothing prevents our being able to do what we like best. But in certain circumstances and owing to the claims <br />
	    of duty or the obligations to our environment and society.
		</p>
      <p></p>
		<div class="search_area">
			<jdoc:include type="modules" name="search" />
		</div>
      <br/>
    </div>
  </div>
	<div id="body-container">
		<div id="body_area">
			<div class="home-content">
				<jdoc:include type="component" />
			</div>
			<jdoc:include type="modules" name="take-action-and-sponsors" style="takeActionAndMaritimeEnvironment"/>
			<jdoc:include type="modules" name="sponsor" style="Sponsors"/>  
		</div>
	</div>
  <?php else :?>
	<div id="main-content">
		<div id="innerbody_area">
			<div class="industries_area">
				<jdoc:include type="modules" name="take-action-and-sponsors" style="takeActionAndMaritimeEnvironment"/>
				<jdoc:include type="modules" name="sponsor" style="Sponsors"/>  	
			</div>
			<div class="right_textarea">
				<jdoc:include type="component" /> 	
			</div>
		</div>
	</div>
  <?php endif;?>
  <div id="fotter">
    <div class="fotter_links">
      <jdoc:include type="modules" name="footer" />
    </div>
    <div class="fotter_copyrights">
      <div align="center">&copy; Copyright Information Goes Here. All Rights Reserved.</div>
    </div>
    <div class="fotter_validation">
      <div align="center"><a href="http://validator.w3.org/check?uri=referer" target="_blank" class="xhtml">XHTML</a> <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank" class="css">CSS</a><br />
      </div>
    </div>
  </div>

</body>
</html>
