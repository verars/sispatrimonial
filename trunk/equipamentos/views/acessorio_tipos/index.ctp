<div class="acessorioTipos index">
<h2><?php __('AcessorioTipos');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('nome');?></th>
	<th><?php echo $paginator->sort('imagem');?></th>
	<th><?php echo $paginator->sort('ativo');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($acessorioTipos as $acessorioTipo):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $acessorioTipo['AcessorioTipo']['id']; ?>
		</td>
		<td>
			<?php echo $acessorioTipo['AcessorioTipo']['nome']; ?>
		</td>
		<td>
			<?php echo $acessorioTipo['AcessorioTipo']['imagem']; ?>
		</td>
		<td>
			<?php echo $acessorioTipo['AcessorioTipo']['ativo']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $acessorioTipo['AcessorioTipo']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action'=>'edit', $acessorioTipo['AcessorioTipo']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action'=>'delete', $acessorioTipo['AcessorioTipo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $acessorioTipo['AcessorioTipo']['id'])); ?>
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
		<li><?php echo $html->link(__('New AcessorioTipo', true), array('action'=>'add')); ?></li>
	</ul>
</div>
