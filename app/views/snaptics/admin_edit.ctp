<div class="snaptics form">
<?php echo $form->create('Snaptic');?>
	<fieldset>
 		<legend><?php __('Edit Snaptic');?></legend>
	<?php
		echo $form->input('id');
		echo $form->input('snaptic_user_id');
		echo $form->input('body');
		echo $form->input('type');
	?>
	</fieldset>
<?php echo $form->end('Submit');?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Delete', true), array('action' => 'delete', $form->value('Snaptic.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $form->value('Snaptic.id'))); ?></li>
		<li><?php echo $html->link(__('List Snaptics', true), array('action' => 'index'));?></li>
		<li><?php echo $html->link(__('List Snaptic Users', true), array('controller' => 'snaptic_users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Snaptic User', true), array('controller' => 'snaptic_users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Trips', true), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Trip', true), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>
