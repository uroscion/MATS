<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Instructionals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Techniques'), ['controller' => 'Techniques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Technique'), ['controller' => 'Techniques', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Instr Image Texts'), ['controller' => 'InstrImageTexts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instr Image Text'), ['controller' => 'InstrImageTexts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instructionals form large-9 medium-8 columns content">
    <?= $this->Form->create($instructional) ?>
    <fieldset>
        <legend><?= __('Add Instructional') ?></legend>
        <?php
            echo $this->Form->input('technique_id', ['options' => $techniques]);
            echo $this->Form->input('source_id', ['options' => $sources]);
            echo $this->Form->input('location_in_source');
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
