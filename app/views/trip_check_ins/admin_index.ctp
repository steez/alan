<div class="tripCheckIns index">
<h2><?php __('TripCheckIns');?></h2>
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
	<th><?php echo $paginator->sort('trip_id');?></th>
	<th><?php echo $paginator->sort('long');?></th>
	<th><?php echo $paginator->sort('lat');?></th>
	<th><?php echo $paginator->sort('timestamp');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($tripCheckIns as $tripCheckIn):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tripCheckIn['TripCheckIn']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($tripCheckIn['User']['id'], array('controller' => 'users', 'action' => 'view', $tripCheckIn['User']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($tripCheckIn['Trip']['name'], array('controller' => 'trips', 'action' => 'view', $tripCheckIn['Trip']['id'])); ?>
		</td>
		<td>
			<?php echo $tripCheckIn['TripCheckIn']['long']; ?>
		</td>
		<td>
			<?php echo $tripCheckIn['TripCheckIn']['lat']; ?>
		</td>
		<td>
			<?php echo $tripCheckIn['TripCheckIn']['timestamp']; ?>
		</td>
		<td>
			<?php echo $tripCheckIn['TripCheckIn']['created']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $tripCheckIn['TripCheckIn']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $tripCheckIn['TripCheckIn']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $tripCheckIn['TripCheckIn']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tripCheckIn['TripCheckIn']['id'])); ?>
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
		<li><?php echo $html->link(__('New TripCheckIn', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Trips', true), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip', true), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>
