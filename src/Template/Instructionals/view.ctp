<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Instructional'), ['action' => 'edit', $instructional->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Instructional'), ['action' => 'delete', $instructional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instructional->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Instructionals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instructional'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Techniques'), ['controller' => 'Techniques', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Technique'), ['controller' => 'Techniques', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sources'), ['controller' => 'Sources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Source'), ['controller' => 'Sources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Instr Image Texts'), ['controller' => 'InstrImageTexts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instr Image Text'), ['controller' => 'InstrImageTexts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="instructionals view large-9 medium-8 columns content">
    <h3><?= h($instructional->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Technique') ?></th>
            <td><?= $instructional->has('technique') ? $this->Html->link($instructional->technique->id, ['controller' => 'Techniques', 'action' => 'view', $instructional->technique->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source') ?></th>
            <td><?= $instructional->has('source') ? $this->Html->link($instructional->source->title, ['controller' => 'Sources', 'action' => 'view', $instructional->source->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location In Source') ?></th>
            <td><?= h($instructional->location_in_source) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($instructional->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Type') ?></h4>
        <?= $this->Text->autoParagraph(h($instructional->type)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Instr Image Texts') ?></h4>
        <?php if (!empty($instructional->instr_image_texts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Instructional Id') ?></th>
                <th scope="col"><?= __('Image File Loc') ?></th>
                <th scope="col"><?= __('Text') ?></th>
                <th scope="col"><?= __('Text Trans') ?></th>
                <th scope="col"><?= __('Series Number') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($instructional->instr_image_texts as $instrImageTexts): ?>
            <tr>
                <td><?= h($instrImageTexts->id) ?></td>
                <td><?= h($instrImageTexts->instructional_id) ?></td>
                <td><?= h($instrImageTexts->image_file_loc) ?></td>
                <td><?= h($instrImageTexts->text) ?></td>
                <td><?= h($instrImageTexts->text_trans) ?></td>
                <td><?= h($instrImageTexts->series_number) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'InstrImageTexts', 'action' => 'view', $instrImageTexts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'InstrImageTexts', 'action' => 'edit', $instrImageTexts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'InstrImageTexts', 'action' => 'delete', $instrImageTexts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instrImageTexts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
