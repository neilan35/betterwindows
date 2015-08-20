<div id="page-wrapper">
    <div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $glazing->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $glazing->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Glazings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="glazings form large-10 medium-9 columns">
    <?= $this->Form->create($glazing); ?>
    <fieldset>
        <legend><?= __('Edit Glazing') ?></legend>
        <?php
            echo $this->Form->input('glazingtype'); 
            echo $this->Form->input('obscurity');
            echo $this->Form->input('safetyglazing');
            echo $this->Form->input('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>