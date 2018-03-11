<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $counter
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Counters'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="counters form large-9 medium-8 columns content">
    <?= $this->Form->create($counter) ?>
    <fieldset>
        <legend><?= __('Add Counter') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('value');
            echo $this->Form->control('duration');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
