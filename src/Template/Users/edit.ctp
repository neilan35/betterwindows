<div id="wrapper">

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profile Edit</h1>
                </div>
            </div>
           

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                  <?= $this->Form->create($user); ?>
                    <!-- /.panel -->
                    <div class="panel panel-primary">
                        <div class="panel-heading"> Edit User </div>

                        <!-- /.panel-heading -->
                            <div class="panel-body">
                                 
                                     <div class="col-lg-11">
                                     
                                        
                                        <form role="form">
                                        
                                                <div class="form-group">
                                                <?= $this->Form->input('firstname', ['class' => 'form-control']) ?>
                                                </div>
                                                <div class="form-group">
                                                <?= $this->Form->input('lastname', ['class' => 'form-control']) ?>
                                                </div>
                                                <div class="form-group">
                                                <?= $this->Form->input('email', ['readonly' => 'readonly', 'label' => 'Email cannot be changed!', 'class' => 'form-control']) ?>
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
              <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?> 
                </div>
              

                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Actions
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="list-group">
                               <div class="list-group-item">
                                <?= $this->Form->postLink(__('Delete'),
                                    ['action' => 'delete', $user->id],
                                    ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)])?>
                                    <span class="pull-right text-muted small"><em>Are you sure?</em>
                                    </span>
                                </div>
                                <a href="#" class="list-group-item">
                                    <i class="fa fa-twitter fa-fw"></i> List Users
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                </a>
                                                                                               
                            </div>
                            <!-- /.list-group -->
                            <!-- <a href="#" class="btn btn-default btn-block">View All Alerts</a> -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

