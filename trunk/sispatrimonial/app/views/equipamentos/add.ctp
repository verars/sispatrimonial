<div class="equipamentos form">
<?php echo $form->create('Equipamento');?>
	<fieldset>
 		<legend><?php __('Add Equipamento');?></legend>
	<?php
		echo $form->input('marca_id');
		echo $form->input('modelo');
		echo $form->input('nro_bem');
		echo $form->input('permissao_uso');
		echo $form->input('emrpestado');
		echo $form->input('ativo');
		echo $form->input('observacoes');
		echo $form->input('imagem');
		echo $form->input('data_cadastro');
		echo $form->input('defeito');
		echo $form->input('cat_equipamento_id');
		echo $form->input('acessorios_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Equipamentos', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Marcas', true), array('controller'=> 'marcas', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Marca', true), array('controller'=> 'marcas', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Cat Equipamentos', true), array('controller'=> 'cat_equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Cat Equipamento', true), array('controller'=> 'cat_equipamentos', 'action'=>'add')); ?> </li>
		<li><?php echo $html->link(__('List Acessorios', true), array('controller'=> 'acessorios', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Possui Acessorios', true), array('controller'=> 'acessorios', 'action'=>'add')); ?> </li>
	</ul>
</div>
