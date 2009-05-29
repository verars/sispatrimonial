<div class="equipamentoTipos index">
<h2><?php __('EquipamentoTipos');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('nome');?></th>
	<th><?php echo $paginator->sort('descricao');?></th>
	<th><?php echo $paginator->sort('tipo');?></th>
	<th><?php echo $paginator->sort('ativo');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($equipamentoTipos as $equipamentoTipo):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $equipamentoTipo['EquipamentoTipo']['id']; ?>
		</td>
		<td>
			<?php echo $equipamentoTipo['EquipamentoTipo']['nome']; ?>
		</td>
		<td>
			<?php echo $equipamentoTipo['EquipamentoTipo']['descricao']; ?>
		</td>
		<td>
			<?php echo $equipamentoTipo['EquipamentoTipo']['tipo']; ?>
		</td>
		<td>
			<?php echo $equipamentoTipo['EquipamentoTipo']['ativo']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $equipamentoTipo['EquipamentoTipo']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $equipamentoTipo['EquipamentoTipo']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $equipamentoTipo['EquipamentoTipo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipamentoTipo['EquipamentoTipo']['id'])); ?>
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
		<li><?php echo $html->link(__('New EquipamentoTipo', true), array('action'=>'add')); ?></li>
	</ul>
</div>
