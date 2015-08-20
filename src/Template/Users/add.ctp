<div id="page-wrapper">

<!-- Registrtion Form-->
<div class="users form col-lg-6">
    <?= $this->Form->create($user); ?>

   <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">User Registration</h1>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add User
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <form role="form">
                                        
                    <div class="form-group">
                     <?= $this->Form->input('firstname', ['class' => 'form-control']) ?>
                    </div>
                    <div class="form-group">
                     <?= $this->Form->input('lastname', ['class' => 'form-control']) ?>
                     </div>
                     <div class="form-group">
                    <?= $this->Form->input('email', ['class' => 'form-control']) ?>
                     </div>
                     <div class="form-group">
                     <?= $this->Form->input('password', ['class' => 'form-control']) ?>
                     </div>
                     <div class="form-group">
                      <?= $this->Form->input('confirm_password', ['class' => 'form-control', 'type' => 'password'])?>
                  </div>
                     <div class="form-group">
                 <?= $this->Form->input('role', ['class' => 'form-control',
              'options' => ['admin' => 'Admin', 
                 'customer' => 'Customer']
                 ]) ?>
                  </div>
      
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

           <button type="submit" class="btn btn-default">Submit Button</button>
             <?= $this->Form->end() ?>
            </div>
        </div>
</div>

