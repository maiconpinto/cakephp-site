<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $plan
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Plan'), ['action' => 'edit', $plan->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Plan'), ['action' => 'delete', $plan->id], ['confirm' => __('Are you sure you want to delete # {0}?', $plan->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Plans'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Plan'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="plans view large-9 medium-8 columns content">
    <h3><?= h($plan->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($plan->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($plan->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($plan->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($plan->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($plan->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($plan->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($plan->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($plan->description)); ?>
    </div>
</div>
