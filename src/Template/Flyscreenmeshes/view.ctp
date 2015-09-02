<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Flyscreenmesh'), ['action' => 'edit', $flyscreenmesh->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Flyscreenmesh'), ['action' => 'delete', $flyscreenmesh->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreenmesh->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreenmeshes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenmesh'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Balratings'), ['controller' => 'Balratings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Balrating'), ['controller' => 'Balratings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Meshtypes'), ['controller' => 'Meshtypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Meshtype'), ['controller' => 'Meshtypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreenopentypes'), ['controller' => 'Flyscreenopentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenopentype'), ['controller' => 'Flyscreenopentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="flyscreenmeshes view large-10 medium-9 columns">
    <h2><?= h($flyscreenmesh->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Balrating') ?></h6>
            <p><?= $flyscreenmesh->has('balrating') ? $this->Html->link($flyscreenmesh->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $flyscreenmesh->balrating->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Meshtype') ?></h6>
            <p><?= $flyscreenmesh->has('meshtype') ? $this->Html->link($flyscreenmesh->meshtype->id, ['controller' => 'Meshtypes', 'action' => 'view', $flyscreenmesh->meshtype->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Flyscreenopentype') ?></h6>
            <p><?= $flyscreenmesh->has('flyscreenopentype') ? $this->Html->link($flyscreenmesh->flyscreenopentype->id, ['controller' => 'Flyscreenopentypes', 'action' => 'view', $flyscreenmesh->flyscreenopentype->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($flyscreenmesh->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($flyscreenmesh->products)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Colour Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Itemtype Id') ?></th>
            <th><?= __('Design Id') ?></th>
            <th><?= __('Reveal Id') ?></th>
            <th><?= __('Flyscreenmesh Id') ?></th>
            <th><?= __('Glazing Id') ?></th>
            <th><?= __('Height') ?></th>
            <th><?= __('Width') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($flyscreenmesh->products as $products): ?>
        <tr>
            <td><?= h($products->id) ?></td>
            <td><?= h($products->colour_id) ?></td>
            <td><?= h($products->balrating_id) ?></td>
            <td><?= h($products->itemtype_id) ?></td>
            <td><?= h($products->design_id) ?></td>
            <td><?= h($products->reveal_id) ?></td>
            <td><?= h($products->flyscreenmesh_id) ?></td>
            <td><?= h($products->glazing_id) ?></td>
            <td><?= h($products->height) ?></td>
            <td><?= h($products->width) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
