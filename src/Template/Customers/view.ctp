<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Employee
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Customer Id') ?></h4>
                        <p><?= h($customer->id) ?></p>
                        <!-- <h4 class="subheader"><?= __('ABN') ?></h4>
                        <p><?= h($customer->ABN) ?></p>
                        <h4 class="subheader"><?= __('Company name') ?></h4>
                        <p><?= h($customer->company_name) ?></p> -->
                        <h4 class="subheader"><?= __('First Name') ?></h4>
                        <p><?= h($customer->first_name) ?></p>
                        <h4 class="subheader"><?= __('Last Name') ?></h4>
                        <p><?= h($customer->last_name) ?></p>
                        <h4 class="subheader"><?= __('Street Address') ?></h4>
                        <p><?= h($customer->street_address) ?></p>
                        <h4 class="subheader"><?= __('Suburb') ?></h4>
                        <p><?= h($customer->suburb) ?></p>
                        <h4 class="subheader"><?= __('State') ?></h4>
                        <p><?= h($customer->state) ?></p>
                        <h4 class="subheader"><?= __('Phone Number') ?></h4>
                        <p><?= $this->Number->format($customer->phone_number) ?></p>
                        <h4 class="subheader"><?= __('Postcode') ?></h4>
                        <p><?= $this->Number->format($customer->postcode) ?></p>
                        <h4 class="subheader"><?= __('Created') ?></h4>
                        <p><?= h($customer->created) ?></p>
                        <h4 class="subheader"><?= __('Modified') ?></h4>
                        <p><?= h($customer->modified) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($customer->users)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Email') ?></th>
            <th><?= __('Password') ?></th>
            <th><?= __('Customer Id') ?></th>
            <th><?= __('Employee Id') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($customer->users as $users): ?>
        <tr>
            <td><?= h($users->id) ?></td>
            <td><?= h($users->email) ?></td>
            <td><?= h($users->password) ?></td>
            <td><?= h($users->customer_id) ?></td>
            <td><?= h($users->employee_id) ?></td>
            <td><?= h($users->created) ?></td>
            <td><?= h($users->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
