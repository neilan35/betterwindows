<?= $this->Form->create($flyscreenmesh); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a Fly Screen Mesh
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <?= $this->Form->input('balrating_id', ['options' => $balratings]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('meshtype_id', ['options' => $meshtypes]) ?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('flyscreenopentype_id', ['options' => $flyscreenopentypes]) ?>
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