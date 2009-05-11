<div class="marcas form">
<?php echo $form->create('Marca');?>
	<fieldset>
 		<legend><?php __('Edit Marca');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Marca.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Marca.id'))); ?></li>
		<li><?php echo $html->link(__('List Marcas', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Equipamentos', true), array('controller'=> 'equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Equipamento', true), array('controller'=> 'equipamentos', 'action'=>'add')); ?> </li>
	</ul>
</div>
