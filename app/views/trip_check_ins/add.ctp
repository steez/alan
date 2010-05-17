<div class="tripCheckIns form">
<?php echo $form->create('TripCheckIn');?>
	<fieldset>
 		<legend><?php __('Add TripCheckIn');?></legend>
	<?php
		echo $form->input('user_id');
		echo $form->input('trip_id');
		echo $form->input('long');
		echo $form->input('lat');
		echo $form->input('timestamp');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('List TripCheckIns', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Trips', true), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip', true), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>
