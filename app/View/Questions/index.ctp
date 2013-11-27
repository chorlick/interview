<div class="questions index">
	<h2><?php echo __('Questions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('question_id'); ?></th>
			<th><?php echo $this->Paginator->sort('question_text'); ?></th>
			<th><?php echo $this->Paginator->sort('deck_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($questions as $question): ?>
	<tr>
		<td><?php echo h($question['Question']['question_id']); ?>&nbsp;</td>
		<td><?php echo h($question['Question']['question_text']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($question['Deck']['deck_title'], array('controller' => 'decks', 'action' => 'view', $question['Deck']['deck_id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $question['Question']['question_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $question['Question']['question_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $question['Question']['question_id']), null, __('Are you sure you want to delete # %s?', $question['Question']['question_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Question'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Results'), array('controller' => 'results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Result'), array('controller' => 'results', 'action' => 'add')); ?> </li>
	</ul>
</div>
