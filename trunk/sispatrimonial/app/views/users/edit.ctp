<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Editar Usuário');?></legend>
	<?php
		echo $form->input('username', array('label' => 'Matrícula'));
		echo $form->input('password', array('label' => 'Senha'));
		echo $form->input('group_id', array('label' => 'Grupo'));
		echo $form->input('name', array('label' => 'Nome'));
		echo $form->input('rg', array('label' => 'RG'));
		echo $form->input('nascimento', array('label' => 'Data de Nascimento'));
		echo $form->input('telefone', array('label' => 'Telefone Residencial'));
		echo $form->input('celular', array('label' => 'Celular'));
		echo $form->input('endereco', array('label' => 'Endereço'));
		echo $form->input('cep', array('label' => 'CEP'));
		echo $form->input('email', array('label' => 'Email'));
		echo $form->input('email2', array('label' => 'Email 2'));
		echo $form->input('ativo', array('label' => 'Ativo'));
		echo $form->input('aut_email', array('label' => 'Autorizado a receber email'));
	?>
	</fieldset>
<?php echo $form->end('Enviar');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Deletar Usuario', true), array('action'=>'delete', $form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('User.id'))); ?></li>
		<li><?php echo $html->link(__('Listar Usuarios', true), array('action'=>'index'));?></li>
	</ul>
</div>
