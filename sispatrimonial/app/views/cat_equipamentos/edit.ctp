<div class="catEquipamentos form">
<?php echo $form->create('CatEquipamento');?>
	<fieldset>
 		<legend><?php __('Edit CatEquipamento');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('name');
		echo $form->input('descricao');
		echo $form->input('de_sala');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('CatEquipamento.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('CatEquipamento.id'))); ?></li>
		<li><?php echo $html->link(__('List CatEquipamentos', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Equipamentos', true), array('controller'=> 'equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Equipamento', true), array('controller'=> 'equipamentos', 'action'=>'add')); ?> </li>
	</ul>
</div>
