<div class="equipamentos form">
<?php echo $form->create('Equipamento');?>
	<fieldset>
 		<legend><?php __('Add Equipamento');?></legend>
	<?php
		echo $form->input('cat_equipamentos_id');
		echo $form->input('patrimonio');
		echo $form->input('nome');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Equipamentos', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Cat Equipamentos', true), array('controller'=> 'cat_equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Cat Equipamentos', true), array('controller'=> 'cat_equipamentos', 'action'=>'add')); ?> </li>
	</ul>
</div>