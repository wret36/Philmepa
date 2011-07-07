<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>
<ul>
<?php foreach ($list as $item) :  ?>
	<li class="sponsors-list<?php echo $params->get('moduleclass_sfx'); ?>">
		<a href="<?php echo $item->link; ?>" class="sponsors-link<?php echo $params->get('moduleclass_sfx'); ?>">
			<?php echo $item->text; ?></a>
	</li>
<?php endforeach; ?>


</ul>
<div id="show-link">
	<a href="index.php?option=com_content&view=category&layout=blog&id=7" class="readon show">+ more</a>
</div>