<div class="equipamentoMarcas view">
<h2><?php  __('EquipamentoMarca');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamentoMarca['EquipamentoMarca']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamentoMarca['EquipamentoMarca']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamentoMarca['EquipamentoMarca']['ativo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit EquipamentoMarca', true), array('action'=>'edit', $equipamentoMarca['EquipamentoMarca']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete EquipamentoMarca', true), array('action'=>'delete', $equipamentoMarca['EquipamentoMarca']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipamentoMarca['EquipamentoMarca']['id'])); ?> </li>
		<li><?php echo $html->link(__('List EquipamentoMarcas', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New EquipamentoMarca', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
