<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Opentypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Itemtypes'), ['controller' => 'Itemtypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Itemtype'), ['controller' => 'Itemtypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Designs'), ['controller' => 'Designs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Design'), ['controller' => 'Designs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreenopentypes'), ['controller' => 'Flyscreenopentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenopentype'), ['controller' => 'Flyscreenopentypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="opentypes form large-10 medium-9 columns">
    <?= $this->Form->create($opentype); ?>
    <fieldset>
        <legend><?= __('Add Opentype') ?></legend>
        <?php
            echo $this->Form->input('itemtype_id', ['options' => $itemtypes, 'empty' => true]);
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
