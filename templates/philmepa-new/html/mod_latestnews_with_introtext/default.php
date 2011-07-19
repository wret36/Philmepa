<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<!--<ul class="latestnews<?php echo $params->get('moduleclass_sfx'); ?>">-->
<?php foreach ($list as $item) :  ?>
	<!--<li class="latestnews<?php echo $params->get('moduleclass_sfx'); ?>">
			<div class="news-title"><?php echo $item->text; ?></div>
			<div>
				<?php echo substr($item->introtext, 0, 200) . "..."; ?>
				<a href="<?php echo $item->link; ?>" class="latestnews-link<?php echo $params->get('moduleclass_sfx'); ?>">Read more</a>
			</div>
	</li>
-->
<!-- geoff edit display -->
<div class="calendar_area">
    <div class="date">
      <div align="center">
        <p class="date_head"> <?php $date = new DateTime($item->created); echo $date->format(d); ?></p>
        <p><?php echo $date->format(F); ?></p>
      </div>
    </div>
    <div class="date_text">
      <div class="date_head1"><?php echo $item->text; ?></div>
      <div><?= substr($item->introtext, 0, 160) . "..."; ?></div>
	  <a href="<?= $item->link; ?>" class="readon latestnews-link<?= $params->get('moduleclass_sfx'); ?>">+more</a>
    </div>
  </div>
<?php endforeach; ?>
<!--</ul>-->