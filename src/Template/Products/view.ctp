<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
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
<div class="products view large-10 medium-9 columns">
    <h2><?= h($product->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Colour') ?></h6>
            <p><?= $product->has('colour') ? $this->Html->link($product->colour->name, ['controller' => 'Colours', 'action' => 'view', $product->colour->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Balrating') ?></h6>
            <p><?= $product->has('balrating') ? $this->Html->link($product->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $product->balrating->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Itemtype') ?></h6>
            <p><?= $product->has('itemtype') ? $this->Html->link($product->itemtype->type, ['controller' => 'Itemtypes', 'action' => 'view', $product->itemtype->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Design') ?></h6>
            <p><?= $product->has('design') ? $this->Html->link($product->design->id, ['controller' => 'Designs', 'action' => 'view', $product->design->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Reveal') ?></h6>
            <p><?= $product->has('reveal') ? $this->Html->link($product->reveal->id, ['controller' => 'Reveals', 'action' => 'view', $product->reveal->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Flyscreenmesh') ?></h6>
            <p><?= $product->has('flyscreenmesh') ? $this->Html->link($product->flyscreenmesh->id, ['controller' => 'Flyscreenmeshes', 'action' => 'view', $product->flyscreenmesh->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Glazing') ?></h6>
            <p><?= $product->has('glazing') ? $this->Html->link($product->glazing->id, ['controller' => 'Glazings', 'action' => 'view', $product->glazing->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($product->id) ?></p>
            <h6 class="subheader"><?= __('Height') ?></h6>
            <p><?= $this->Number->format($product->height) ?></p>
            <h6 class="subheader"><?= __('Width') ?></h6>
            <p><?= $this->Number->format($product->width) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Quotes') ?></h4>
    <?php if (!empty($product->quotes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Product Id') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Quoteno') ?></th>
            <th><?= __('Item') ?></th>
            <th><?= __('Unitcost') ?></th>
            <th><?= __('Quantity') ?></th>
            <th><?= __('Installation') ?></th>
            <th><?= __('Installtype') ?></th>
            <th><?= __('Delivery') ?></th>
            <th><?= __('Deliverytype') ?></th>
            <th><?= __('Status') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($product->quotes as $quotes): ?>
        <tr>
            <td><?= h($quotes->id) ?></td>
            <td><?= h($quotes->product_id) ?></td>
            <td><?= h($quotes->customer_id) ?></td>
            <td><?= h($quotes->quoteno) ?></td>
            <td><?= h($quotes->item) ?></td>
            <td><?= h($quotes->unitcost) ?></td>
            <td><?= h($quotes->quantity) ?></td>
            <td><?= h($quotes->installation) ?></td>
            <td><?= h($quotes->installtype) ?></td>
            <td><?= h($quotes->delivery) ?></td>
            <td><?= h($quotes->deliverytype) ?></td>
            <td><?= h($quotes->status) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Quotes', 'action' => 'view', $quotes->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Quotes', 'action' => 'edit', $quotes->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Quotes', 'action' => 'delete', $quotes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotes->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
