<div id="page-wrapper">
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
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
<div class="products view large-10 medium-9 columns">
    <h2><?= h($product->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Colour') ?></h6>
            <p><?= $product->has('colour') ? $this->Html->link($product->colour->name, ['controller' => 'Colours', 'action' => 'view', $product->colour->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Glazing') ?></h6>
            <p><?= $product->has('glazing') ? $this->Html->link($product->glazing->id, ['controller' => 'Glazings', 'action' => 'view', $product->glazing->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Balrating') ?></h6>
            <p><?= $product->has('balrating') ? $this->Html->link($product->balrating->id, ['controller' => 'Balratings', 'action' => 'view', $product->balrating->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Reveal') ?></h6>
            <p><?= $product->has('reveal') ? $this->Html->link($product->reveal->id, ['controller' => 'Reveals', 'action' => 'view', $product->reveal->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Winopentype') ?></h6>
            <p><?= $product->has('winopentype') ? $this->Html->link($product->winopentype->id, ['controller' => 'Winopentypes', 'action' => 'view', $product->winopentype->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Dooropentype') ?></h6>
            <p><?= $product->has('dooropentype') ? $this->Html->link($product->dooropentype->id, ['controller' => 'Dooropentypes', 'action' => 'view', $product->dooropentype->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Flyscreen') ?></h6>
            <p><?= $product->has('flyscreen') ? $this->Html->link($product->flyscreen->id, ['controller' => 'Flyscreens', 'action' => 'view', $product->flyscreen->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Glasscomp') ?></h6>
            <p><?= $product->has('glasscomp') ? $this->Html->link($product->glasscomp->id, ['controller' => 'Glasscomps', 'action' => 'view', $product->glasscomp->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($product->id) ?></p>
        </div>
    </div>
</div>
</div>