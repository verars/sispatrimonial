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
	<th><?php echo $paginator->sort('situacao_id');?></th>
	<th><?php echo $paginator->sort('equipamento_tipo_id');?></th>
	<th><?php echo $paginator->sort('equipamento_marca_id');?></th>
	<th><?php echo $paginator->sort('modelo');?></th>
	<th><?php echo $paginator->sort('nro_bem');?></th>
	<th><?php echo $paginator->sort('observacoes');?></th>
	<th><?php echo $paginator->sort('imagem');?></th>
	<th><?php echo $paginator->sort('data_cadastro');?></th>
	<th><?php echo $paginator->sort('ativo');?></th>
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
			<?php echo $equipamento['Equipamento']['situacao_id']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['equipamento_tipo_id']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['equipamento_marca_id']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['modelo']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['nro_bem']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['observacoes']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['imagem']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['data_cadastro']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['ativo']; ?>
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
	</ul>
</div>
