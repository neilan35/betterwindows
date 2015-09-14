<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Fly Screen Mesh
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Id') ?></h4>
                        <p><?= $this->Number->format($glasscomp->id) ?></p>
                        <h4 class="subheader"><?= __('type') ?></h4>
                        <p><?= h($glasscomp->type) ?></p>
                        <h4 class="subheader"><?= __('Price') ?></h4>
                        <p><?= $this->Number->format($glasscomp->price) ?></p>
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
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($glasscomp->products)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Colour Id') ?></th>
            <th><?= __('Glazing Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Reveal Id') ?></th>
            <th><?= __('Winopentype Id') ?></th>
            <th><?= __('Dooropentype Id') ?></th>
            <th><?= __('Flyscreen Id') ?></th>
            <th><?= __('Glasscomp Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($glasscomp->products as $products): ?>
        <tr>
            <td><?= h($products->id) ?></td>
            <td><?= h($products->colour_id) ?></td>
            <td><?= h($products->glazing_id) ?></td>
            <td><?= h($products->balrating_id) ?></td>
            <td><?= h($products->reveal_id) ?></td>
            <td><?= h($products->winopentype_id) ?></td>
            <td><?= h($products->dooropentype_id) ?></td>
            <td><?= h($products->flyscreen_id) ?></td>
            <td><?= h($products->glasscomp_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
</div>