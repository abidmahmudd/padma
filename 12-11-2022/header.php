
       <!-- header part start -->
       <header class="container-fluid slider">
    <div class="row">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <?php 
    $x=0;
    while(have_posts()){the_post();
    $x++;
    ?>
    <div class="carousel-item <?= ($x==1)?'active':''?> active">
        <?php the_post_thumbnail();?>
    </div>
    <?php }?>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
   </header>
   <!-- header part end -->
   
         <!-- logo part start  -->
         <section class="logo container-fluid ">
    <div class="row">
        <div class="col-sm-6 logo_left">
            <?php the_custom_logo(); ?>
        </div>
        <div class="col-sm-6 logo_right text-end">
            <?php dynamic_sidebar('bdlogo');?>
        </div>
    </div>
   </section>
   <!-- logo part end -->