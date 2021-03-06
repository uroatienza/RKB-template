<?php
/**
* @package		ZOOitem Pro
* @author    	ZOOlanders http://www.zoolanders.com
* @copyright 	Copyright (C) JOOlanders SL
* @license   	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
*/


// no direct access
defined('_JEXEC') or die('Restricted access');

// include css
$zoo->document->addStylesheet('mod_zooitempro:tmpl/default/style.css');

// get items
$items = mod_zooitemproHelper::getItems($params);
?>

<?php if (!empty($items)) : ?>

<div style="width:100%; padding: 10px;">
	<?php $i = 1; foreach ($items as $item) : ?>    
	<div class="zoo-itempro-default"><?php echo $renderer->render('item.'.$renderer_layout, compact('item', 'params')); ?></div>
    
    
    <?php if ($i % 2 == 0) : ?>
    <div style="clear:both;"></div>
    <?php endif; ?>
    
    
	<?php $i++; endforeach; ?>
</div>


<?php else : ?>
<?php echo JText::_('MOD_ZOOITEMPRO_NO_ITEMS_FOUND'); ?>
<?php endif; ?>
