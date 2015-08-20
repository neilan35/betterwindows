<div id="page-wrapper">
<h2 class="sub-header">Reveals</h2>

<div class="table-responsive">
    <table class="table table-striped">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', 'ID') ?></th>
            <th><?= $this->Paginator->sort('reveal', 'Reveal') ?></th>
            <th><?= $this->Paginator->sort('revealsize', 'Reveal Size') ?></th>
            <th><?= $this->Paginator->sort('price', 'Price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($reveals as $reveal): ?>
        <tr>
            <td><?= $this->Number->format($reveal->id) ?></td>
            <td><?= h($reveal->reveal) ?></td>
            <td><?= $this->Number->format($reveal->revealsize) ?></td>
            <td><?= $this->Number->format($reveal->price) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $reveal->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reveal->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reveal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reveal->id)]) ?>
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
</div>