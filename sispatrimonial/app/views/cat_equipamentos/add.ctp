<div class="catEquipamentos form">
<?php echo $form->create('CatEquipamento');?>
	<fieldset>
 		<legend><?php __('Add CatEquipamento');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('descricao');
		echo $form->input('de_sala');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List CatEquipamentos', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Equipamentos', true), array('controller'=> 'equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Equipamento', true), array('controller'=> 'equipamentos', 'action'=>'add')); ?> </li>
	</ul>
</div>
