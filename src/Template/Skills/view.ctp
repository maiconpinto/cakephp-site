<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $skill
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Skill'), ['action' => 'edit', $skill->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Skill'), ['action' => 'delete', $skill->id], ['confirm' => __('Are you sure you want to delete # {0}?', $skill->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Skills'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Skill'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="skills view large-9 medium-8 columns content">
    <h3><?= h($skill->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($skill->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($skill->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Percent') ?></th>
            <td><?= $this->Number->format($skill->percent) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($skill->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($skill->modified) ?></td>
        </tr>
    </table>
</div>
