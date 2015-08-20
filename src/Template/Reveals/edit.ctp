<div id="page-wrapper">
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reveal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reveal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reveals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="reveals form large-10 medium-9 columns">
    <?= $this->Form->create($reveal); ?>
    <fieldset>
        <legend><?= __('Edit Reveal') ?></legend>
        <?php
            echo $this->Form->input('reveal');
            echo $this->Form->input('revealsize');
            echo $this->Form->input('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>