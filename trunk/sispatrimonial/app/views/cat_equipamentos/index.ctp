<div class="catEquipamentos index">
<h2><?php __('CatEquipamentos');?></h2>
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
	<th><?php echo $paginator->sort('descricao');?></th>
	<th><?php echo $paginator->sort('de_sala');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($catEquipamentos as $catEquipamento):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $catEquipamento['CatEquipamento']['id']; ?>
		</td>
		<td>
			<?php echo $catEquipamento['CatEquipamento']['name']; ?>
		</td>
		<td>
			<?php echo $catEquipamento['CatEquipamento']['descricao']; ?>
		</td>
		<td>
			<?php echo $catEquipamento['CatEquipamento']['de_sala']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $catEquipamento['CatEquipamento']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $catEquipamento['CatEquipamento']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $catEquipamento['CatEquipamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $catEquipamento['CatEquipamento']['id'])); ?>
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
		<li><?php echo $html->link(__('New CatEquipamento', true), array('action'=>'add')); ?></li>
		<li><?php echo $html->link(__('List Equipamentos', true), array('controller'=> 'equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Equipamento', true), array('controller'=> 'equipamentos', 'action'=>'add')); ?> </li>
	</ul>
</div>
