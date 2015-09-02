<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Glazing'), ['action' => 'edit', $glazing->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Glazing'), ['action' => 'delete', $glazing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $glazing->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Glazings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glazing'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usages'), ['controller' => 'Usages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usage'), ['controller' => 'Usages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Glasstypes'), ['controller' => 'Glasstypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glasstype'), ['controller' => 'Glasstypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Compositions'), ['controller' => 'Compositions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Composition'), ['controller' => 'Compositions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Balratings'), ['controller' => 'Balratings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Balrating'), ['controller' => 'Balratings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="glazings view large-10 medium-9 columns">
    <h2><?= h($glazing->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Usage') ?></h6>
            <p><?= $glazing->has('usage') ? $this->Html->link($glazing->usage->id, ['controller' => 'Usages', 'action' => 'view', $glazing->usage->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Glasstype') ?></h6>
            <p><?= $glazing->has('glasstype') ? $this->Html->link($glazing->glasstype->id, ['controller' => 'Glasstypes', 'action' => 'view', $glazing->glasstype->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Composition') ?></h6>
            <p><?= $glazing->has('composition') ? $this->Html->link($glazing->composition->name, ['controller' => 'Compositions', 'action' => 'view', $glazing->composition->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Balrating') ?></h6>
            <p><?= $glazing->has('balrating') ? $this->Html->link($glazing->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $glazing->balrating->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($glazing->id) ?></p>
            <h6 class="subheader"><?= __('Price') ?></h6>
            <p><?= $this->Number->format($glazing->price) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Obscurity') ?></h6>
            <p><?= $glazing->obscurity ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Safety') ?></h6>
            <p><?= $glazing->safety ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($glazing->products)): ?>
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
        <?php foreach ($glazing->products as $products): ?>
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
