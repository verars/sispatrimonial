<div class="equipamentoTipos form">
<?php echo $form->create('EquipamentoTipo');?>
	<fieldset>
 		<legend><?php __('Add EquipamentoTipo');?></legend>
	<?php
		echo $form->input('nome');
		echo $form->input('descricao');
		echo $form->input('tipo');
		echo $form->input('ativo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List EquipamentoTipos', true), array('action'=>'index'));?></li>
	</ul>
</div>
