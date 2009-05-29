<div class="equipamentos form">
<?php echo $form->create('Equipamento');?>
	<fieldset>
 		<legend><?php __('Edit Equipamento');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('situacao_id');
		echo $form->input('equipamento_tipo_id');
		echo $form->input('equipamento_marca_id');
		echo $form->input('modelo');
		echo $form->input('nro_bem');
		echo $form->input('observacoes');
		echo $form->input('imagem');
		echo $form->input('data_cadastro');
		echo $form->input('ativo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Equipamento.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Equipamento.id'))); ?></li>
		<li><?php echo $html->link(__('List Equipamentos', true), array('action'=>'index'));?></li>
	</ul>
</div>
