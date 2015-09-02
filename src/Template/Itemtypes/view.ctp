<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Itemtype'), ['action' => 'edit', $itemtype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Itemtype'), ['action' => 'delete', $itemtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemtype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Itemtypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemtype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Opentypes'), ['controller' => 'Opentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opentype'), ['controller' => 'Opentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="itemtypes view large-10 medium-9 columns">
    <h2><?= h($itemtype->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Type') ?></h6>
            <p><?= h($itemtype->type) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($itemtype->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Opentypes') ?></h4>
    <?php if (!empty($itemtype->opentypes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Itemtype Id') ?></th>
            <th><?= __('Name') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($itemtype->opentypes as $opentypes): ?>
        <tr>
            <td><?= h($opentypes->id) ?></td>
            <td><?= h($opentypes->itemtype_id) ?></td>
            <td><?= h($opentypes->name) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Opentypes', 'action' => 'view', $opentypes->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Opentypes', 'action' => 'edit', $opentypes->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Opentypes', 'action' => 'delete', $opentypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opentypes->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($itemtype->products)): ?>
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
        <?php foreach ($itemtype->products as $products): ?>
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
