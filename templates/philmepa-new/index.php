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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>TemplateWorld.com Template - Industrial</title>
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/style.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template;?>/css/innerstyle.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <div id="logo_banner">
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
      <p class="banner_head">Libero Tempor Soluta Nobis</p>
      <p class="banner_head1">Itaque earum rerum hic tenetur a sapiente</p>
      <p></p>
      <p>When our power of choice is untrammelled and when nothing prevents our being able to do what we like best. But in certain circumstances and owing to the claims <br />
      of duty or the obligations of business.</p>
      <p></p>
      <div class="search_area">
        <div class="searchname">Industry Search</div>
        <div class="searchbox">
          <label>
          <input name="textfield" type="text" class="search_textbox" />
          </label>
        </div>
        <div class="searchgo">
          <div align="center"><a href="#" class="go">GO</a></div>
        </div>
      </div>
      <br/>
    </div>
  </div>
  <div id="body_area">
    <div class="home-content">
    	<jdoc:include type="component" />
    </div>
    <jdoc:include type="modules" name="take-action-and-sponsors" style="takeActonAndSponsors" headerLevel="5"  />
  </div>
  <?php else :?>
	<div id="main-content">
		<div id="innerbody_area">
			<div class="industries_area">
				<jdoc:include type="modules" name="take-action-and-sponsors" style="takeActonAndSponsors" headerLevel="5"  />  	
			</div>
			<div class="right_textarea">
				<jdoc:include type="component" /> 	
			</div>
		</div>
	</div>
  <?php endif;?>
  <div id="fotter">
    <div class="fotter_links">
      <div align="center"><a href="#" class="fotterlink">home</a>  :  <a href="#" class="fotterlink">history</a>  :  <a href="#" class="fotterlink">services</a>  :  <a href="#" class="fotterlink">news</a>  :  <a href="#" class="fotterlink">sitemap</a>  :  <a href="#" class="fotterlink">contact</a></div>
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
