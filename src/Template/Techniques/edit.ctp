<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $technique->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $technique->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Techniques'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Instructionals'), ['controller' => 'Instructionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instructional'), ['controller' => 'Instructionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="techniques form large-9 medium-8 columns content">
    <?= $this->Form->create($technique) ?>
    <fieldset>
        <legend><?= __('Edit Technique') ?></legend>
        <?php
            echo $this->Form->input('main_name');
            echo $this->Form->input('topics._ids', ['options' => $topics]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
