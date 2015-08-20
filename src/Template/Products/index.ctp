<div id="page-wrapper">
<h2 class="sub-header">Products</h2>

<div class="table-responsive">
    <table class="table table-striped">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id', 'Products ID') ?></th>
            <th><?= $this->Paginator->sort('colour_id', 'Colour' ) ?></th>
            <th><?= $this->Paginator->sort('glazing_id', 'Glazing') ?></th>
            <th><?= $this->Paginator->sort('balrating_id', 'Bal Rating') ?></th>
            <th><?= $this->Paginator->sort('reveal_id') ?></th>
            <th><?= $this->Paginator->sort('winopentype_id', 'Window Open Type') ?></th>
            <th><?= $this->Paginator->sort('dooropentype_id', 'Door Open Type') ?></th>
            <th><?= $this->Paginator->sort('flyscreen_id', 'Fly Screen') ?></th>
            <th><?= $this->Paginator->sort('glasscomp_id', 'Glass Composition') ?></th>
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
                <?= $product->has('glazing') ? $this->Html->link($product->glazing->glazingtype, ['controller' => 'Glazings', 'action' => 'view', $product->glazing->id]) : '' ?>
            </td>
            <td>
                <?= $product->has('balrating') ? $this->Html->link($product->balrating->balrating, ['controller' => 'Balratings', 'action' => 'view', $product->balrating->id]) : '' ?>
            </td>
            <td>
                <?= $product->has('reveal') ? $this->Html->link($product->reveal->reveal, ['controller' => 'Reveals', 'action' => 'view', $product->reveal->id]) : '' ?>
            </td>
            <td>
                <?= $product->has('winopentype') ? $this->Html->link($product->winopentype->type, ['controller' => 'Winopentypes', 'action' => 'view', $product->winopentype->id]) : '' ?>
            </td>
            <td>
                <?= $product->has('dooropentype') ? $this->Html->link($product->dooropentype->type, ['controller' => 'Dooropentypes', 'action' => 'view', $product->dooropentype->id]) : '' ?>
            </td>
            <td>
                <?= $product->has('flyscreen') ? $this->Html->link($product->flyscreen->mesh, ['controller' => 'flyscreen', 'action' => 'view', $product->flyscreen->id]) : '' ?>
            </td>
            <td>
                <?= $product->has('glasscomp') ? $this->Html->link($product->glasscomp->type, ['controller' => 'glasscomp', 'action' => 'view', $product->glasscomp->id]) : '' ?>
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
</div>