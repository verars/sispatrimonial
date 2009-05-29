<div class="acessorios form">
<?php echo $form->create('Acessorio');?>
	<fieldset>
 		<legend><?php __('Add Acessorio');?></legend>
	<?php
		echo $form->input('situacao_id');
		echo $form->input('acessorio_tipo_id');
		echo $form->input('equipamento_id');
		echo $form->input('ativo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Acessorios', true), array('action'=>'index'));?></li>
	</ul>
</div>
