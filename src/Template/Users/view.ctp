<div id="page-wrapper">

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Users'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Users'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Users'), ['action' => 'add']) ?> </li>
    </ul>
</div>



<div class="container">
    <h2><?= h($user->name) ?></h2>
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-default">
         <div class="panel-heading"> User Information </div>
         <div class="panel-body">
            <h5 class="subheader"><b><?= __('Firstname') ?></b></h5>
            <p><?= h($user->firstname) ?></p>
            <h5 class="subheader"><b><?= __('Lastname') ?></b></h5>
            <p><?= h($user->lastname) ?></p>
            <h5 class="subheader"><b><?= __('Email') ?></b></h5>
            <p><?= h($user->email) ?></p>
            <h5 class="subheader"><b><?= __('Role') ?></b></h5>
            <p><?= h($user->role) ?></p>
         </div>
        </div>
    </div>
      
    
        <div class="col-sm-2">
        <div class="panel panel-default">
         <div class="panel-heading"> User ID </div>
         <div class="panel-body">
            <h5 class="subheader"><b><?= __('Id') ?></b></h5>
            <p><?= $this->Number->format($user->id) ?></p>
         </div>
        </div>
        </div>

        <div class="col-sm-2">
        <div class="panel panel-default">
         <div class="panel-heading">Date</div>
         <div class="panel-body">
            <h5 class="subheader"><b><?= __('Created') ?></b></h5>
            <p><?= h($user->created) ?></p>
            <h5 class="subheader"><b><?= __('Modified') ?></b></h5>
            <p><?= h($user->modified) ?></p>
         </div>
        </div>
        </div>

         <div class="col-sm-2">
                    <div class="panel panel-info">
                        <div class="panel-heading"><i class="fa fa-bell fa-fw"></i> Actions
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
    </div>
</div>
     
 </div>