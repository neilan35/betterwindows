<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Balrating'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flyscreenmeshes'), ['controller' => 'Flyscreenmeshes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenmesh'), ['controller' => 'Flyscreenmeshes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Glazings'), ['controller' => 'Glazings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glazing'), ['controller' => 'Glazings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="balratings index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('balrating') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($balratings as $balrating): ?>
        <tr>
            <td><?= $this->Number->format($balrating->id) ?></td>
            <td><?= h($balrating->balrating) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $balrating->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $balrating->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $balrating->id], ['confirm' => __('Are you sure you want to delete # {0}?', $balrating->id)]) ?>
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
