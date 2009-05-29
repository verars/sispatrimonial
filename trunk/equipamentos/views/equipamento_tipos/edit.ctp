<div class="equipamentoTipos form">
<?php echo $form->create('EquipamentoTipo');?>
	<fieldset>
 		<legend><?php __('Edit EquipamentoTipo');?></legend>
	<?php
		echo $form->input('id');
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
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('EquipamentoTipo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('EquipamentoTipo.id'))); ?></li>
		<li><?php echo $html->link(__('List EquipamentoTipos', true), array('action'=>'index'));?></li>
	</ul>
</div>
