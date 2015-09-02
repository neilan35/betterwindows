<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Quote'), ['action' => 'edit', $quote->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Quote'), ['action' => 'delete', $quote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quote->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Quotes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Quote'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="quotes view large-10 medium-9 columns">
    <h2><?= h($quote->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Customer') ?></h6>
            <p><?= $quote->has('customer') ? $this->Html->link($quote->customer->first_name, ['controller' => 'Customers', 'action' => 'view', $quote->customer->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Product') ?></h6>
            <p><?= $quote->has('product') ? $this->Html->link($quote->product->id, ['controller' => 'Products', 'action' => 'view', $quote->product->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Quote No') ?></h6>
            <p><?= h($quote->quote_no) ?></p>
            <h6 class="subheader"><?= __('Item') ?></h6>
            <p><?= h($quote->item) ?></p>
            <h6 class="subheader"><?= __('Installtype') ?></h6>
            <p><?= h($quote->installtype) ?></p>
            <h6 class="subheader"><?= __('Deliverytype') ?></h6>
            <p><?= h($quote->deliverytype) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($quote->id) ?></p>
            <h6 class="subheader"><?= __('Unit Cost') ?></h6>
            <p><?= $this->Number->format($quote->unit_cost) ?></p>
            <h6 class="subheader"><?= __('Quantity') ?></h6>
            <p><?= $this->Number->format($quote->quantity) ?></p>
        </div>
        <div class="large-2 columns booleans end">
            <h6 class="subheader"><?= __('Installation') ?></h6>
            <p><?= $quote->installation ? __('Yes') : __('No'); ?></p>
            <h6 class="subheader"><?= __('Delivery') ?></h6>
            <p><?= $quote->delivery ? __('Yes') : __('No'); ?></p>
        </div>
    </div>
</div>
