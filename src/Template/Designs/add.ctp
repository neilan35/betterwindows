<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Designs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Opentypes'), ['controller' => 'Opentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opentype'), ['controller' => 'Opentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pictures'), ['controller' => 'Pictures', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Picture'), ['controller' => 'Pictures', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="designs form large-10 medium-9 columns">
    <?= $this->Form->create($design); ?>
    <fieldset>
        <legend><?= __('Add Design') ?></legend>
        <?php
            echo $this->Form->input('opentype_id', ['options' => $opentypes, 'empty' => true]);
            echo $this->Form->input('picture_id', ['options' => $pictures, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
