<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Source'), ['action' => 'edit', $source->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Source'), ['action' => 'delete', $source->id], ['confirm' => __('Are you sure you want to delete # {0}?', $source->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Instructionals'), ['controller' => 'Instructionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instructional'), ['controller' => 'Instructionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sources view large-9 medium-8 columns content">
    <h3><?= h($source->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($source->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nickname') ?></th>
            <td><?= h($source->nickname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title Eng Trans') ?></th>
            <td><?= h($source->title_eng_trans) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author First') ?></th>
            <td><?= h($source->author_first) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author Middle') ?></th>
            <td><?= h($source->author_middle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author Last') ?></th>
            <td><?= h($source->author_last) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inventory Num') ?></th>
            <td><?= h($source->inventory_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($source->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notes') ?></th>
            <td><?= h($source->notes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($source->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pub Year') ?></th>
            <td><?= $this->Number->format($source->pub_year) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Instructionals') ?></h4>
        <?php if (!empty($source->instructionals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Technique Id') ?></th>
                <th scope="col"><?= __('Source Id') ?></th>
                <th scope="col"><?= __('Location In Source') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($source->instructionals as $instructionals): ?>
            <tr>
                <td><?= h($instructionals->id) ?></td>
                <td><?= h($instructionals->technique_id) ?></td>
                <td><?= h($instructionals->source_id) ?></td>
                <td><?= h($instructionals->location_in_source) ?></td>
                <td><?= h($instructionals->type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Instructionals', 'action' => 'view', $instructionals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Instructionals', 'action' => 'edit', $instructionals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Instructionals', 'action' => 'delete', $instructionals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instructionals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Topics') ?></h4>
        <?php if (!empty($source->topics)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($source->topics as $topics): ?>
            <tr>
                <td><?= h($topics->id) ?></td>
                <td><?= h($topics->name) ?></td>
                <td><?= h($topics->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Topics', 'action' => 'view', $topics->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Topics', 'action' => 'edit', $topics->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Topics', 'action' => 'delete', $topics->id], ['confirm' => __('Are you sure you want to delete # {0}?', $topics->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
