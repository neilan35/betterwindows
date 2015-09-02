<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $glasstype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $glasstype->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Glasstypes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Glazings'), ['controller' => 'Glazings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glazing'), ['controller' => 'Glazings', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="glasstypes form large-10 medium-9 columns">
    <?= $this->Form->create($glasstype); ?>
    <fieldset>
        <legend><?= __('Edit Glasstype') ?></legend>
        <?php
            echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
