<div class="acessorios view">
<h2><?php  __('Acessorio');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $acessorio['Acessorio']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $acessorio['Acessorio']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Equipamentos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($acessorio['Equipamentos']['id'], array('controller'=> 'equipamentos', 'action'=>'view', $acessorio['Equipamentos']['id'])); ?>
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
		<li><?php echo $html->link(__('List Equipamentos', true), array('controller'=> 'equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Equipamentos', true), array('controller'=> 'equipamentos', 'action'=>'add')); ?> </li>
	</ul>
</div>
