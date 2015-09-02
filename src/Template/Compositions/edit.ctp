<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $composition->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $composition->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Compositions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Glazings'), ['controller' => 'Glazings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glazing'), ['controller' => 'Glazings', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="compositions form large-10 medium-9 columns">
    <?= $this->Form->create($composition); ?>
    <fieldset>
        <legend><?= __('Edit Composition') ?></legend>
        <?php
            echo $this->Form->input('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
