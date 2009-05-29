<div class="acessorioTipos form">
<?php echo $form->create('AcessorioTipo');?>
	<fieldset>
 		<legend><?php __('Add AcessorioTipo');?></legend>
	<?php
		echo $form->input('nome');
		echo $form->input('imagem');
		echo $form->input('ativo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List AcessorioTipos', true), array('action'=>'index'));?></li>
	</ul>
</div>
