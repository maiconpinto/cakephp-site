<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $partner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $partner->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $partner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Partners'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="partners form large-9 medium-8 columns content">
    <?= $this->Form->create($partner, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Partner') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('image', ['type' => 'file']);
            echo $this->Form->control('url');
            echo $this->Form->control('order');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
