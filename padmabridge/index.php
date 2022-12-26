<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <!-- slider part -->
    <header class="container-fluid slidbar px-0">
        <div class="row">
        <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
        <?php $qry= new WP_Query(array(
                        'post_type'=>'post',
                        'category_name'=>'slider'
                    ));?>


                <div class="carousel-inner">
                    <?php 
                        $x=0;
                        while($qry->  have_posts()){
                            $qry->  the_post();
                            $x++;
                        
                    ?>
                    <div class="carousel-item <?=($x==1)?'active':''?>">
                        <?php the_post_thumbnail();?>
                    </div>
                    <?php }?>
                </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
    </header>
    <!-- slider part -->
    <!-- logo part -->
    <section class="container-fluid logotop">
        <div class="row">
            <div class="col-sm-6 ">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-6 text-end">
                <?php dynamic_sidebar('logo2');?>
            </div>
        </div>
    </section>
    <!-- logo part -->

    <!-- menu part -->
    <section class="container-fluid text-center menu">
        <div class="container menu1 navbar-expand">
            <?php wp_nav_menu(array(
                'theme_location'=>'tm',
                'menu_class'=>'navbar-nav'
            ))?>
        </div>
    </section>
    <!-- menu part -->

    <section class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="news text-center">
                        <?php dynamic_sidebar('npart');?>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </section>
    <!-- card part -->
    <section class="container-fluid text-center mt-5">
        <div class="row hero">
            <div class="col-sm-4 ">
                <div class="card" style="width:;">
                      <?php dynamic_sidebar('ci1');?>
                    <div class="card-body">
                        <?php dynamic_sidebar('c1');?>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card" style="width:;">
                      <?php dynamic_sidebar('ci2');?>
                    <div class="card-body">
                        <?php dynamic_sidebar('c2');?>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card" style="width:;">
                      <?php dynamic_sidebar('ci3');?>
                    <div class="card-body">
                        <?php dynamic_sidebar('c3');?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- card part -->
    <!-- rechant photo -->
    <section class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-5 text-end">
                <?php dynamic_sidebar('line1');?>
            </div>

            <div class="col-sm-2 text-center">
                <h3>Recent Photos</h3>
                <p>Some latest project pictures</p>
            </div>

            <div class="col-sm-5">
            <?php dynamic_sidebar('line2');?>
            </div>
        </div>
    </section>
    <!-- rechant photo -->
    <!-- bridge photo part -->
    <div class="cont">
    <section class="container-fluid text-center mt-5">
        <div class="row">


            <div class="col-sm-3">
                <div class="card" style="width: 15rem;;">
                        <?php dynamic_sidebar('brimg');?>
                    <div class="card-body">
                        <?php dynamic_sidebar('brbody');?>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card" style="width: 15rem;">
                        <?php dynamic_sidebar('brimg');?>
                    <div class="card-body">
                        <?php dynamic_sidebar('brbody');?>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card" style="width: 15rem;">
                        <?php dynamic_sidebar('brimg');?>
                    <div class="card-body">
                        <?php dynamic_sidebar('brbody');?>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card" style="width: 15rem;">
                        <?php dynamic_sidebar('brimg');?>
                    <div class="card-body">
                        <?php dynamic_sidebar('brbody');?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </div>
    <!-- bridge photo part -->

 <!-- rechant photo -->
    <section class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-5 text-end">
                <?php dynamic_sidebar('line1');?>
            </div>

            <div class="col-sm-2 text-center">
                <h4>NEWS & EVENTS</h4>
                <p>CLICK HERE TO VIEW ALL</p>
            </div>

            <div class="col-sm-5">
            <?php dynamic_sidebar('line2');?>
            </div>
        </div>
    </section>
<!-- rechant photo -->

    <!-- bottom slider -->
    <section class="container bot mt-5">
        <div class="row ">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <?php $qry= new WP_Query(array(
                        'post_type'=>'post',
                        'category_name'=>'fast'
                    ));?>
            <div class="carousel-inner">
                <?php
                    $x=0;
                    while($qry-> have_posts()){
                        $qry-> the_post();
                        $x++;
                ?>

                <div class="carousel-item <?=($x==1)?'active':''?>">
                      <?php the_title();?>
                    
                </div>
                <?php }?>
             </div>
        </div>
        </div>
    </section>
    <!-- bottom slider -->

    <!-- footer part -->
    <footer class="container-fluid mt-5 pt-5 pb-3 foot">
        <div class="container">
        <div class="row">
            <div class="col-sm-8 footleft text-white">
                <?php dynamic_sidebar('footleft');?>
            </div>
            <div class="col-sm-4">
              <?php dynamic_sidebar('footright');?>
            </div>
        </div>
         <div class="row bg-danger pt-3">
            <div class="col-sm-6"><p>POWERED BY SOLUTION ART LTD</p></div>
            <div class="col-sm-6 text-end"><p>COPYRIGHT © 2015. BANGLADESH BRIDGE AUTHORITY.</p></div>
            </div>
        </div>
    </footer>
    <!-- footer part -->



    <?php wp_footer(); ?>
</body>
</html>