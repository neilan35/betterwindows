<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Glazing'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usages'), ['controller' => 'Usages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usage'), ['controller' => 'Usages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Glasstypes'), ['controller' => 'Glasstypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glasstype'), ['controller' => 'Glasstypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Compositions'), ['controller' => 'Compositions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Composition'), ['controller' => 'Compositions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Balratings'), ['controller' => 'Balratings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Balrating'), ['controller' => 'Balratings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="glazings index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('usage_id') ?></th>
            <th><?= $this->Paginator->sort('glasstype_id') ?></th>
            <th><?= $this->Paginator->sort('composition_id') ?></th>
            <th><?= $this->Paginator->sort('balrating_id') ?></th>
            <th><?= $this->Paginator->sort('obscurity') ?></th>
            <th><?= $this->Paginator->sort('safety') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($glazings as $glazing): ?>
        <tr>
            <td><?= $this->Number->format($glazing->id) ?></td>
            <td>
                <?= $glazing->has('usage') ? $this->Html->link($glazing->usage->id, ['controller' => 'Usages', 'action' => 'view', $glazing->usage->id]) : '' ?>
            </td>
            <td>
                <?= $glazing->has('glasstype') ? $this->Html->link($glazing->glasstype->id, ['controller' => 'Glasstypes', 'action' => 'view', $glazing->glasstype->id]) : '' ?>
            </td>
            <td>
                <?= $glazing->has('composition') ? $this->Html->link($glazing->composition->name, ['controller' => 'Compositions', 'action' => 'view', $glazing->composition->id]) : '' ?>
            </td>
            <td>
                <?= $glazing->has('balrating') ? $this->Html->link($glazing->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $glazing->balrating->id]) : '' ?>
            </td>
            <td><?= h($glazing->obscurity) ?></td>
            <td><?= h($glazing->safety) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $glazing->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $glazing->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $glazing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $glazing->id)]) ?>
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
