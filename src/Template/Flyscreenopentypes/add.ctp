<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Flyscreenopentypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opentypes'), ['controller' => 'Opentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opentype'), ['controller' => 'Opentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreentypes'), ['controller' => 'Flyscreentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreentype'), ['controller' => 'Flyscreentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreenmeshes'), ['controller' => 'Flyscreenmeshes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenmesh'), ['controller' => 'Flyscreenmeshes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="flyscreenopentypes form large-10 medium-9 columns">
    <?= $this->Form->create($flyscreenopentype); ?>
    <fieldset>
        <legend><?= __('Add Flyscreenopentype') ?></legend>
        <?php
            echo $this->Form->input('opentype_id', ['options' => $opentypes]);
            echo $this->Form->input('flyscreentype_id', ['options' => $flyscreentypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
