<div class="acessorios index">
<h2><?php __('Acessorios');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('equipamentos_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($acessorios as $acessorio):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $acessorio['Acessorio']['id']; ?>
		</td>
		<td>
			<?php echo $acessorio['Acessorio']['name']; ?>
		</td>
		<td>
			<?php echo $html->link($acessorio['Equipamentos']['id'], array('controller'=> 'equipamentos', 'action'=>'view', $acessorio['Equipamentos']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $acessorio['Acessorio']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $acessorio['Acessorio']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $acessorio['Acessorio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $acessorio['Acessorio']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Acessorio', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Equipamentos', true), array('controller'=> 'equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Equipamentos', true), array('controller'=> 'equipamentos', 'action'=>'add')); ?> </li>
	</ul>
</div>
