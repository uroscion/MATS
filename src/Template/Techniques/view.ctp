<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Technique'), ['action' => 'edit', $technique->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Technique'), ['action' => 'delete', $technique->id], ['confirm' => __('Are you sure you want to delete # {0}?', $technique->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Techniques'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Technique'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Instructionals'), ['controller' => 'Instructionals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instructional'), ['controller' => 'Instructionals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Topics'), ['controller' => 'Topics', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Topic'), ['controller' => 'Topics', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="techniques view large-9 medium-8 columns content">
    <h3><?= h($technique->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Main Name') ?></th>
            <td><?= h($technique->main_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($technique->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Instructionals') ?></h4>
        <?php if (!empty($technique->instructionals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Technique Id') ?></th>
                <th scope="col"><?= __('Source Id') ?></th>
                <th scope="col"><?= __('Location In Source') ?></th>
                <th scope="col"><?= __('Type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($technique->instructionals as $instructionals): ?>
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
        <?php if (!empty($technique->topics)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($technique->topics as $topics): ?>
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
