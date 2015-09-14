<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Users
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('User Id') ?></h4>
                        <p><?= h($user->id) ?></p>
                        <h4 class="subheader"><?= __('Email Address') ?></h4>
                        <p><?= h($user->email) ?></p>
                        <h4 class="subheader"><?= __('Customer') ?></h4>
                        <p><?= $user->has('customer') ? $this->Html->link($user->customer->id, ['controller' => 'Customers', 'action' => 'view', $user->customer->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Employee') ?></h4>
                        <p><?= $user->has('employee') ? $this->Html->link($user->employee->id, ['controller' => 'Employees', 'action' => 'view', $user->employee->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Created') ?></h4>
                        <p><?= h($user->created) ?></p>
                        <h4 class="subheader"><?= __('Modified') ?></h4>
                        <p><?= h($user->modified) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>