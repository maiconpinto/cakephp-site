<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $partner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Partner'), ['action' => 'edit', $partner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Partner'), ['action' => 'delete', $partner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Partners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partner'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="partners view large-9 medium-8 columns content">
    <h3><?= h($partner->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($partner->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($partner->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($partner->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($partner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $this->Number->format($partner->order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($partner->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($partner->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($partner->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($partner->description)); ?>
    </div>
</div>
