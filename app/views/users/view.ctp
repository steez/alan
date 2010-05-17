<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Uid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['uid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Snaptic User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($user['SnapticUser']['id'], array('controller' => 'snaptic_users', 'action' => 'view', $user['SnapticUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Snaptic Users', true), array('controller' => 'snaptic_users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Snaptic User', true), array('controller' => 'snaptic_users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Trip Check Ins', true), array('controller' => 'trip_check_ins', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip Check In', true), array('controller' => 'trip_check_ins', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Trips', true), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip', true), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php  __('Related Trip Check Ins');?></h3>
	<?php if (!empty($user['TripCheckIn'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['TripCheckIn']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['TripCheckIn']['user_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Trip Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['TripCheckIn']['trip_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Long');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['TripCheckIn']['long'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lat');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['TripCheckIn']['lat'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Timestamp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['TripCheckIn']['timestamp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['TripCheckIn']['created'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Trip Check In', true), array('controller' => 'trip_check_ins', 'action' => 'edit', $user['TripCheckIn']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php  __('Related Trips');?></h3>
	<?php if (!empty($user['Trip'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Trip']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Trip']['user_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Snaptic Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Trip']['snaptic_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Trip']['name'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $user['Trip']['comment'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Trip', true), array('controller' => 'trips', 'action' => 'edit', $user['Trip']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php __('Related Trip Check Ins');?></h3>
	<?php if (!empty($user['TripCheckIn'])):?>
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
		foreach ($user['TripCheckIn'] as $tripCheckIn):
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
<div class="related">
	<h3><?php __('Related Trips');?></h3>
	<?php if (!empty($user['Trip'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Snaptic Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Trip'] as $trip):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $trip['id'];?></td>
			<td><?php echo $trip['user_id'];?></td>
			<td><?php echo $trip['snaptic_id'];?></td>
			<td><?php echo $trip['name'];?></td>
			<td><?php echo $trip['comment'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'trips', 'action' => 'view', $trip['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'trips', 'action' => 'edit', $trip['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'trips', 'action' => 'delete', $trip['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trip['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Trip', true), array('controller' => 'trips', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
