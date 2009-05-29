<div class="equipamentoTipos view">
<h2><?php  __('EquipamentoTipo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamentoTipo['EquipamentoTipo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamentoTipo['EquipamentoTipo']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamentoTipo['EquipamentoTipo']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamentoTipo['EquipamentoTipo']['tipo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $equipamentoTipo['EquipamentoTipo']['ativo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit EquipamentoTipo', true), array('action'=>'edit', $equipamentoTipo['EquipamentoTipo']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete EquipamentoTipo', true), array('action'=>'delete', $equipamentoTipo['EquipamentoTipo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $equipamentoTipo['EquipamentoTipo']['id'])); ?> </li>
		<li><?php echo $html->link(__('List EquipamentoTipos', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New EquipamentoTipo', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
