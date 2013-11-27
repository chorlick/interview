<div class="decks view">
<h2><?php echo __('Deck'); ?></h2>
	<dl>
		<dt><?php echo __('Deck Id'); ?></dt>
		<dd>
			<?php echo h($deck['Deck']['deck_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deck Title'); ?></dt>
		<dd>
			<?php echo h($deck['Deck']['deck_title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deck Data'); ?></dt>
		<dd>
			<?php echo h($deck['Deck']['deck_data']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Deck'), array('action' => 'edit', $deck['Deck']['deck_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deck'), array('action' => 'delete', $deck['Deck']['deck_id']), null, __('Are you sure you want to delete # %s?', $deck['Deck']['deck_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Decks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deck'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Questions'); ?></h3>
	<?php if (!empty($deck['Question'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Question Id'); ?></th>
		<th><?php echo __('Question Text'); ?></th>
		<th><?php echo __('Deck Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($deck['Question'] as $question): ?>
		<tr>
			<td><?php echo $question['question_id']; ?></td>
			<td><?php echo $question['question_text']; ?></td>
			<td><?php echo $question['deck_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'questions', 'action' => 'view', $question['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'questions', 'action' => 'edit', $question['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'questions', 'action' => 'delete', $question['id']), null, __('Are you sure you want to delete # %s?', $question['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
