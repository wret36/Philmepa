<?php
/*
// "DS Banner Slider" Module for Joomla! 1.5.x - Version 0.4.1b
// License: http://www.gnu.org/copyleft/gpl.html
// Author: Vincent Chan - DesignerSandbox
// Demo - http://joomla.designersandbox.com/vc-busuit/index.php?option=com_content&view=article&id=46&Itemid=54
// Support - http://www.designersandbox.com/joomla/joomla-ds-banner-slider-free-banner-module-by-ds/
*/

/** ensure this file is being included by a parent file */
//defined( '_VALID_MOS' ) or die( 'Direct Access to this location is not allowed.' );
defined( '_JEXEC' ) or die( 'Restricted access' );
global $mosConfig_offset, $mosConfig_live_site, $mosConfig_locale, $mainframe;


$uniqueid 		= trim( $params->get( 'uniqueid' ) );
$catids         = $params->get('catids');
$ordering       = trim($params->get( 'ordering', '0'));
$width 			= intval($params->get( 'width', 950 ) );
$elementsInPage = intval($params->get( 'elementsInPage', 1 ) );
$elementMargin	= intval($params->get( 'elementMargin', 0 ) );
$shadow 		= trim( $params->get( 'shadow', 'No' ) );
$height 		= trim( $params->get( 'height', 'auto' ) );
$controls 		= trim( $params->get( 'controls', 'controls' ) );
$controlfloat	= trim($params->get( 'controlfloat', 'left' ) );
$slideTimer 	= intval( $params->get( 'slideTimer', 600 ) );
$autoscroll 	= trim( $params->get( 'autoscroll', 'No' ) );
$scrollTimer 	= intval($params->get( 'scrollTimer', 6000 ) );
$target 		= trim( $params->get( 'target' ) );
$banner_links 	= trim( $params->get( 'banner_links' ) );

$deshide		= trim( $params->get( 'deshide' ) );
$descolor		= trim($params->get( 'descolor', '#FFFFFF' ) );
$dessize		= trim($params->get( 'dessize', '180%' ) );
$destoppad		= intval($params->get( 'destoppad', '60' ) );
$desbotpad		= intval($params->get( 'destoppad', '60' ) );
$desrigpad		= intval($params->get( 'destoppad', '60' ) );
$deslefpad		= intval($params->get( 'destoppad', '60' ) );
$desalign		= trim($params->get( 'desalign', 'left' ) );
$desinnerwidth	= intval($params->get( 'desinnerwidth', '100' ) );

$controls_hide	= trim( $params->get( 'controls_hide' ) );
$opacity        = intval($params->get( 'opacity', 100 ) );
$first_last 	= trim( $params->get( 'first_last' ) );
$prev_next 		= trim( $params->get( 'prev_next' ) );
$pageIndex 		= trim( $params->get( 'pageIndex' ) );
$start_stop 	= trim( $params->get( 'start_stop' ) );

$clientids = $params->get( 'banner_cids', '' );
$limitlist = $params->get( 'banner_limit', '' );

$where     = '';
$limit     = '';
$banner = null;

if ( $clientids != '' ) {
    $where = "\n AND cid IN ( ".(is_array($clientids) ? implode(',', $clientids) : $clientids)." )";
}
if ( $limitlist != '' ) {
    $limit = "\n LIMIT $limitlist";
}
if ($catids) {
    if( is_array( $catids ) ) {
        $where .= "\n AND catid IN ( ".implode( ',', $catids )." )";
    } else {
        $where .= "\n AND catid = ".$catids." ";
    }
}
if ('random' == $ordering) {
    $order = "\n ORDER BY RAND()";
} else {
    $order = "\n ORDER BY ordering";
}
$query = "SELECT *"
. "\n FROM #__banner"
. "\n WHERE showBanner=1 "
. $where
. $order
. $limit
;

$db =& JFactory::getDBO();
$db->setQuery( $query );
$banners = $db->loadObjectList();

?>
<?php
$uniqueid = "dsbs_".$uniqueid;
?>
<!-- "DS Banner Slide Rotator" Module (v0.4.1b) start here -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="modules/mod_ds_banner_slide/mod_ds_banner_slide/mbScrollable.js"></script>
<script type="text/javascript">
	jQuery.noConflict();
	jQuery(document).ready(function() {
        jQuery("#<?php echo $uniqueid; ?>").mbScrollable({
            width: <?php echo $width; ?>,
            elementsInPage: <?php echo $elementsInPage; ?>,
            elementMargin: <?php echo $elementMargin; ?>,
            height: <?php echo ('auto' == $height ? '"auto"' : $height); ?>,
            controls: "#<?php echo $uniqueid; ?><?php echo $controls; ?>",
            slideTimer: <?php echo $slideTimer; ?>,
            autoscroll: <?php echo ('Yes' == $autoscroll ? 'true' : 'false'); ?>,
            scrollTimer: <?php echo $scrollTimer; ?>
        });
    });
</script>

<?php
    $document = & JFactory::getDocument();
    $document->addCustomTag('
	<style type="text/css">
	<!--
	#'.$uniqueid.'horizontal{height: '.$height.'px; width: '.$width.'px; *overflow:hidden; overflow:hidden;}
	#'.$uniqueid.' span.description {width: '.($width - $desrigpad - $deslefpad).'px;}
	#'.$uniqueid.' img {border:0;}
	#'.$uniqueid.' .description {'.$deshide.' position: absolute;font-family:sans-serif;font-size:'.$dessize.'; color:'.$descolor.';padding:'.$destoppad.'px '.$desrigpad.'px '.$desbotpad.'px '.$deslefpad.'px;text-align:'.$desalign.';width:'.$desinnerwidth.'%;}
	#'.$uniqueid.' .scrollEl {}
	#'.$uniqueid.$controls.' {position:relative; padding:0 10px; margin-top:-40px; '.$controls_hide.' text-align:'.$controlfloat.';}
	#'.$uniqueid.$controls.' div {font-family:sans-serif;margin-top:5px;background:#fff;display:inline-block;padding:6px;cursor:pointer; zoom: 1; *display:inline; filter:alpha(opacity='.$opacity.'); -moz-opacity:'.($opacity / 100).';-khtml-opacity: '.($opacity / 100).';opacity: '.($opacity / 100).';}
	#'.$uniqueid.$controls.' .sel {color:black !important;font-weight:bold;}
	#'.$uniqueid.$controls.' .disabled {color:gray;}
	#'.$uniqueid.$controls.' .page {padding:5px;color:gray;}
	-->
	</style>
    ');
?>
<div id="<?php echo $uniqueid; ?>horizontal" class="bannerslider<?php echo $params->get( 'moduleclass_sfx' ) ?>">
    <div id="<?php echo $uniqueid; ?>">
<?php

foreach ($banners AS $banner){
    if (empty($banner->imageurl)) {
        $imageurl = "modules/mod_ds_banner_slide/images/blank.gif";
    } else {
        $imageurl = "images/banners/".$banner->imageurl;
    }
    $link            = JRoute::_( 'index.php?option=com_banners&task=click&bid='. $banner->bid );
    $banner_text     = $banner->description;
    echo '<div class="scrollEl">';

    if ( $banner_links != 'No' ) {
        echo '<a href="'. $banner->clickurl .'" target="'. $target .'">';
    }
    echo '<span class="description'.(empty($banner->imageurl) ? '_noimage' : '').'">'.$banner_text.'</span>';
    echo '<img src="'. $imageurl .'" width="'.$width.'" height="'.$height.'" border="0" alt=""/>';
    if ( $banner_links != 'No' ) {
        echo '</a>';
    }
    echo '</div>';
    echo "\n";
}
?>
    </div>


    <div id="<?php echo $uniqueid; ?><?php echo $controls; ?>">
		<?php if ( $first_last != 'No' ) {echo '<div class="first">first</div>'; } ?>&nbsp;<?php if ( $prev_next != 'No' ) {echo '<div class="prev">prev</div><div class="next">next</div>'; } ?>&nbsp;<?php if ( $first_last != 'No' ) {echo '<div class="last">last</div>'; } ?>&nbsp;<?php if ( $pageIndex != 'No' ) {echo '<div class="pageIndex"></div>'; } ?>&nbsp;<?php if ( $start_stop != 'No' ) {echo '<div class="start">start</div><div class="stop">stop</div>'; } ?>
    </div>
</div>
<!-- "DS Banner Slide Rotator" Module (v0.4.1b) ends here -->