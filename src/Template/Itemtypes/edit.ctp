<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $itemtype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itemtype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Itemtypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opentypes'), ['controller' => 'Opentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opentype'), ['controller' => 'Opentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="itemtypes form large-10 medium-9 columns">
    <?= $this->Form->create($itemtype); ?>
    <fieldset>
        <legend><?= __('Edit Itemtype') ?></legend>
        <?php
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
