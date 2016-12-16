<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Technique'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Instructionals'), ['controller' => 'Instructionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instructional'), ['controller' => 'Instructionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="techniques index large-9 medium-8 columns content">
    <h3><?= __('Techniques') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('main_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($techniques as $technique): ?>
            <tr>
                <td><?= $this->Number->format($technique->id) ?></td>
                <td><?= h($technique->main_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $technique->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $technique->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $technique->id], ['confirm' => __('Are you sure you want to delete # {0}?', $technique->id)]) ?>
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
