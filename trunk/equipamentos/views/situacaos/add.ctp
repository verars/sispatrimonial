<div class="situacaos form">
<?php echo $form->create('Situacao');?>
	<fieldset>
 		<legend><?php __('Add Situacao');?></legend>
	<?php
		echo $form->input('descricao');
		echo $form->input('ativo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Situacaos', true), array('action'=>'index'));?></li>
	</ul>
</div>
