<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $experience
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $experience->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $experience->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Experiences'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="experiences form large-9 medium-8 columns content">
    <?= $this->Form->create($experience) ?>
    <fieldset>
        <legend><?= __('Edit Experience') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('subtitle');
            echo $this->Form->control('description');
            echo $this->Form->control('period');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
