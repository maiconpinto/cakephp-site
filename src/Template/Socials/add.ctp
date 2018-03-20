<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $social
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Socials'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="socials form large-9 medium-8 columns content">
    <?= $this->Form->create($social) ?>
    <fieldset>
        <legend><?= __('Add Social') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('url');
            echo $this->Form->control('icon');
            echo $this->Form->control('class');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
