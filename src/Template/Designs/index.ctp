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
            <th><?= $this->Paginator->sort('opentype_id') ?></th>
            <th><?= $this->Paginator->sort('picture_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($designs as $design): ?>
        <tr>
            <td><?= $this->Number->format($design->id) ?></td>
            <td>
                <?= $design->has('opentype') ? $this->Html->link($design->opentype->name, ['controller' => 'Opentypes', 'action' => 'view', $design->opentype->id]) : '' ?>
            </td>
            <td>
                <?= $design->has('picture') ? $this->Html->link($design->picture->id, ['controller' => 'Pictures', 'action' => 'view', $design->picture->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $design->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $design->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $design->id], ['confirm' => __('Are you sure you want to delete # {0}?', $design->id)]) ?>
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
