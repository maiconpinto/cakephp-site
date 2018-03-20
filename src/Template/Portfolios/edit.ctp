<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $portfolio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $portfolio->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $portfolio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Portfolios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="portfolios form large-9 medium-8 columns content">
    <?= $this->Form->create($portfolio, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Portfolio') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('description');
            echo $this->Form->control('url');
            echo $this->Form->control('image', ['type' => 'file']);
            echo $this->Form->control('category');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
