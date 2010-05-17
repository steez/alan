<div class="trips view">
<h2><?php  __('Trip');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $trip['Trip']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($trip['User']['id'], array('controller' => 'users', 'action' => 'view', $trip['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Snaptic'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($trip['Snaptic']['id'], array('controller' => 'snaptics', 'action' => 'view', $trip['Snaptic']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $trip['Trip']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $trip['Trip']['comment']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Trip', true), array('action' => 'edit', $trip['Trip']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Trip', true), array('action' => 'delete', $trip['Trip']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trip['Trip']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Trips', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Snaptics', true), array('controller' => 'snaptics', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Snaptic', true), array('controller' => 'snaptics', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Trip Check Ins', true), array('controller' => 'trip_check_ins', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip Check In', true), array('controller' => 'trip_check_ins', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php  __('Related Trip Check Ins');?></h3>
	<?php if (!empty($trip['TripCheckIn'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $trip['TripCheckIn']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $trip['TripCheckIn']['user_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Trip Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $trip['TripCheckIn']['trip_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Long');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $trip['TripCheckIn']['long'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lat');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $trip['TripCheckIn']['lat'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Timestamp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $trip['TripCheckIn']['timestamp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $trip['TripCheckIn']['created'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Trip Check In', true), array('controller' => 'trip_check_ins', 'action' => 'edit', $trip['TripCheckIn']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php __('Related Trip Check Ins');?></h3>
	<?php if (!empty($trip['TripCheckIn'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Trip Id'); ?></th>
		<th><?php __('Long'); ?></th>
		<th><?php __('Lat'); ?></th>
		<th><?php __('Timestamp'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($trip['TripCheckIn'] as $tripCheckIn):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tripCheckIn['id'];?></td>
			<td><?php echo $tripCheckIn['user_id'];?></td>
			<td><?php echo $tripCheckIn['trip_id'];?></td>
			<td><?php echo $tripCheckIn['long'];?></td>
			<td><?php echo $tripCheckIn['lat'];?></td>
			<td><?php echo $tripCheckIn['timestamp'];?></td>
			<td><?php echo $tripCheckIn['created'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'trip_check_ins', 'action' => 'view', $tripCheckIn['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'trip_check_ins', 'action' => 'edit', $tripCheckIn['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'trip_check_ins', 'action' => 'delete', $tripCheckIn['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tripCheckIn['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Trip Check In', true), array('controller' => 'trip_check_ins', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
