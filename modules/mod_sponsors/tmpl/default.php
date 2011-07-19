<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<div>
<?php foreach ($list as $item) :  ?>
	<div class="sponsors-list<?php echo $params->get('moduleclass_sfx'); ?>">
		<a href="<?php echo $item->link; ?>" class="sponsors-link<?php echo $params->get('moduleclass_sfx'); ?>">
			<?php echo $item->text; ?></a>
	</div>
<?php endforeach; ?>


</div>
<div id="show-link">
	<a href="index.php?option=com_content&view=category&layout=blog&id=7" class="readon show">+ more</a>
</div>