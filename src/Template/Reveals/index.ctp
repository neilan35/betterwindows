        <script>
        $(document).ready(function(){
            $('#tableIndex').DataTable();
        });
        </script>

    <div class="table-responsive">
    <table class="table table-hover" id="tableIndex">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('type') ?></th>
            <th><?= $this->Paginator->sort('price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($reveals as $reveal): ?>
        <tr>
            <td><?= $this->Number->format($reveal->id) ?></td>
            <td><?= h($reveal->type) ?></td>
            <td><?= $this->Number->format($reveal->price) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $reveal->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reveal->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reveal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reveal->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
