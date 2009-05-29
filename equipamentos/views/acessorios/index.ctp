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
	<th><?php echo $paginator->sort('situacao_id');?></th>
	<th><?php echo $paginator->sort('acessorio_tipo_id');?></th>
	<th><?php echo $paginator->sort('equipamento_id');?></th>
	<th><?php echo $paginator->sort('ativo');?></th>
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
			<?php echo $acessorio['Acessorio']['situacao_id']; ?>
		</td>
		<td>
			<?php echo $acessorio['Acessorio']['acessorio_tipo_id']; ?>
		</td>
		<td>
			<?php echo $acessorio['Acessorio']['equipamento_id']; ?>
		</td>
		<td>
			<?php echo $acessorio['Acessorio']['ativo']; ?>
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
	</ul>
</div>
