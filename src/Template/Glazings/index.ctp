<div id="page-wrapper">
<h2 class="sub-header">Glazings</h2>


<div class="table-responsive">
    <table class="table table-striped">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', 'ID') ?></th>
            <th><?= $this->Paginator->sort('glazingtype', 'Glazing Type') ?></th>
            <th><?= $this->Paginator->sort('obscurity', 'Obscurity') ?></th>
            <th><?= $this->Paginator->sort('safetyglazing', 'Safety Glazing') ?></th>
            <th><?= $this->Paginator->sort('price', 'Price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($glazings as $glazing): ?>
        <tr>
            <td><?= $this->Number->format($glazing->id) ?></td>
            <td><?= h($glazing->glazingtype) ?></td>
            <td><?= h($glazing->obscurity) ?></td>
            <td><?= h($glazing->safetyglazing) ?></td>
            <td><?= $this->Number->format($glazing->price) ?></td>
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
</div>