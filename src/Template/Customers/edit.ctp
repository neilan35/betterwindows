<?= $this->Form->create($customer); ?>
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Edit Customers
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-horizontal" role="form">
                            <div class="col-lg-8">
                                <div class="form-group">
                                <?= $this->Form->input('first_name', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                <?= $this->Form->input('last_name', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                <?= $this->Form->input('phone_number', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                <?= $this->Form->input('street_address', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                <?= $this->Form->input('suburb', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                <?= $this->Form->input('postcode', ['class' => 'form-control']) ?>
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
