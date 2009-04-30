<div class="groups form">
<?php echo $form->create('Group');?>
	<fieldset>
 		<legend><?php __('Editar Grupo');?></legend>
	<?php
		echo $form->input('id', array('label' => 'Identificação'));
		echo $form->input('name', array('label' => 'Nome'));
	?>
	</fieldset>
<?php echo $form->end('Enviar');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Deletar', true), array('action'=>'delete', $form->value('Group.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Group.id'))); ?></li>
		<li><?php echo $html->link(__('Listar Grupos', true), array('action'=>'index'));?></li>
	</ul>
</div>
