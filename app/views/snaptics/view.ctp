<div class="snaptics view">
<h2><?php  __('Snaptic');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $snaptic['Snaptic']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Snaptic User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($snaptic['SnapticUser']['id'], array('controller' => 'snaptic_users', 'action' => 'view', $snaptic['SnapticUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Body'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $snaptic['Snaptic']['body']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $snaptic['Snaptic']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $snaptic['Snaptic']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Snaptic', true), array('action' => 'edit', $snaptic['Snaptic']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Snaptic', true), array('action' => 'delete', $snaptic['Snaptic']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $snaptic['Snaptic']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Snaptics', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Snaptic', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Snaptic Users', true), array('controller' => 'snaptic_users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Snaptic User', true), array('controller' => 'snaptic_users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Trips', true), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip', true), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php  __('Related Trips');?></h3>
	<?php if (!empty($snaptic['Trip'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snaptic['Trip']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snaptic['Trip']['user_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Snaptic Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snaptic['Trip']['snaptic_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snaptic['Trip']['name'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comment');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snaptic['Trip']['comment'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Trip', true), array('controller' => 'trips', 'action' => 'edit', $snaptic['Trip']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php __('Related Trips');?></h3>
	<?php if (!empty($snaptic['Trip'])):?>
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
		foreach ($snaptic['Trip'] as $trip):
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
