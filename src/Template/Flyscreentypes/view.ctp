<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Flyscreentype'), ['action' => 'edit', $flyscreentype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flyscreentype'), ['action' => 'delete', $flyscreentype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreentype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreentypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreentype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreenopentypes'), ['controller' => 'Flyscreenopentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenopentype'), ['controller' => 'Flyscreenopentypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="flyscreentypes view large-10 medium-9 columns">
    <h2><?= h($flyscreentype->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($flyscreentype->type) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($flyscreentype->id) ?></p>
            <h6 class="subheader"><?= __('Price') ?></h6>
            <p><?= $this->Number->format($flyscreentype->price) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Flyscreenopentypes') ?></h4>
    <?php if (!empty($flyscreentype->flyscreenopentypes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Opentype Id') ?></th>
            <th><?= __('Flyscreentype Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($flyscreentype->flyscreenopentypes as $flyscreenopentypes): ?>
        <tr>
            <td><?= h($flyscreenopentypes->id) ?></td>
            <td><?= h($flyscreenopentypes->opentype_id) ?></td>
            <td><?= h($flyscreenopentypes->flyscreentype_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Flyscreenopentypes', 'action' => 'view', $flyscreenopentypes->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Flyscreenopentypes', 'action' => 'edit', $flyscreenopentypes->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flyscreenopentypes', 'action' => 'delete', $flyscreenopentypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreenopentypes->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
