<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Source'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Instructionals'), ['controller' => 'Instructionals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instructional'), ['controller' => 'Instructionals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sources index large-9 medium-8 columns content">
    <h3><?= __('Sources') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nickname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title_eng_trans') ?></th>
                <th scope="col"><?= $this->Paginator->sort('author_first') ?></th>
                <th scope="col"><?= $this->Paginator->sort('author_middle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('author_last') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inventory_num') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pub_year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sources as $source): ?>
            <tr>
                <td><?= $this->Number->format($source->id) ?></td>
                <td><?= h($source->title) ?></td>
                <td><?= h($source->nickname) ?></td>
                <td><?= h($source->title_eng_trans) ?></td>
                <td><?= h($source->author_first) ?></td>
                <td><?= h($source->author_middle) ?></td>
                <td><?= h($source->author_last) ?></td>
                <td><?= h($source->inventory_num) ?></td>
                <td><?= $this->Number->format($source->pub_year) ?></td>
                <td><?= h($source->link) ?></td>
                <td><?= h($source->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $source->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $source->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $source->id], ['confirm' => __('Are you sure you want to delete # {0}?', $source->id)]) ?>
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
