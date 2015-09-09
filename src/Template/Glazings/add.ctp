<?= $this->Form->create($glazing); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a Glazing
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?= $this->Form->input('usage_id', ['options' => $usages]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('glasstype_id', ['options' => $glasstypes]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('composition_id', ['options' => $compositions]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('balrating_id', ['options' => $balratings]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('obscurity') ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('safety') ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('price') ?>
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