<div id="page-wrapper">
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->CustomerID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->CustomerID], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->CustomerID)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customers view large-10 medium-9 columns">
    <h2><?= h($customer->CustomerID) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('First Name') ?></h6>
            <p><?= h($customer->first_name) ?></p>
            <h6 class="subheader"><?= __('Last Name') ?></h6>
            <p><?= h($customer->last_name) ?></p>
            <h6 class="subheader"><?= __('Phone Number') ?></h6>
            <p><?= h($customer->phone_number) ?></p>
            <h6 class="subheader"><?= __('Street Address') ?></h6>
            <p><?= h($customer->street_address) ?></p>
            <h6 class="subheader"><?= __('Suburb') ?></h6>
            <p><?= h($customer->suburb) ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= h($customer->state) ?></p>
            <h6 class="subheader"><?= __('Postcode') ?></h6>
            <p><?= h($customer->postcode) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($customer->id) ?></p>
            <h6 class="subheader"><?= __('User Id') ?></h6>
            <p><?= $this->Number->format($customer->user_id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($customer->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($customer->modified) ?></p>
        </div>
    </div>
</div>
</div>