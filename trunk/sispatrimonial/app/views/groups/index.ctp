<div class="groups index">
<h2><?php __('Grupos');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('Identificacao','id');?></th>
	<th><?php echo $paginator->sort('Nome','name');?></th>
	<th><?php echo $paginator->sort('Criado em','created');?></th>
	<th class="actions"><?php __('Ações');?></th>
</tr>
<?php
$i = 0;
foreach ($groups as $group):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $group['Group']['id']; ?>
		</td>
		<td>
			<?php echo $group['Group']['name']; ?>
		</td>
		<td>
			<?php echo $group['Group']['created']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('Vizualizar', true), array('action'=>'view', $group['Group']['id'])); ?>
			<?php echo $html->link(__('Editar', true), array('action'=>'edit', $group['Group']['id'])); ?>
			<?php echo $html->link(__('Deletar', true), array('action'=>'delete', $group['Group']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $group['Group']['id'])); ?>
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
		<li><?php echo $html->link(__('Cadastrar Novo Grupo', true), array('action'=>'add')); ?></li>
	</ul>
</div>
