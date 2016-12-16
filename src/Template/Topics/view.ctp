<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Topic'), ['action' => 'edit', $topic->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Topic'), ['action' => 'delete', $topic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $topic->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Topics'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Topic'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Techniques'), ['controller' => 'Techniques', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Technique'), ['controller' => 'Techniques', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="topics view large-9 medium-8 columns content">
    <h3><?= h($topic->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($topic->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($topic->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($topic->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Sources') ?></h4>
        <?php if (!empty($topic->sources)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Nickname') ?></th>
                <th scope="col"><?= __('Title Eng Trans') ?></th>
                <th scope="col"><?= __('Author First') ?></th>
                <th scope="col"><?= __('Author Middle') ?></th>
                <th scope="col"><?= __('Author Last') ?></th>
                <th scope="col"><?= __('Inventory Num') ?></th>
                <th scope="col"><?= __('Pub Year') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col"><?= __('Notes') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($topic->sources as $sources): ?>
            <tr>
                <td><?= h($sources->id) ?></td>
                <td><?= h($sources->title) ?></td>
                <td><?= h($sources->nickname) ?></td>
                <td><?= h($sources->title_eng_trans) ?></td>
                <td><?= h($sources->author_first) ?></td>
                <td><?= h($sources->author_middle) ?></td>
                <td><?= h($sources->author_last) ?></td>
                <td><?= h($sources->inventory_num) ?></td>
                <td><?= h($sources->pub_year) ?></td>
                <td><?= h($sources->link) ?></td>
                <td><?= h($sources->notes) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sources', 'action' => 'view', $sources->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sources', 'action' => 'edit', $sources->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sources', 'action' => 'delete', $sources->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sources->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Techniques') ?></h4>
        <?php if (!empty($topic->techniques)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Main Name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($topic->techniques as $techniques): ?>
            <tr>
                <td><?= h($techniques->id) ?></td>
                <td><?= h($techniques->main_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Techniques', 'action' => 'view', $techniques->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Techniques', 'action' => 'edit', $techniques->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Techniques', 'action' => 'delete', $techniques->id], ['confirm' => __('Are you sure you want to delete # {0}?', $techniques->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
