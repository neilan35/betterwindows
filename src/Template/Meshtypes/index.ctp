<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Meshtype'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flyscreenmeshes'), ['controller' => 'Flyscreenmeshes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenmesh'), ['controller' => 'Flyscreenmeshes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="meshtypes index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th><?= $this->Paginator->sort('price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($meshtypes as $meshtype): ?>
        <tr>
            <td><?= $this->Number->format($meshtype->id) ?></td>
            <td><?= h($meshtype->type) ?></td>
            <td><?= $this->Number->format($meshtype->price) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $meshtype->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $meshtype->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $meshtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $meshtype->id)]) ?>
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
