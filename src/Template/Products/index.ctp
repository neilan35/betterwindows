<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Colours'), ['controller' => 'Colours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Colour'), ['controller' => 'Colours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Balratings'), ['controller' => 'Balratings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Balrating'), ['controller' => 'Balratings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Itemtypes'), ['controller' => 'Itemtypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemtype'), ['controller' => 'Itemtypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Designs'), ['controller' => 'Designs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Design'), ['controller' => 'Designs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reveals'), ['controller' => 'Reveals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reveal'), ['controller' => 'Reveals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreenmeshes'), ['controller' => 'Flyscreenmeshes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenmesh'), ['controller' => 'Flyscreenmeshes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Glazings'), ['controller' => 'Glazings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glazing'), ['controller' => 'Glazings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Quotes'), ['controller' => 'Quotes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['controller' => 'Quotes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="products index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
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
                <?= $product->has('itemtype') ? $this->Html->link($product->itemtype->id, ['controller' => 'Itemtypes', 'action' => 'view', $product->itemtype->id]) : '' ?>
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
