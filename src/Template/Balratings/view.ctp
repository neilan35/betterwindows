<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                View Balrating
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="subheader"><?= __('Bal Rating') ?></h4>
                        <p><?= h($balrating->balrating) ?></p>
                        <h4 class="subheader"><?= __('Bal Rating Id') ?></h4>
                        <p><?= $this->Number->format($balrating->id) ?></p>
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
    <thead>
    <h4 class="subheader"><?= __('Related Flyscreenmeshes') ?></h4>
    <?php if (!empty($balrating->flyscreenmeshes)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Meshtype Id') ?></th>
            <th><?= __('Flyscreenopentype Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($balrating->flyscreenmeshes as $flyscreenmeshes): ?>
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
<div class="related row">
    <div class="table-responsive">
    <h4 class="subheader"><?= __('Related Glazings') ?></h4>
    <?php if (!empty($balrating->glazings)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Usage Id') ?></th>
            <th><?= __('Glasstype Id') ?></th>
            <th><?= __('Composition Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Obscurity') ?></th>
            <th><?= __('Safety') ?></th>
            <th><?= __('Price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($balrating->glazings as $glazings): ?>
        <tr>
            <td><?= h($glazings->id) ?></td>
            <td><?= h($glazings->usage_id) ?></td>
            <td><?= h($glazings->glasstype_id) ?></td>
            <td><?= h($glazings->composition_id) ?></td>
            <td><?= h($glazings->balrating_id) ?></td>
            <td><?= h($glazings->obscurity) ?></td>
            <td><?= h($glazings->safety) ?></td>
            <td><?= h($glazings->price) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Glazings', 'action' => 'view', $glazings->id]) ?>
                <?= $this->Html->link(__('Edit'), ['controller' => 'Glazings', 'action' => 'edit', $glazings->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Glazings', 'action' => 'delete', $glazings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $glazings->id)]) ?>
            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="table-responsive">
    <h4 class="subheader"><?= __('Related Products') ?></h4>
    <?php if (!empty($balrating->products)): ?>
    <table class="table table-hover" id="tableIndex">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Colour Id') ?></th>
            <th><?= __('Balrating Id') ?></th>
            <th><?= __('Itemtype Id') ?></th>
            <th><?= __('Design Id') ?></th>
            <th><?= __('Reveal Id') ?></th>
            <th><?= __('Flyscreenmesh Id') ?></th>
            <th><?= __('Glazing Id') ?></th>
            <th><?= __('Height') ?></th>
            <th><?= __('Width') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($balrating->products as $products): ?>
        <tr>
            <td><?= h($products->id) ?></td>
            <td><?= h($products->colour_id) ?></td>
            <td><?= h($products->balrating_id) ?></td>
            <td><?= h($products->itemtype_id) ?></td>
            <td><?= h($products->design_id) ?></td>
            <td><?= h($products->reveal_id) ?></td>
            <td><?= h($products->flyscreenmesh_id) ?></td>
            <td><?= h($products->glazing_id) ?></td>
            <td><?= h($products->height) ?></td>
            <td><?= h($products->width) ?></td>

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
