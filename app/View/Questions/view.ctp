<div class="questions view">
<h2><?php echo __('Question'); ?></h2>
	<dl>
		<dt><?php echo __('Question Id'); ?></dt>
		<dd>
			<?php echo h($question['Question']['question_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question Text'); ?></dt>
		<dd>
			<?php echo h($question['Question']['question_text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deck'); ?></dt>
		<dd>
			<?php echo $this->Html->link($question['Deck']['deck_title'], array('controller' => 'decks', 'action' => 'view', $question['Deck']['deck_id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Question'), array('action' => 'edit', $question['Question']['question_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Question'), array('action' => 'delete', $question['Question']['question_id']), null, __('Are you sure you want to delete # %s?', $question['Question']['question_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Decks'), array('controller' => 'decks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('controller' => 'decks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Results'), array('controller' => 'results', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Result'), array('controller' => 'results', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Results'); ?></h3>
	<?php if (!empty($question['Result'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Result Id'); ?></th>
		<th><?php echo __('Result Name'); ?></th>
		<th><?php echo __('Result Value'); ?></th>
		<th><?php echo __('Question Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($question['Result'] as $result): ?>
		<tr>
			<td><?php echo $result['result_id']; ?></td>
			<td><?php echo $result['result_name']; ?></td>
			<td><?php echo $result['result_value']; ?></td>
			<td><?php echo $result['question_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'results', 'action' => 'view', $result['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'results', 'action' => 'edit', $result['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'results', 'action' => 'delete', $result['id']), null, __('Are you sure you want to delete # %s?', $result['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Result'), array('controller' => 'results', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
