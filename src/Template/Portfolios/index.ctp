<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $portfolios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Portfolio'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="portfolios index large-9 medium-8 columns content">
    <h3><?= __('Portfolios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('category') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($portfolios as $portfolio): ?>
            <tr>
                <td><?= $this->Number->format($portfolio->id) ?></td>
                <td><?= h($portfolio->created) ?></td>
                <td><?= h($portfolio->modified) ?></td>
                <td><?= h($portfolio->title) ?></td>
                <td><?= h($portfolio->url) ?></td>
                <td><?= h($portfolio->image) ?></td>
                <td><?= h($portfolio->category) ?></td>
                <td><?= $this->Number->format($portfolio->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $portfolio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $portfolio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $portfolio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $portfolio->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
