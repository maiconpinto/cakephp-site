<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $social
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Social'), ['action' => 'edit', $social->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Social'), ['action' => 'delete', $social->id], ['confirm' => __('Are you sure you want to delete # {0}?', $social->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Socials'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Social'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="socials view large-9 medium-8 columns content">
    <h3><?= h($social->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($social->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($social->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Icon') ?></th>
            <td><?= h($social->icon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Class') ?></th>
            <td><?= h($social->class) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($social->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($social->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($social->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($social->modified) ?></td>
        </tr>
    </table>
</div>
