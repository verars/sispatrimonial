<div class="catEquipamentos view">
<h2><?php  __('CatEquipamento');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $catEquipamento['CatEquipamento']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $catEquipamento['CatEquipamento']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $catEquipamento['CatEquipamento']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('De Sala'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $catEquipamento['CatEquipamento']['de_sala']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit CatEquipamento', true), array('action'=>'edit', $catEquipamento['CatEquipamento']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete CatEquipamento', true), array('action'=>'delete', $catEquipamento['CatEquipamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $catEquipamento['CatEquipamento']['id'])); ?> </li>
		<li><?php echo $html->link(__('List CatEquipamentos', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New CatEquipamento', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Equipamentos', true), array('controller'=> 'equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Equipamento', true), array('controller'=> 'equipamentos', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Equipamentos');?></h3>
	<?php if (!empty($catEquipamento['Equipamento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Marca Id'); ?></th>
		<th><?php __('Modelo'); ?></th>
		<th><?php __('Nro Bem'); ?></th>
		<th><?php __('Permissao Uso'); ?></th>
		<th><?php __('Emrpestado'); ?></th>
		<th><?php __('Ativo'); ?></th>
		<th><?php __('Observacoes'); ?></th>
		<th><?php __('Imagem'); ?></th>
		<th><?php __('Data Cadastro'); ?></th>
		<th><?php __('Defeito'); ?></th>
		<th><?php __('Cat Equipamento Id'); ?></th>
		<th><?php __('Acessorios Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($catEquipamento['Equipamento'] as $equipamento):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $equipamento['id'];?></td>
			<td><?php echo $equipamento['marca_id'];?></td>
			<td><?php echo $equipamento['modelo'];?></td>
			<td><?php echo $equipamento['nro_bem'];?></td>
			<td><?php echo $equipamento['permissao_uso'];?></td>
			<td><?php echo $equipamento['emrpestado'];?></td>
			<td><?php echo $equipamento['ativo'];?></td>
			<td><?php echo $equipamento['observacoes'];?></td>
			<td><?php echo $equipamento['imagem'];?></td>
			<td><?php echo $equipamento['data_cadastro'];?></td>
			<td><?php echo $equipamento['defeito'];?></td>
			<td><?php echo $equipamento['cat_equipamento_id'];?></td>
			<td><?php echo $equipamento['acessorios_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'equipamentos', 'action'=>'view', $equipamento['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'equipamentos', 'action'=>'edit', $equipamento['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'equipamentos', 'action'=>'delete', $equipamento['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipamento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Equipamento', true), array('controller'=> 'equipamentos', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
