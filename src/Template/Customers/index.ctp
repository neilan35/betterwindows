<div id="page-wrapper">
<div class="actions columns large-2 medium-3">
    <h3><?= __('Customer Index') ?></h3>
</div>
          <div class="table-responsive">
            <table class="table table-striped">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('first_name') ?></th>
            <th><?= $this->Paginator->sort('last_name') ?></th>
            <th><?= $this->Paginator->sort('phone_number') ?></th>
            <th><?= $this->Paginator->sort('street_address') ?></th>
            <th><?= $this->Paginator->sort('suburb') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $customer): ?>
        <tr>
            <td><?= $this->Number->format($customer->id) ?></td>
            <td><?= h($customer->first_name) ?></td>
            <td><?= h($customer->last_name) ?></td>
            <td><?= h($customer->phone_number) ?></td>
            <td><?= h($customer->street_address) ?></td>
            <td><?= h($customer->suburb) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->CustomerID)]) ?>
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