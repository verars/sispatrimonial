<div class="groups form">
<?php echo $form->create('Group');?>
	<fieldset>
 		<legend><?php __('Adicionar Grupo');?></legend>
	<?php
		echo $form->input('name', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $form->end('Enviar');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Listar Grupos', true), array('action'=>'index'));?></li>
	</ul>
</div>
