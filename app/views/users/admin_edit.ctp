<div class="users form">
<?php echo $form->create('User');?>
	<fieldset>
 		<legend><?php __('Edit User');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('uid');
		echo $form->input('snaptic_user_id');
		echo $form->input('email');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('User.id'))); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Snaptic Users', true), array('controller' => 'snaptic_users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Snaptic User', true), array('controller' => 'snaptic_users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Trip Check Ins', true), array('controller' => 'trip_check_ins', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip Check In', true), array('controller' => 'trip_check_ins', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Trips', true), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip', true), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>
