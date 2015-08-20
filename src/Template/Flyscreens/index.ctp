<div id="page-wrapper">
<h2 class="sub-header">Fly Screens</h2>


<div class="table-responsive">
    <table class="table table-striped">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', 'ID') ?></th>
            <th><?= $this->Paginator->sort('mesh', 'Fly Screen Mesh') ?></th>
            <th><?= $this->Paginator->sort('type', 'Fly Screen Type') ?></th>
            <th><?= $this->Paginator->sort('price', 'Price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($flyscreens as $flyscreen): ?>
        <tr>
            <td><?= $this->Number->format($flyscreen->id) ?></td>
            <td><?= h($flyscreen->mesh) ?></td>
            <td><?= h($flyscreen->type) ?></td>
            <td><?= $this->Number->format($flyscreen->price) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $flyscreen->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flyscreen->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flyscreen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreen->id)]) ?>
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