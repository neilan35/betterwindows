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
        <li><?= $this->Html->link(__('List Usages'), ['controller' => 'Usages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usage'), ['controller' => 'Usages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Glasstypes'), ['controller' => 'Glasstypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glasstype'), ['controller' => 'Glasstypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Compositions'), ['controller' => 'Compositions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Composition'), ['controller' => 'Compositions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Balratings'), ['controller' => 'Balratings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Balrating'), ['controller' => 'Balratings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="glazings form large-10 medium-9 columns">
    <?= $this->Form->create($glazing); ?>
    <fieldset>
        <legend><?= __('Edit Glazing') ?></legend>
        <?php
            echo $this->Form->input('usage_id', ['options' => $usages]);
            echo $this->Form->input('glasstype_id', ['options' => $glasstypes]);
            echo $this->Form->input('composition_id', ['options' => $compositions]);
            echo $this->Form->input('balrating_id', ['options' => $balratings]);
            echo $this->Form->input('obscurity');
            echo $this->Form->input('safety');
            echo $this->Form->input('price');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
