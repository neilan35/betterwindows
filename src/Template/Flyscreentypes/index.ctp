<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Flyscreentype'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Flyscreenopentypes'), ['controller' => 'Flyscreenopentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenopentype'), ['controller' => 'Flyscreenopentypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="flyscreentypes index large-10 medium-9 columns">
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
    <?php foreach ($flyscreentypes as $flyscreentype): ?>
        <tr>
            <td><?= $this->Number->format($flyscreentype->id) ?></td>
            <td><?= h($flyscreentype->type) ?></td>
            <td><?= $this->Number->format($flyscreentype->price) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $flyscreentype->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flyscreentype->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flyscreentype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreentype->id)]) ?>
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
