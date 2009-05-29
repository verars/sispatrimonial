<div class="situacaos view">
<h2><?php  __('Situacao');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $situacao['Situacao']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descricao'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $situacao['Situacao']['descricao']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $situacao['Situacao']['ativo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Situacao', true), array('action'=>'edit', $situacao['Situacao']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Situacao', true), array('action'=>'delete', $situacao['Situacao']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $situacao['Situacao']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Situacaos', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Situacao', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
