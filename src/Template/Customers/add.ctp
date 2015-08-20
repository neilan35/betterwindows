<div id="page-wrapper">
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="customers form large-10 medium-9 columns">
    <?= $this->Form->create($customer); ?>
    <fieldset>
        <legend><?= __('Add Customer') ?></legend>

             <div class="form-group">
            <?= $this->Form->input('first_name', ['class' => 'form-control']) ?>
            </div>
             <div class="form-group">
            <?= $this->Form->input('last_name', ['class' => 'form-control']) ?>
            </div>
             <div class="form-group">
            <?= $this->Form->input('phone_number', ['class' => 'form-control']) ?>
            </div>
             <div class="form-group">
            <?= $this->Form->input('street_address', ['class' => 'form-control']) ?>
            </div>
             <div class="form-group">
            <?= $this->Form->input('suburb', ['class' => 'form-control']) ?>
            </div>
             <div class="form-group">
            <?= $this->Form->input('state', ['class' => 'form-control']) ?>
            </div>
             <div class="form-group">
            <?= $this->Form->input('postcode', ['class' => 'form-control']) ?>
            </div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</div>