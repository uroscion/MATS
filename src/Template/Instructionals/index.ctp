<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Instructional'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Techniques'), ['controller' => 'Techniques', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Technique'), ['controller' => 'Techniques', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Instr Image Texts'), ['controller' => 'InstrImageTexts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instr Image Text'), ['controller' => 'InstrImageTexts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instructionals index large-9 medium-8 columns content">
    <h3><?= __('Instructionals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('technique_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('source_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location_in_source') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($instructionals as $instructional): ?>
            <tr>
                <td><?= $this->Number->format($instructional->id) ?></td>
                <td><?= $instructional->has('technique') ? $this->Html->link($instructional->technique->id, ['controller' => 'Techniques', 'action' => 'view', $instructional->technique->id]) : '' ?></td>
                <td><?= $instructional->has('source') ? $this->Html->link($instructional->source->title, ['controller' => 'Sources', 'action' => 'view', $instructional->source->id]) : '' ?></td>
                <td><?= h($instructional->location_in_source) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $instructional->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instructional->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instructional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instructional->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
