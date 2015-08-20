<div id="page-wrapper">
<h2 class="sub-header">Bal Ratings</h2>


<div class="table-responsive">
    <table class="table table-striped">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', 'ID') ?></th>
            <th><?= $this->Paginator->sort('balrating', 'Bal Rating') ?></th>
            <th><?= $this->Paginator->sort('price', 'Price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($balratings as $balrating): ?>
        <tr>
            <td><?= $this->Number->format($balrating->id) ?></td>
            <td><?= $this->Number->format($balrating->balrating) ?></td>
            <td><?= $this->Number->format($balrating->price) ?></td>
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
</div>