<div class="trips form">
<?php echo $form->create('Trip');?>
	<fieldset>
 		<legend><?php __('Add Trip');?></legend>
	<?php
		echo $form->input('user_id');
		echo $form->input('snaptic_id');
		echo $form->input('name');
		echo $form->input('comment');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List Trips', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Snaptics', true), array('controller' => 'snaptics', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Snaptic', true), array('controller' => 'snaptics', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Trip Check Ins', true), array('controller' => 'trip_check_ins', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip Check In', true), array('controller' => 'trip_check_ins', 'action' => 'add')); ?> </li>
	</ul>
</div>
