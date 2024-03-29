<div class="users index">
<h2><?php __('Usuários');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('Identificação','id');?></th>
	<th><?php echo $paginator->sort('Matrícula','username');?></th>
	<th><?php echo $paginator->sort('Senha','password');?></th>
	<th><?php echo $paginator->sort('Identificação do Grupo','group_id');?></th>
	<th><?php echo $paginator->sort('Criado em','created');?></th>
	<th><?php echo $paginator->sort('Nome','name');?></th>
	<th><?php echo $paginator->sort('RG','rg');?></th>
	<th><?php echo $paginator->sort('Data de Nascimento','nascimento');?></th>
	<th><?php echo $paginator->sort('Telefone','telefone');?></th>
	<th><?php echo $paginator->sort('Celular','celular');?></th>
	<th><?php echo $paginator->sort('Endereço','endereco');?></th>
	<th><?php echo $paginator->sort('CEP','cep');?></th>
	<th><?php echo $paginator->sort('Email','email');?></th>
	<th><?php echo $paginator->sort('Email 2','email2');?></th>
	<th><?php echo $paginator->sort('Ativo','ativo');?></th>
	<th><?php echo $paginator->sort('Autorizado a receber email','aut_email');?></th>
	<th class="actions"><?php __('Ações');?></th>
</tr>
<?php
$i = 0;
foreach ($users as $user):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $user['User']['id']; ?>
		</td>
		<td>
			<?php echo $user['User']['username'] ; ?>
		</td>
		<td>
			<?php echo $user['User']['password']; ?>
		</td>
		<td>
			<?php echo $user['User']['group_id']; ?>
		</td>
		<td>
			<?php echo $user['User']['created']; ?>
		</td>
		<td>
			<?php echo $user['User']['name']; ?>
		</td>
		<td>
			<?php echo $user['User']['rg']; ?>
		</td>
		<td>
			<?php echo $user['User']['nascimento']; ?>
		</td>
		<td>
			<?php echo $user['User']['telefone']; ?>
		</td>
		<td>
			<?php echo $user['User']['celular']; ?>
		</td>
		<td>
			<?php echo $user['User']['endereco']; ?>
		</td>
		<td>
			<?php echo $user['User']['cep']; ?>
		</td>
		<td>
			<?php echo $user['User']['email']; ?>
		</td>
		<td>
			<?php echo $user['User']['email2']; ?>
		</td>
		<td>
			<?php echo $user['User']['ativo']; ?>
		</td>
		<td>
			<?php echo $user['User']['aut_email']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Vizualizar', true), array('action'=>'view', $user['User']['id'])); ?>
			<?php echo $html->link(__('Editar', true), array('action'=>'edit', $user['User']['id'])); ?>
			<?php echo $html->link(__('Deletar', true), array('action'=>'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Cadastrar Novo Usuario', true), array('action'=>'add')); ?></li>
	</ul>
</div>
