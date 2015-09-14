<?= $this->Form->create($design); ?>
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Designs
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                            <div class="col-lg-8">
                                <div class="dropdown">
                                    <?= $this->Form->input('opentype_id', ['class' => 'combobox form-control',
                                                       'options' => $opentypes,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Open Types']);?>
                                </div>
                                <div class="dropdown">
                                    <?= $this->Form->input('picture_id', ['class' => 'combobox form-control',
                                                       'options' => $pictures,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Pictures']);?>
                                </div>
                            </div>
                        </form>                
                    </div>
                </div>
                <?= $this->Form->button(__('Submit')) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>