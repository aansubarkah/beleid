<div class="moderators view">
<h2><?php echo __('Moderator'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($moderator['Moderator']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($moderator['User']['id'], array('controller' => 'users', 'action' => 'view', $moderator['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($moderator['Category']['name'], array('controller' => 'categories', 'action' => 'view', $moderator['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($moderator['Moderator']['active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Moderator'), array('action' => 'edit', $moderator['Moderator']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Moderator'), array('action' => 'delete', $moderator['Moderator']['id']), array(), __('Are you sure you want to delete # %s?', $moderator['Moderator']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Moderators'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Moderator'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
