
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        

    <title>Better Windows Prototype</title>

    <!-- Bootstrap Core CSS -->
    <?php echo $this->Html->css('bootstrap.min.css');?>
    <?php echo $this->Html->css('bootstrap.css');?>

    <!-- Custom CSS -->
    <?php echo $this->Html->css('modern-business.css');?>
    <?php echo $this->Html->css('custom.css');?>
    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- jQuery -->
    <?php echo $this->Html->script('jquery-1.11.2.min.js');?>

    <!-- Bootstrap Core JavaScript -->
    <?php echo $this->Html->script('bootstrap.min.js');?>

</head>

<body>

    <div class="container">
       <div id="logonav">
        <?php echo $this->Html->image('better_windows_final.jpg', ['alt' => 'CakePHP']); ?>
       </div>
    </div>

    <!-- Navigation -->
    <div class="navbar-wrapper">
        <nav class="navbar navbar-custom">
           <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><b>BETTER WINDOWS</b></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href=""><span class="glyphicon glyphicon-home"></span> HOME</a>
                        </li>
                        <li>
                            <a href="#">ABOUT US</a>
                        </li>
                        <li>
                            <a href="#">GALLERY</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCTS <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="portfolio-1-col.html">Double Glazed Windows</a>
                                </li>
                                <li>
                                    <a href="portfolio-2-col.html">Triple Glazed Windows</a>
                                </li>
                                <li>
                                    <a href="portfolio-3-col.html">Awning Windows </a>
                                </li>
                                <li>
                                    <a href="portfolio-4-col.html">Tilt Only Windwows</a>
                                </li>
                                <li>
                                    <a href="portfolio-item.html">Tilt & Turn Window & Doors</a>
                                </li>
                                <li>
                                    <a href="portfolio-item.html">Tilt & Slide Window & Doors</a>
                                </li>
                                <li>
                                    <a href="portfolio-item.html">Bi-fold Windows & doors</a>
                                </li>
                                <li>
                                    <a href="portfolio-item.html">French Window & Doors</a>
                                </li>
                                <li>
                                    <a href="portfolio-item.html">Lift & Slide Doors</a>
                                </li>
                                <li>
                                    <a href="portfolio-item.html">Energy Efficient Windows</a>
                                </li>
                                <li>
                                    <a href="portfolio-item.html">Fire Rated Window & Doors</a>
                                </li>
                                <li>
                                    <a href="portfolio-item.html">Fly Screens</a>
                                </li>
                                <li>
                                    <a href="portfolio-item.html">Colour Range</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">BENEFITS</a></a>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTACT US <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="blog-home-1.html">Blog Home 1</a>
                                </li>
                                <li>
                                    <a href="blog-home-2.html">Blog Home 2</a>
                                </li>
                                <li>
                                    <a href="blog-post.html">Blog Post</a>
                                </li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">TESTIMONIALS<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="blog-home-1.html">Blog Home 1</a>
                                </li>
                                <li>
                                    <a href="blog-home-2.html">Blog Home 2</a>
                                </li>
                                <li>
                                    <a href="blog-post.html">Blog Post</a>
                                </li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list"></span> DOWNLOADS<b class="caret"></b>
                                 
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="full-width.html">Full Width Page</a>
                                </li>
                                <li>
                                    <a href="sidebar.html">Sidebar Page</a>
                                </li>
                                <li>
                                    <a href="faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="404.html">404</a>
                                </li>
                                <li>
                                    <a href="pricing.html">Pricing Table</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
        <!-- /.container -->
    </nav>
    </div>
</div>
<!--page content-->
<div class="container">

                    <div id="bw-carousel" class="carousel slide"><!-- class of slide for animation -->
              <div class="carousel-inner">
                <div class="item active"><!-- class of active since it's the first item -->
                 <?php echo $this->Html->image('img1.jpg', ['alt' => 'CakePHP']); ?>
                  <div class="carousel-caption">
                    <p>Caption text here</p>
                  </div>
                </div>
                <div class="item">
                   <?php echo $this->Html->image('img2.jpg', ['alt' => 'CakePHP']); ?>
                  <div class="carousel-caption">
                    <p>Caption text here</p>
                  </div>
                </div>
                <div class="item">
                   <?php echo $this->Html->image('img3.jpg', ['alt' => 'CakePHP']); ?>
                  <div class="carousel-caption">
                    <p>Caption text here</p>
                  </div>
                </div>
                <div class="item">
                   <?php echo $this->Html->image('img4.jpg', ['alt' => 'CakePHP']); ?>
                  <div class="carousel-caption">
                    <p>Caption text here</p>
                  </div>
                </div>
              </div><!-- /.carousel-inner -->
              <!--  Next and Previous controls below
                    href values must reference the id for this carousel -->
                 <a class="left carousel-control" href="#bw-carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                 <a class="right carousel-control" href="#bw-carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!-- /.carousel -->
</div>







        
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
<!-- Script to Activate the Carousel -->
        <script>
        $(document).ready(function(){
        $('.carousel').carousel({
            interval: 2000 //changes the speed
            });
        });
        </script>
    </body>
</html>