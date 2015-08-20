<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

error_reporting(0);

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= $this->Html->charset() ?>
   

    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

   

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

<!-- Link the css files -->

    <!-- Sbadmincss -->
    <?php echo $this->Html->css('sidebar2.css');?>
    <?php echo $this->Html->css('sb-admin-2.css');?>
    <?php echo $this->Html->css('metisMenu.min.css');?>
    <?php echo $this->Html->css('../font-awesome.min.css');?>
    <?php echo $this->Html->css('custom.css');?>

    <!-- Bootstrap Core-->
    <?php echo $this->Html->css('bootstrap.min.css');?>
    <?php echo $this->Html->css('bootstrap-theme.css');?>
    <?php echo $this->Html->css('bootstrap.css');?>
   
    

     <!--Data Tables -->
    <?php echo $this->Html->css('dataTables.bootstrap.css');?>
    <?php echo $this->Html->css('dataTables.responsive.css');?>

    
<!-- Link the js files -->
    <?php echo $this->Html->script('jquery-1.11.2.min.js');?>
    <?php echo $this->Html->script('bootstrap.min.js');?>
    <?php echo $this->Html->script('bootstrap.js');?>
    <?php echo $this->Html->script('sb-admin-2.js');?>
    <?php echo $this->Html->script('metisMenu.min.js');?>

</head>

<!--My body goes here -->
<body>
<div id="wrapper">
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><b>Better Windows</b></a>
            </div>

        <div id="navbar" class="navbar-collapse collapse">
            <div class= "navbar-text pull-right">
                <?php $user = $this->Session->read('Auth.User');
                    if (!empty($user))
                    {
                        echo 'You are logged in as ', $user['firstname'], '  ', $user['lastname'], ' ';
                    };
                   
                    if($this->Session->check('Auth.User')){
                    
                    echo $this->Html->link( "Logout",   ['controller' => 'Users', 'action' => 'logout']); 
                    }else{
                        echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') ); 
                        }
                     
                    ?>

                </div>
          <ul class="nav navbar-nav">
            <li class=""><?= $this->Html->link(__('Users'), ['controller' =>'Users', 'action' => 'index']) ?></li>
            <li class=""><?= $this->Html->link(__('Customers'), ['controller' =>'Customers', 'action' => 'index']) ?></li>                                              
            <li class=""><?= $this->Html->link(__('Orderdetails'), ['controller' =>'Orderdetails', 'action' => 'index']) ?></li>                                         
            <li class=""><?= $this->Html->link(__('Products'), ['controller' =>'Products', 'action' => 'index']) ?></li>                                             
          </ul>

          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>

 <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                            <!-- /input-group -->
                        <li>
                            <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-th"></i> Dashboard</span>', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]); ?>
                        </li>
                        
                            <!-- /.nav-second-level -->
                        
                        <li>
                            <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-user"></i> User</span>', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]); ?>
                           
                            <ul class="nav nav-second-level">
                                <li>
                                    <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Users List</span>', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('New Users'), ['controller' => 'Users', 'action' => 'add']) ?></li>
                                </li>
                                
                            </ul>
                        </li>
                        <li>
                            <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-briefcase"></i> Customer</span>', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]); ?>
                            <ul class="nav nav-second-level">
                                <li>
                                    <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Customers List</span>', ['controller' => 'Customers', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                                <li>
                                    <?= $this->Html->link(__('New Customers'), ['controller' => 'Customers','action' => 'add']) ?>
                                </li>
                               
                            </ul>
                        </li>
                        <li>
                            <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-eye-open"></i> Order Details </span>', ['controller' => 'Users', 'action' => 'index'], ['escape' => false]); ?>
                            <ul class="nav nav-second-level">
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Order Details List</span>', ['controller' => 'Orderdetails', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                                <li>
                                 <?= $this->Html->link(__('New Order Details'), ['controller' => 'Orderdetails','action' => 'add']) ?>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li> 
                            <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-eye-open"></i> Products </span>', ['controller' => 'Products', 'action' => 'index'], ['escape' => false]); ?>
                            <ul class="nav nav-second-level">
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Product List</span>', ['controller' => 'Products', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                                <li>
                                 <?= $this->Html->link(__('New Products'), ['controller' => 'Products','action' => 'add']) ?>
                                </li>
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Colour List</span>', ['controller' => 'Colours', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                                <li>
                                 <?= $this->Html->link(__('New Colours'), ['controller' => 'Colours','action' => 'add']) ?>
                                </li>
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Glazing List</span>', ['controller' => 'Glazings', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                                <li>
                                 <?= $this->Html->link(__('New Glazings'), ['controller' => 'Glazings','action' => 'add']) ?>
                                </li>
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Bal Rating List</span>', ['controller' => 'Balratings', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                                <li>
                                 <?= $this->Html->link(__('New Bal Ratings'), ['controller' => 'Balratings','action' => 'add']) ?>
                                </li>
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Reveals List</span>', ['controller' => 'Reveals', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                                <li>
                                 <?= $this->Html->link(__('New Reveals'), ['controller' => 'Reveals','action' => 'add']) ?>
                                </li>
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Window Open Types List</span>', ['controller' => 'Winopentypes', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                                <li>
                                 <?= $this->Html->link(__('New Window Open Types'), ['controller' => 'Winopentypes','action' => 'add']) ?>
                                </li>
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Door Open Types List</span>', ['controller' => 'Dooropentypes', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                                <li>
                                 <?= $this->Html->link(__('New Door Open Types'), ['controller' => 'Dooropentypes','action' => 'add']) ?>
                                </li>
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Fly Screens List</span>', ['controller' => 'Flyscreens', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                                <li>
                                 <?= $this->Html->link(__('New Fly Screens'), ['controller' => 'Flyscreens','action' => 'add']) ?>
                                </li>
                                <li>
                                <?php 
                            echo $this->Html->link('<span> <i class="glyphicon glyphicon-list"></i> Glass Composition List</span>', ['controller' => 'Glasscomps', 'action' => 'index'], ['escape' => false]); ?>
                                </li>
                                <li>
                                 <?= $this->Html->link(__('New Glass Compositions'), ['controller' => 'Glasscomps','action' => 'add']) ?>
                                </li>

                            </ul>

                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>

    </nav>

    <!--
    <header>
        <div class="header-title">
            <span><?= $this->fetch('title') ?></span>
        </div>
        <div class="header-help">
            <span><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></span>
            <span><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></span>
        </div>
    </header> -->



    <div class="container-fluid">
    <div >

        <div>
            <?= $this->Flash->render() ?>
            <?= $this->Flash->render('auth') ?>


            <div class="row">
                <!-- Here's where I want my views to be displayed -->
                <?= $this->fetch('content') ?>
            </div>
        </div>
        
    </div>
</div>
</div>
</body>
</html>
