<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Usage'), ['action' => 'edit', $usage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usage'), ['action' => 'delete', $usage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usage'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Glazings'), ['controller' => 'Glazings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glazing'), ['controller' => 'Glazings', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="usages view large-10 medium-9 columns">
    <h2><?= h($usage->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Efficiency') ?></h6>
            <p><?= h($usage->efficiency) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($usage->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Glazings') ?></h4>
    <?php if (!empty($usage->glazings)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Usage Id') ?></th>
            <th><?= __('Glasstype Id') ?></th>
            <th><?= __('Composition Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Obscurity') ?></th>
            <th><?= __('Safety') ?></th>
            <th><?= __('Price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($usage->glazings as $glazings): ?>
        <tr>
            <td><?= h($glazings->id) ?></td>
            <td><?= h($glazings->usage_id) ?></td>
            <td><?= h($glazings->glasstype_id) ?></td>
            <td><?= h($glazings->composition_id) ?></td>
            <td><?= h($glazings->balrating_id) ?></td>
            <td><?= h($glazings->obscurity) ?></td>
            <td><?= h($glazings->safety) ?></td>
            <td><?= h($glazings->price) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Glazings', 'action' => 'view', $glazings->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Glazings', 'action' => 'edit', $glazings->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Glazings', 'action' => 'delete', $glazings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $glazings->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>