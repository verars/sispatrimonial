<div class="equipamentos view">
<h2><?php  __('Equipamento');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cat Equipamentos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($equipamento['CatEquipamentos']['id'], array('controller'=> 'cat_equipamentos', 'action'=>'view', $equipamento['CatEquipamentos']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Patrimonio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['patrimonio']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamento['Equipamento']['nome']; ?>
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
		<li><?php echo $html->link(__('List Cat Equipamentos', true), array('controller'=> 'cat_equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Cat Equipamentos', true), array('controller'=> 'cat_equipamentos', 'action'=>'add')); ?> </li>
	</ul>
</div>