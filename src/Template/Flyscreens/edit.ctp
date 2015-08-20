<div id="page-wrapper">
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $flyscreen->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreen->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Flyscreens'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="flyscreens form large-10 medium-9 columns">
    <?= $this->Form->create($flyscreen); ?>
    <fieldset>
        <legend><?= __('Edit Flyscreen') ?></legend>
        <?php
            echo $this->Form->input('mesh');
            echo $this->Form->input('type');
            echo $this->Form->input('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>