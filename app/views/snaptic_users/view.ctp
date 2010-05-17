<div class="snapticUsers view">
<h2><?php  __('SnapticUser');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $snapticUser['SnapticUser']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $snapticUser['SnapticUser']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $snapticUser['SnapticUser']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($snapticUser['User']['id'], array('controller' => 'users', 'action' => 'view', $snapticUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $snapticUser['SnapticUser']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit SnapticUser', true), array('action' => 'edit', $snapticUser['SnapticUser']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete SnapticUser', true), array('action' => 'delete', $snapticUser['SnapticUser']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $snapticUser['SnapticUser']['id'])); ?> </li>
		<li><?php echo $html->link(__('List SnapticUsers', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New SnapticUser', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Snaptics', true), array('controller' => 'snaptics', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Snaptic', true), array('controller' => 'snaptics', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php  __('Related Snaptics');?></h3>
	<?php if (!empty($snapticUser['Snaptic'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snapticUser['Snaptic']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Snaptic User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snapticUser['Snaptic']['snaptic_user_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Body');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snapticUser['Snaptic']['body'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snapticUser['Snaptic']['type'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snapticUser['Snaptic']['created'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit Snaptic', true), array('controller' => 'snaptics', 'action' => 'edit', $snapticUser['Snaptic']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php  __('Related Users');?></h3>
	<?php if (!empty($snapticUser['User'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snapticUser['User']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Uid');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snapticUser['User']['uid'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Snaptic User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snapticUser['User']['snaptic_user_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snapticUser['User']['email'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $snapticUser['User']['created'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $html->link(__('Edit User', true), array('controller' => 'users', 'action' => 'edit', $snapticUser['User']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php __('Related Snaptics');?></h3>
	<?php if (!empty($snapticUser['Snaptic'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Snaptic User Id'); ?></th>
		<th><?php __('Body'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($snapticUser['Snaptic'] as $snaptic):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $snaptic['id'];?></td>
			<td><?php echo $snaptic['snaptic_user_id'];?></td>
			<td><?php echo $snaptic['body'];?></td>
			<td><?php echo $snaptic['type'];?></td>
			<td><?php echo $snaptic['created'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'snaptics', 'action' => 'view', $snaptic['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'snaptics', 'action' => 'edit', $snaptic['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'snaptics', 'action' => 'delete', $snaptic['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $snaptic['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Snaptic', true), array('controller' => 'snaptics', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($snapticUser['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Uid'); ?></th>
		<th><?php __('Snaptic User Id'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($snapticUser['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['uid'];?></td>
			<td><?php echo $user['snaptic_user_id'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $user['created'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
