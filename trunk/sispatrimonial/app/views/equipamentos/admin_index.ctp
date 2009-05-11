<div class="equipamentos index">
<h2><?php __('Equipamentos');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('cat_equipamentos_id');?></th>
	<th><?php echo $paginator->sort('patrimonio');?></th>
	<th><?php echo $paginator->sort('nome');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($equipamentos as $equipamento):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $equipamento['Equipamento']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($equipamento['CatEquipamentos']['id'], array('controller'=> 'cat_equipamentos', 'action'=>'view', $equipamento['CatEquipamentos']['id'])); ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['patrimonio']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['nome']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $equipamento['Equipamento']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $equipamento['Equipamento']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $equipamento['Equipamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipamento['Equipamento']['id'])); ?>
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
		<li><?php echo $html->link(__('New Equipamento', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Cat Equipamentos', true), array('controller'=> 'cat_equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Cat Equipamentos', true), array('controller'=> 'cat_equipamentos', 'action'=>'add')); ?> </li>
	</ul>
</div>