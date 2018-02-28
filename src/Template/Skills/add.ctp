<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $skill
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Skills'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="skills form large-9 medium-8 columns content">
    <?= $this->Form->create($skill) ?>
    <fieldset>
        <legend><?= __('Add Skill') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('percent');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
