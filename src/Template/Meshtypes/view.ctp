<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Mesh Types
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Id') ?></h4>
                        <p><?= $this->Number->format($meshtype->id) ?></p>
                        <h4 class="subheader"><?= __('Type') ?></h4>
                        <p><?= h($meshtype->type) ?></p>
                        <h4 class="subheader"><?= __('Price') ?></h4>
                        <p><?= $this->Number->format($meshtype->price) ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#tableIndex').DataTable();
    });
</script>

<div class="related row">
    <div class="table-responsive">
    <h4 class="subheader"><?= __('Related Flyscreenmeshes') ?></h4>
    <?php if (!empty($meshtype->flyscreenmeshes)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Meshtype Id') ?></th>
            <th><?= __('Flyscreenopentype Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($meshtype->flyscreenmeshes as $flyscreenmeshes): ?>
        <tr>
            <td><?= h($flyscreenmeshes->id) ?></td>
            <td><?= h($flyscreenmeshes->balrating_id) ?></td>
            <td><?= h($flyscreenmeshes->meshtype_id) ?></td>
            <td><?= h($flyscreenmeshes->flyscreenopentype_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Flyscreenmeshes', 'action' => 'view', $flyscreenmeshes->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Flyscreenmeshes', 'action' => 'edit', $flyscreenmeshes->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Flyscreenmeshes', 'action' => 'delete', $flyscreenmeshes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $flyscreenmeshes->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
