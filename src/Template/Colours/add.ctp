<?= $this->Form->create($colour); ?>
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add a Colour
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-8">
                        <form class="form-horizontal" role="form">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="dropdown">
                                    <?= $this->Form->input('category_id', ['class' => 'combobox form-control',
                                                       'options' => $categories,
                                                       'empty'=> true,
                                                       'required' => true,
                                                       'label' => 'Categories']);?>

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