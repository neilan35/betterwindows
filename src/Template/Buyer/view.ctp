<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Buyer'), ['action' => 'edit', $buyer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Buyer'), ['action' => 'delete', $buyer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $buyer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Buyer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Buyer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="buyer view large-10 medium-9 columns">
    <h2><?= h($buyer->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $buyer->has('user') ? $this->Html->link($buyer->user->name, ['controller' => 'Users', 'action' => 'view', $buyer->user->id]) : '' ?></p>
            <h6 class="subheader"><?= __('CustAddress') ?></h6>
            <p><?= h($buyer->CustAddress) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($buyer->id) ?></p>
        </div>
    </div>
</div>
