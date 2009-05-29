<div class="equipamentoMarcas form">
<?php echo $form->create('EquipamentoMarca');?>
	<fieldset>
 		<legend><?php __('Add EquipamentoMarca');?></legend>
	<?php
		echo $form->input('nome');
		echo $form->input('ativo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List EquipamentoMarcas', true), array('action'=>'index'));?></li>
	</ul>
</div>
