<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Topics'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Techniques'), ['controller' => 'Techniques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Technique'), ['controller' => 'Techniques', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="topics form large-9 medium-8 columns content">
    <?= $this->Form->create($topic) ?>
    <fieldset>
        <legend><?= __('Add Topic') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('sources._ids', ['options' => $sources]);
            echo $this->Form->input('techniques._ids', ['options' => $techniques]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
