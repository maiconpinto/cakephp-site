<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $content
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $content->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $content->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contents'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contents form large-9 medium-8 columns content">
    <?= $this->Form->create($content, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Content') ?></legend>
        <?php
            echo $this->Form->control('type');
            echo $this->Form->control('name');
            echo $this->Form->control('content');
            echo $this->Form->control('icon');
            echo $this->Form->control('class');
            echo $this->Form->control('url');
            echo $this->Form->control('image', ['type' => 'file']);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
