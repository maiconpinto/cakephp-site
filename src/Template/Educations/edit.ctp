<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $education
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $education->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $education->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Educations'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="educations form large-9 medium-8 columns content">
    <?= $this->Form->create($education) ?>
    <fieldset>
        <legend><?= __('Edit Education') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('subtitle');
            echo $this->Form->control('date');
            echo $this->Form->control('description');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
