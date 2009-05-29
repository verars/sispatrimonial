<div class="equipamentoMarcas form">
<?php echo $form->create('EquipamentoMarca');?>
	<fieldset>
 		<legend><?php __('Edit EquipamentoMarca');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('nome');
		echo $form->input('ativo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('EquipamentoMarca.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('EquipamentoMarca.id'))); ?></li>
		<li><?php echo $html->link(__('List EquipamentoMarcas', true), array('action'=>'index'));?></li>
	</ul>
</div>
