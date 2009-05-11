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
	<th><?php echo $paginator->sort('marca_id');?></th>
	<th><?php echo $paginator->sort('modelo');?></th>
	<th><?php echo $paginator->sort('nro_bem');?></th>
	<th><?php echo $paginator->sort('permissao_uso');?></th>
	<th><?php echo $paginator->sort('emrpestado');?></th>
	<th><?php echo $paginator->sort('ativo');?></th>
	<th><?php echo $paginator->sort('observacoes');?></th>
	<th><?php echo $paginator->sort('imagem');?></th>
	<th><?php echo $paginator->sort('data_cadastro');?></th>
	<th><?php echo $paginator->sort('defeito');?></th>
	<th><?php echo $paginator->sort('cat_equipamento_id');?></th>
	<th><?php echo $paginator->sort('acessorios_id');?></th>
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
			<?php echo $html->link($equipamento['Marca']['name'], array('controller'=> 'marcas', 'action'=>'view', $equipamento['Marca']['id'])); ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['modelo']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['nro_bem']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['permissao_uso']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['emrpestado']; ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['ativo']; ?>
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
			<?php echo $equipamento['Equipamento']['defeito']; ?>
		</td>
		<td>
			<?php echo $html->link($equipamento['CatEquipamento']['name'], array('controller'=> 'cat_equipamentos', 'action'=>'view', $equipamento['CatEquipamento']['id'])); ?>
		</td>
		<td>
			<?php echo $equipamento['Equipamento']['acessorios_id']; ?>
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
		<li><?php echo $html->link(__('List Marcas', true), array('controller'=> 'marcas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Marca', true), array('controller'=> 'marcas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Cat Equipamentos', true), array('controller'=> 'cat_equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Cat Equipamento', true), array('controller'=> 'cat_equipamentos', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Acessorios', true), array('controller'=> 'acessorios', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Possui Acessorios', true), array('controller'=> 'acessorios', 'action'=>'add')); ?> </li>
	</ul>
</div>
