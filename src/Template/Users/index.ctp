<div id="page-wrapper">
    
          <h2 class="sub-header">Users</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>

           <th><?= $this->Paginator->sort('id', 'ID') ?></th>
            <th><?= $this->Paginator->sort('firstname', 'First Name') ?></th>
            <th><?= $this->Paginator->sort('lastname', 'Last Name') ?></th>
            <th><?= $this->Paginator->sort('email', 'E-mail') ?></th>
            <th><?= $this->Paginator->sort('role', 'Role') ?></th>
            <th><?= $this->Paginator->sort('created', 'Created Date') ?></th>
            <th><?= $this->Paginator->sort('modified', 'Modified Date') ?></th>

            <th class="actions"><?= __('Actions') ?></th>

                </tr>
              </thead>
              <tbody>
               <?php foreach ($users as $users): ?>
        <tr>
            <td><?= $this->Number->format($users->id) ?></td>
            <td><?= h($users->firstname) ?></td>
            <td><?= h($users->lastname) ?></td>
            <td><?= h($users->email) ?></td>
            <td><?= h($users->role) ?></td>
            <td><?= h($users->created) ?></td>
            <td><?= h($users->modified) ?></td>
            
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $users->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $users->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
            </td>
        </tr>

                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
      
    
    

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
