<?= $this->Form->create($flyscreenopentype); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a Fly Screen Open Type
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?= $this->Form->input('opentype_id', ['options' => $opentypes]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('flyscreentype_id', ['options' => $flyscreentypes]) ?>
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