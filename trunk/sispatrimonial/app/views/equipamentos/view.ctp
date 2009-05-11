<div class="equipamentos view">
<h2><?php  __('Equipamento');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Marca'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($equipamento['Marca']['name'], array('controller'=> 'marcas', 'action'=>'view', $equipamento['Marca']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modelo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['modelo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nro Bem'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['nro_bem']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Permissao Uso'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['permissao_uso']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Emrpestado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['emrpestado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['ativo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observacoes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['observacoes']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imagem'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['imagem']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Data Cadastro'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['data_cadastro']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Defeito'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['defeito']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cat Equipamento'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($equipamento['CatEquipamento']['name'], array('controller'=> 'cat_equipamentos', 'action'=>'view', $equipamento['CatEquipamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Acessorios Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['acessorios_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Equipamento', true), array('action'=>'edit', $equipamento['Equipamento']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Equipamento', true), array('action'=>'delete', $equipamento['Equipamento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipamento['Equipamento']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Equipamentos', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Equipamento', true), array('action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Marcas', true), array('controller'=> 'marcas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Marca', true), array('controller'=> 'marcas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Cat Equipamentos', true), array('controller'=> 'cat_equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Cat Equipamento', true), array('controller'=> 'cat_equipamentos', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Acessorios', true), array('controller'=> 'acessorios', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Possui Acessorios', true), array('controller'=> 'acessorios', 'action'=>'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Acessorios');?></h3>
	<?php if (!empty($equipamento['possui acessorios'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Equipamentos Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($equipamento['possui acessorios'] as $possuiAcessorios):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $possuiAcessorios['id'];?></td>
			<td><?php echo $possuiAcessorios['name'];?></td>
			<td><?php echo $possuiAcessorios['equipamentos_id'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'acessorios', 'action'=>'view', $possuiAcessorios['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller'=> 'acessorios', 'action'=>'edit', $possuiAcessorios['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller'=> 'acessorios', 'action'=>'delete', $possuiAcessorios['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $possuiAcessorios['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Possui Acessorios', true), array('controller'=> 'acessorios', 'action'=>'add'));?> </li>
		</ul>
	</div>
</div>
