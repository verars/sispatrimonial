<div class="acessorioTipos view">
<h2><?php  __('AcessorioTipo');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $acessorioTipo['AcessorioTipo']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $acessorioTipo['AcessorioTipo']['nome']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Imagem'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $acessorioTipo['AcessorioTipo']['imagem']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ativo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $acessorioTipo['AcessorioTipo']['ativo']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit AcessorioTipo', true), array('action'=>'edit', $acessorioTipo['AcessorioTipo']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete AcessorioTipo', true), array('action'=>'delete', $acessorioTipo['AcessorioTipo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $acessorioTipo['AcessorioTipo']['id'])); ?> </li>
		<li><?php echo $html->link(__('List AcessorioTipos', true), array('action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New AcessorioTipo', true), array('action'=>'add')); ?> </li>
	</ul>
</div>
