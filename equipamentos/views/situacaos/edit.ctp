<div class="situacaos form">
<?php echo $form->create('Situacao');?>
	<fieldset>
 		<legend><?php __('Edit Situacao');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('descricao');
		echo $form->input('ativo');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action'=>'delete', $form->value('Situacao.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Situacao.id'))); ?></li>
		<li><?php echo $html->link(__('List Situacaos', true), array('action'=>'index'));?></li>
	</ul>
</div>
