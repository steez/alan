<div class="snapticUsers index">
<h2><?php __('SnapticUsers');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('username');?></th>
	<th><?php echo $paginator->sort('password');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($snapticUsers as $snapticUser):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $snapticUser['SnapticUser']['id']; ?>
		</td>
		<td>
			<?php echo $snapticUser['SnapticUser']['username']; ?>
		</td>
		<td>
			<?php echo $snapticUser['SnapticUser']['password']; ?>
		</td>
		<td>
			<?php echo $html->link($snapticUser['User']['id'], array('controller' => 'users', 'action' => 'view', $snapticUser['User']['id'])); ?>
		</td>
		<td>
			<?php echo $snapticUser['SnapticUser']['created']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $snapticUser['SnapticUser']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $snapticUser['SnapticUser']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $snapticUser['SnapticUser']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $snapticUser['SnapticUser']['id'])); ?>
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
		<li><?php echo $html->link(__('New SnapticUser', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Snaptics', true), array('controller' => 'snaptics', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Snaptic', true), array('controller' => 'snaptics', 'action' => 'add')); ?> </li>
	</ul>
</div>
