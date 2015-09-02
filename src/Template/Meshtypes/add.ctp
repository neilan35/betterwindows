<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Meshtypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Flyscreenmeshes'), ['controller' => 'Flyscreenmeshes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenmesh'), ['controller' => 'Flyscreenmeshes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="meshtypes form large-10 medium-9 columns">
    <?= $this->Form->create($meshtype); ?>
    <fieldset>
        <legend><?= __('Add Meshtype') ?></legend>
        <?php
            echo $this->Form->input('type');
            echo $this->Form->input('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
