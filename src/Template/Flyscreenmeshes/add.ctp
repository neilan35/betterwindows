<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Flyscreenmeshes'), ['action' => 'index']) ?></li>
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
<div class="flyscreenmeshes form large-10 medium-9 columns">
    <?= $this->Form->create($flyscreenmesh); ?>
    <fieldset>
        <legend><?= __('Add Flyscreenmesh') ?></legend>
        <?php
            echo $this->Form->input('balrating_id', ['options' => $balratings]);
            echo $this->Form->input('meshtype_id', ['options' => $meshtypes]);
            echo $this->Form->input('flyscreenopentype_id', ['options' => $flyscreenopentypes]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
