<script>
        $(document).ready(function(){
            $('#tableIndex').DataTable();
        });
</script>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Flyscreenopentype'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Opentypes'), ['controller' => 'Opentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Opentype'), ['controller' => 'Opentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreentypes'), ['controller' => 'Flyscreentypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreentype'), ['controller' => 'Flyscreentypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Flyscreenmeshes'), ['controller' => 'Flyscreenmeshes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Flyscreenmesh'), ['controller' => 'Flyscreenmeshes', 'action' => 'add']) ?> </li>
    </ul>
</div>

<div class="table-responsive">
    <table class="table table-hover" id="tableIndex">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('opentype_id') ?></th>
            <th><?= $this->Paginator->sort('flyscreentype_id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($flyscreenopentypes as $flyscreenopentype): ?>
        <tr>
            <td><?= $this->Number->format($flyscreenopentype->id) ?></td>
            <td>
                <?= $flyscreenopentype->has('opentype') ? $this->Html->link($flyscreenopentype->opentype->name, ['controller' => 'Opentypes', 'action' => 'view', $flyscreenopentype->opentype->id]) : '' ?>
            </td>
            <td>
                <?= $flyscreenopentype->has('flyscreentype') ? $this->Html->link($flyscreenopentype->flyscreentype->type, ['controller' => 'Flyscreentypes', 'action' => 'view', $flyscreenopentype->flyscreentype->id]) : '' ?>
            </td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $flyscreenopentype->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $flyscreenopentype->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $flyscreenopentype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreenopentype->id)]) ?>
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
