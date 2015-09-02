<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Flyscreenopentype'), ['action' => 'edit', $flyscreenopentype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flyscreenopentype'), ['action' => 'delete', $flyscreenopentype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreenopentype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreenopentypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenopentype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opentypes'), ['controller' => 'Opentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opentype'), ['controller' => 'Opentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreentypes'), ['controller' => 'Flyscreentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreentype'), ['controller' => 'Flyscreentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreenmeshes'), ['controller' => 'Flyscreenmeshes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenmesh'), ['controller' => 'Flyscreenmeshes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="flyscreenopentypes view large-10 medium-9 columns">
    <h2><?= h($flyscreenopentype->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Opentype') ?></h6>
            <p><?= $flyscreenopentype->has('opentype') ? $this->Html->link($flyscreenopentype->opentype->name, ['controller' => 'Opentypes', 'action' => 'view', $flyscreenopentype->opentype->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Flyscreentype') ?></h6>
            <p><?= $flyscreenopentype->has('flyscreentype') ? $this->Html->link($flyscreenopentype->flyscreentype->id, ['controller' => 'Flyscreentypes', 'action' => 'view', $flyscreenopentype->flyscreentype->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($flyscreenopentype->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Flyscreenmeshes') ?></h4>
    <?php if (!empty($flyscreenopentype->flyscreenmeshes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Meshtype Id') ?></th>
            <th><?= __('Flyscreenopentype Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($flyscreenopentype->flyscreenmeshes as $flyscreenmeshes): ?>
        <tr>
            <td><?= h($flyscreenmeshes->id) ?></td>
            <td><?= h($flyscreenmeshes->balrating_id) ?></td>
            <td><?= h($flyscreenmeshes->meshtype_id) ?></td>
            <td><?= h($flyscreenmeshes->flyscreenopentype_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Flyscreenmeshes', 'action' => 'view', $flyscreenmeshes->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Flyscreenmeshes', 'action' => 'edit', $flyscreenmeshes->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flyscreenmeshes', 'action' => 'delete', $flyscreenmeshes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreenmeshes->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
