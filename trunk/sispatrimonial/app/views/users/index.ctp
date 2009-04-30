<div class="users index">
<h2><?php __('Users');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('username');?></th>
	<th><?php echo $paginator->sort('password');?></th>
	<th><?php echo $paginator->sort('group_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('rg');?></th>
	<th><?php echo $paginator->sort('nascimento');?></th>
	<th><?php echo $paginator->sort('telefone');?></th>
	<th><?php echo $paginator->sort('celular');?></th>
	<th><?php echo $paginator->sort('endereco');?></th>
	<th><?php echo $paginator->sort('cep');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('email2');?></th>
	<th><?php echo $paginator->sort('ativo');?></th>
	<th><?php echo $paginator->sort('aut_email');?></th>
	<th class="actions"><?php __('Actions');?></th>
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
			<?php echo $user['User']['username']; ?>
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
			<?php echo $html->link(__('View', true), array('action'=>'view', $user['User']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $user['User']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
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
		<li><?php echo $html->link(__('New User', true), array('action'=>'add')); ?></li>
	</ul>
</div>
