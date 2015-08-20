<div id="page-wrapper">
<h2 class="sub-header">Colours</h2>

<div class="table-responsive">
    <table class="table table-striped">
              <thead>
                <tr>
            <th><?= $this->Paginator->sort('id','ID') ?></th>
            <th><?= $this->Paginator->sort('category', 'Colour Category') ?></th>
            <th><?= $this->Paginator->sort('name', 'Colour Name') ?></th>
            <th><?= $this->Paginator->sort('price', 'Price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($colours as $colour): ?>
        <tr>
            <td><?= $this->Number->format($colour->id) ?></td>
            <td><?= $this->Number->format($colour->category) ?></td>
            <td><?= h($colour->name) ?></td>
            <td><?= $this->Number->format($colour->price) ?></td>
           
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $colour->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colour->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $colour->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colour->id)]) ?>
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