<div class="acessorios form">
<?php echo $form->create('Acessorio');?>
	<fieldset>
 		<legend><?php __('Add Acessorio');?></legend>
	<?php
		echo $form->input('name');
		echo $form->input('equipamentos_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Acessorios', true), array('action'=>'index'));?></li>
		<li><?php echo $html->link(__('List Equipamentos', true), array('controller'=> 'equipamentos', 'action'=>'index')); ?> </li>
		<li><?php echo $html->link(__('New Equipamentos', true), array('controller'=> 'equipamentos', 'action'=>'add')); ?> </li>
	</ul>
</div>
