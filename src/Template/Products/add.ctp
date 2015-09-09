<?= $this->Form->create($product); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a Product
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?= $this->Form->input('colour_id', ['options' => $colours]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('balrating_id', ['options' => $balratings]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('itemtype_id', ['options' => $itemtypes]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('design_id', ['options' => $designs]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('reveal_id', ['options' => $reveals, 'empty' => true]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('flyscreenmesh_id', ['options' => $flyscreenmeshes, 'empty' => true]) ?>
                                </div>
                                <div class="form-group">
                                      <?= $this->Form->input('glazing_id', ['options' => $glazings]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('height'), ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('width', ['class' => 'form-control']) ?>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            <button type="submit" class="btn btn-default">Submit </button>
            <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>