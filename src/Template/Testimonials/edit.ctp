<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $testimonial
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $testimonial->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $testimonial->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Testimonials'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="testimonials form large-9 medium-8 columns content">
    <?= $this->Form->create($testimonial, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Testimonial') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('job');
            echo $this->Form->control('testimonial');
            echo $this->Form->control('image', ['type' => 'file']);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>