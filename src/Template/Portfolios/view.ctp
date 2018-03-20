<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $portfolio
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Portfolio'), ['action' => 'edit', $portfolio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Portfolio'), ['action' => 'delete', $portfolio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portfolio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Portfolios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Portfolio'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="portfolios view large-9 medium-8 columns content">
    <h3><?= h($portfolio->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($portfolio->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($portfolio->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($portfolio->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= h($portfolio->category) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($portfolio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($portfolio->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($portfolio->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($portfolio->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($portfolio->description)); ?>
    </div>
</div>
