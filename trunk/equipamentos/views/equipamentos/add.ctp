<div class="equipamentos form">
<?php echo $form->create('Equipamento');?>
	<fieldset>
 		<legend><?php __('Add Equipamento');?></legend>
	<?php
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
		<li><?php echo $html->link(__('List Equipamentos', true), array('action'=>'index'));?></li>
	</ul>
</div>
