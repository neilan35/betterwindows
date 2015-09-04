<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Flyscreentypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Flyscreenopentypes'), ['controller' => 'Flyscreenopentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenopentype'), ['controller' => 'Flyscreenopentypes', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="flyscreentypes form large-10 medium-9 columns">
    <?= $this->Form->create($flyscreentype); ?>
    <fieldset>
        <legend><?= __('Add Flyscreentype') ?></legend>
        <?php
            echo $this->Form->input('type');
            echo $this->Form->input('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>