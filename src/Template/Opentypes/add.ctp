<?= $this->Form->create($opentype); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add an Open Type
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="dropdown">
                                    <?= $this->Form->input('itemtype_id', ['class' => 'combobox form-control',
                                                       'options' => $itemtypes,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Item Types']);?>
                                </div>
                                <div class="form-group">
                                    <?= $this->Form->input('name', ['class' => 'form-control']) ?>
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