<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $source->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $source->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Instructionals'), ['controller' => 'Instructionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instructional'), ['controller' => 'Instructionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sources form large-9 medium-8 columns content">
    <?= $this->Form->create($source) ?>
    <fieldset>
        <legend><?= __('Edit Source') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('nickname');
            echo $this->Form->input('title_eng_trans');
            echo $this->Form->input('author_first');
            echo $this->Form->input('author_middle');
            echo $this->Form->input('author_last');
            echo $this->Form->input('inventory_num');
            echo $this->Form->input('pub_year');
            echo $this->Form->input('link');
            echo $this->Form->input('notes');
            echo $this->Form->input('topics._ids', ['options' => $topics]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
