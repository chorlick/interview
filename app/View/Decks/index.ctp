<div class="decks index">
	<h2><?php echo __('Decks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('deck_id'); ?></th>
			<th><?php echo $this->Paginator->sort('deck_title'); ?></th>
			<th><?php echo $this->Paginator->sort('deck_data'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($decks as $deck): ?>
	<tr>
		<td><?php echo h($deck['Deck']['deck_id']); ?>&nbsp;</td>
		<td><?php echo h($deck['Deck']['deck_title']); ?>&nbsp;</td>
		<td><?php echo h($deck['Deck']['deck_data']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $deck['Deck']['deck_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $deck['Deck']['deck_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $deck['Deck']['deck_id']), null, __('Are you sure you want to delete # %s?', $deck['Deck']['deck_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Deck'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
