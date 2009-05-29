<div class="acessorios view">
<h2><?php  __('Acessorio');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $acessorio['Acessorio']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Situacao Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $acessorio['Acessorio']['situacao_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Acessorio Tipo Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $acessorio['Acessorio']['acessorio_tipo_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Equipamento Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $acessorio['Acessorio']['equipamento_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $acessorio['Acessorio']['ativo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Acessorio', true), array('action'=>'edit', $acessorio['Acessorio']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Acessorio', true), array('action'=>'delete', $acessorio['Acessorio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $acessorio['Acessorio']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Acessorios', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Acessorio', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
