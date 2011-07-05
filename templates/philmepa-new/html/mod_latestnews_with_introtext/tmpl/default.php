<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<ul class="latestnews<?php echo $params->get('moduleclass_sfx'); ?>">
<?php foreach ($list as $item) :  ?>
	<li class="latestnews<?php echo $params->get('moduleclass_sfx'); ?>">
			<div class="news-title"><?php echo $item->text; ?></div>
			<div>
				<?php echo substr($item->introtext, 0, 200) . "..."; ?>
				<a href="<?php echo $item->link; ?>" class="latestnews-link<?php echo $params->get('moduleclass_sfx'); ?>">Read more</a>
			</div>
	</li>
<?php endforeach; ?>
</ul>