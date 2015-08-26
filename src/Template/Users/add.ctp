<?= $this->Form->create($user); ?>
<div class="row">
    <div class="col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add User
            </div>
            </br></br>
            <div class="customers form large-10 medium-9 columns" id="private">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form class="form-vertical" role="form">
                                <legend><?= __('Add User (Login Details)') ?></legend>
                                <div class="form-group">
                                <?= $this->Form->input('email', ['class' => 'form-control']) ?>
                                </div>
                                <div class="form-group">
                                <?= $this->Form->input('password', ['class' => 'form-control']) ?>
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
</div>

    
</div>
