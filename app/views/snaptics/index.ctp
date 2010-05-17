<div class="snaptics index">
<h2><?php __('Snaptics');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('snaptic_user_id');?></th>
	<th><?php echo $paginator->sort('body');?></th>
	<th><?php echo $paginator->sort('type');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($snaptics as $snaptic):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $snaptic['Snaptic']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($snaptic['SnapticUser']['id'], array('controller' => 'snaptic_users', 'action' => 'view', $snaptic['SnapticUser']['id'])); ?>
		</td>
		<td>
			<?php echo $snaptic['Snaptic']['body']; ?>
		</td>
		<td>
			<?php echo $snaptic['Snaptic']['type']; ?>
		</td>
		<td>
			<?php echo $snaptic['Snaptic']['created']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $snaptic['Snaptic']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $snaptic['Snaptic']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $snaptic['Snaptic']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $snaptic['Snaptic']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Snaptic', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Snaptic Users', true), array('controller' => 'snaptic_users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Snaptic User', true), array('controller' => 'snaptic_users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Trips', true), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip', true), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>
