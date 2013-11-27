<div class="decks form">
<?php echo $this->Form->create('Deck'); ?>
	<fieldset>
		<legend><?php echo __('Edit Deck'); ?></legend>
	<?php
		echo $this->Form->input('deck_id');
		echo $this->Form->input('deck_title');
		echo $this->Form->input('deck_data');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Deck.deck_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Deck.deck_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Decks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
