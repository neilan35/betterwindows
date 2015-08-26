<script>
    $(document).ready(function(){
    $('#tableIndex').DataTable();
    });
</script>

<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Roles
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Role Id') ?></h4>
                        <p><?= h($role->id) ?></p>
                        <h4 class="subheader"><?= __('Description') ?></h4>
                        <p><?= h($role->description) ?></p>
                        <h4 class="subheader"><?= __('Created') ?></h4>
                        <p><?= h($role->created) ?></p>
                        <h4 class="subheader"><?= __('Modified') ?></h4>
                        <p><?= h($role->modified) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="table-responsive">
<h4 class="subheader"><?= __('Related Employees') ?></h4>
    <?php if (!empty($role->employees)): ?>
     <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('First Name') ?></th>
            <th><?= __('Last Name') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($role->employees as $employees): ?>
        <tr>
            <td><?= h($employees->id) ?></td>
            <td><?= h($employees->first_name) ?></td>
            <td><?= h($employees->last_name) ?></td>    
            <td><?= h($employees->created) ?></td>
            <td><?= h($employees->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Employees', 'action' => 'view', $employees->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Employees', 'action' => 'edit', $employees->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employees', 'action' => 'delete', $employees->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employees->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
