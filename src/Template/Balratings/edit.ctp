<div id="page-wrapper">
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $balrating->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $balrating->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Balratings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="balratings form large-10 medium-9 columns">
    <?= $this->Form->create($balrating); ?>
    <fieldset>
        <legend><?= __('Edit Balrating') ?></legend>
        <?php
            echo $this->Form->input('balrating');
            echo $this->Form->input('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>