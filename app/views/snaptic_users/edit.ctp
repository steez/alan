<div class="snapticUsers form">
<?php echo $form->create('SnapticUser');?>
	<fieldset>
 		<legend><?php __('Edit SnapticUser');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('username');
		echo $form->input('password');
		echo $form->input('user_id');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('SnapticUser.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('SnapticUser.id'))); ?></li>
		<li><?php echo $html->link(__('List SnapticUsers', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Snaptics', true), array('controller' => 'snaptics', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Snaptic', true), array('controller' => 'snaptics', 'action' => 'add')); ?> </li>
	</ul>
</div>
