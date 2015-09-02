<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Flyscreenmesh'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Balratings'), ['controller' => 'Balratings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Balrating'), ['controller' => 'Balratings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Meshtypes'), ['controller' => 'Meshtypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meshtype'), ['controller' => 'Meshtypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreenopentypes'), ['controller' => 'Flyscreenopentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenopentype'), ['controller' => 'Flyscreenopentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="flyscreenmeshes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('balrating_id') ?></th>
            <th><?= $this->Paginator->sort('meshtype_id') ?></th>
            <th><?= $this->Paginator->sort('flyscreenopentype_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($flyscreenmeshes as $flyscreenmesh): ?>
        <tr>
            <td><?= $this->Number->format($flyscreenmesh->id) ?></td>
            <td>
                <?= $flyscreenmesh->has('balrating') ? $this->Html->link($flyscreenmesh->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $flyscreenmesh->balrating->id]) : '' ?>
            </td>
            <td>
                <?= $flyscreenmesh->has('meshtype') ? $this->Html->link($flyscreenmesh->meshtype->id, ['controller' => 'Meshtypes', 'action' => 'view', $flyscreenmesh->meshtype->id]) : '' ?>
            </td>
            <td>
                <?= $flyscreenmesh->has('flyscreenopentype') ? $this->Html->link($flyscreenmesh->flyscreenopentype->id, ['controller' => 'Flyscreenopentypes', 'action' => 'view', $flyscreenmesh->flyscreenopentype->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $flyscreenmesh->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flyscreenmesh->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flyscreenmesh->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreenmesh->id)]) ?>
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
