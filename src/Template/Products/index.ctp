        <script>
        $(document).ready(function(){
            $('#tableIndex').DataTable();
        });
        </script>

    <div class="table-responsive">
    <table class="table table-hover" id="tableIndex">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('colour_id') ?></th>
            <th><?= $this->Paginator->sort('balrating_id') ?></th>
            <th><?= $this->Paginator->sort('itemtype_id') ?></th>
            <th><?= $this->Paginator->sort('design_id') ?></th>
            <th><?= $this->Paginator->sort('reveal_id') ?></th>
            <th><?= $this->Paginator->sort('flyscreenmesh_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $this->Number->format($product->id) ?></td>
            <td>
                <?= $product->has('colour') ? $this->Html->link($product->colour->name, ['controller' => 'Colours', 'action' => 'view', $product->colour->id]) : '' ?>
            </td>
            <td>
                <?= $product->has('balrating') ? $this->Html->link($product->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $product->balrating->id]) : '' ?>
            </td>
            <td>
                <?= $product->has('itemtype') ? $this->Html->link($product->itemtype->type, ['controller' => 'Itemtypes', 'action' => 'view', $product->itemtype->id]) : '' ?>
            </td>
            <td>
                <?= $product->has('design') ? $this->Html->link($product->design->id, ['controller' => 'Designs', 'action' => 'view', $product->design->id]) : '' ?>
            </td>
            <td>
                <?= $product->has('reveal') ? $this->Html->link($product->reveal->id, ['controller' => 'Reveals', 'action' => 'view', $product->reveal->id]) : '' ?>
            </td>
            <td>
                <?= $product->has('flyscreenmesh') ? $this->Html->link($product->flyscreenmesh->id, ['controller' => 'Flyscreenmeshes', 'action' => 'view', $product->flyscreenmesh->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
