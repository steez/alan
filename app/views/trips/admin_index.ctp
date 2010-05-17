<div class="trips index">
<h2><?php __('Trips');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('snaptic_id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
	<th><?php echo $paginator->sort('comment');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($trips as $trip):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $trip['Trip']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($trip['User']['id'], array('controller' => 'users', 'action' => 'view', $trip['User']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($trip['Snaptic']['id'], array('controller' => 'snaptics', 'action' => 'view', $trip['Snaptic']['id'])); ?>
		</td>
		<td>
			<?php echo $trip['Trip']['name']; ?>
		</td>
		<td>
			<?php echo $trip['Trip']['comment']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $trip['Trip']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $trip['Trip']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $trip['Trip']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trip['Trip']['id'])); ?>
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
		<li><?php echo $html->link(__('New Trip', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Snaptics', true), array('controller' => 'snaptics', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Snaptic', true), array('controller' => 'snaptics', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Trip Check Ins', true), array('controller' => 'trip_check_ins', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip Check In', true), array('controller' => 'trip_check_ins', 'action' => 'add')); ?> </li>
	</ul>
</div>
