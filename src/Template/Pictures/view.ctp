<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Picture'), ['action' => 'edit', $picture->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Picture'), ['action' => 'delete', $picture->id], ['confirm' => __('Are you sure you want to delete # {0}?', $picture->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pictures'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Designs'), ['controller' => 'Designs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Design'), ['controller' => 'Designs', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="pictures view large-10 medium-9 columns">
    <h2><?= h($picture->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Filename') ?></h6>
            <p><?= h($picture->filename) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($picture->id) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Description') ?></h6>
            <?= $this->Text->autoParagraph(h($picture->description)); ?>

        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Designs') ?></h4>
    <?php if (!empty($picture->designs)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Opentype Id') ?></th>
            <th><?= __('Picture Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($picture->designs as $designs): ?>
        <tr>
            <td><?= h($designs->id) ?></td>
            <td><?= h($designs->opentype_id) ?></td>
            <td><?= h($designs->picture_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Designs', 'action' => 'view', $designs->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Designs', 'action' => 'edit', $designs->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Designs', 'action' => 'delete', $designs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designs->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
