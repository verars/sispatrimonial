<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Add User');?></legend>
	<?php
		echo $form->input('username');
		echo $form->input('password');
		echo $form->input('group_id');
		echo $form->input('name');
		echo $form->input('rg');
		echo $form->input('nascimento');
		echo $form->input('telefone');
		echo $form->input('celular');
		echo $form->input('endereco');
		echo $form->input('cep');
		echo $form->input('email');
		echo $form->input('email2');
		echo $form->input('ativo');
		echo $form->input('aut_email');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Users', true), array('action'=>'index'));?></li>
	</ul>
</div>
