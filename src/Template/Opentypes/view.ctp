<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Opentype'), ['action' => 'edit', $opentype->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Opentype'), ['action' => 'delete', $opentype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $opentype->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Opentypes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opentype'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Itemtypes'), ['controller' => 'Itemtypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemtype'), ['controller' => 'Itemtypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Designs'), ['controller' => 'Designs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Design'), ['controller' => 'Designs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreenopentypes'), ['controller' => 'Flyscreenopentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenopentype'), ['controller' => 'Flyscreenopentypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="opentypes view large-10 medium-9 columns">
    <h2><?= h($opentype->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Itemtype') ?></h6>
            <p><?= $opentype->has('itemtype') ? $this->Html->link($opentype->itemtype->id, ['controller' => 'Itemtypes', 'action' => 'view', $opentype->itemtype->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($opentype->name) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($opentype->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Designs') ?></h4>
    <?php if (!empty($opentype->designs)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Opentype Id') ?></th>
            <th><?= __('Picture Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($opentype->designs as $designs): ?>
        <tr>
            <td><?= h($designs->id) ?></td>
            <td><?= h($designs->opentype_id) ?></td>
            <td><?= h($designs->picture_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Designs', 'action' => 'view', $designs->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Designs', 'action' => 'edit', $designs->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Designs', 'action' => 'delete', $designs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $designs->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Flyscreenopentypes') ?></h4>
    <?php if (!empty($opentype->flyscreenopentypes)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Opentype Id') ?></th>
            <th><?= __('Flyscreentype Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($opentype->flyscreenopentypes as $flyscreenopentypes): ?>
        <tr>
            <td><?= h($flyscreenopentypes->id) ?></td>
            <td><?= h($flyscreenopentypes->opentype_id) ?></td>
            <td><?= h($flyscreenopentypes->flyscreentype_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Flyscreenopentypes', 'action' => 'view', $flyscreenopentypes->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Flyscreenopentypes', 'action' => 'edit', $flyscreenopentypes->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flyscreenopentypes', 'action' => 'delete', $flyscreenopentypes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreenopentypes->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
