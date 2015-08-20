<div id="page-wrapper">
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Colours'), ['controller' => 'Colours', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Colour'), ['controller' => 'Colours', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Glazings'), ['controller' => 'Glazings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glazing'), ['controller' => 'Glazings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Balratings'), ['controller' => 'Balratings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Balrating'), ['controller' => 'Balratings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reveals'), ['controller' => 'Reveals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reveal'), ['controller' => 'Reveals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Winopentypes'), ['controller' => 'Winopentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Winopentype'), ['controller' => 'Winopentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dooropentypes'), ['controller' => 'Dooropentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dooropentype'), ['controller' => 'Dooropentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreens'), ['controller' => 'Flyscreens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreen'), ['controller' => 'Flyscreens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Glasscomps'), ['controller' => 'Glasscomps', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Glasscomp'), ['controller' => 'Glasscomps', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="products form large-10 medium-9 columns">
    <?= $this->Form->create($product); ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->input('colour_id', ['options' => $colours]);
            echo $this->Form->input('glazing_id', ['options' => $glazings]);
            echo $this->Form->input('balrating_id', ['options' => $balratings]);
            echo $this->Form->input('reveal_id', ['options' => $reveals]);
            echo $this->Form->input('winopentype_id', ['options' => $winopentypes]);
            echo $this->Form->input('dooropentype_id', ['options' => $dooropentypes]);
            echo $this->Form->input('flyscreen_id', ['options' => $flyscreens]);
            echo $this->Form->input('glasscomp_id', ['options' => $glasscomps]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>