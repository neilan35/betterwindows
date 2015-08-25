   <script>
        $(document).ready(function(){
            $('#tableIndex').DataTable();
        });
        </script>
        
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Employee
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Employee Id') ?></h4>
                        <p><?= h($employee->id) ?></p>
                        <h4 class="subheader"><?= __('First Name') ?></h4>
                        <p><?= h($employee->first_name) ?></p>
                        <h4 class="subheader"><?= __('Role') ?></h4>
                        <p><?= $employee->has('role') ? $this->Html->link($employee->role->description, ['controller' => 'Roles', 'action' => 'view', $employee->role->id]) : '' ?></p>
                        <h4 class="subheader"><?= __('Created') ?></h4>
                        <p><?= h($employee->created) ?></p>
                        <h4 class="subheader"><?= __('Modified') ?></h4>
                        <p><?= h($employee->modified) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="table-responsive">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Users') ?></h4>
    <?php if (!empty($employee->users)): ?>
    <table class="table table-hover" id="tableIndex">
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
        <?php foreach ($employee->users as $users): ?>
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
