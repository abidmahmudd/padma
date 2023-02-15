<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
   <section class="cont top">
    <div class="row">
        <div class="col-sm-6">
            <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
        </div>
        <div class="col-sm-6 text-end">
            <p class="p1">২ ফাল্গুন, ১৪২৯</p>
            <p>English</p>
        </div>
    </div>
   </section>

    <section class="cont mt-2">
        <div class="row">
            <div class="col-sm-5 logo">
                <?php the_custom_logo();?>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-6 mt-4 logo2">
                <div class="scarch">
                    <nav class="navbar navbar-light">
                        <div class="container-fluid">
                            <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                            </form>
                        </div>
                     </nav>
                     <?php dynamic_sidebar('i1');?>
                </div>
            </div>
        </div>


        <div class="container-fluid menu mt-3">
            <div class="navbar-expand">
                <?php wp_nav_menu(array(
                    'theme_location'=> 'tm',
                    'menu_class' => 'navbar-nav'
                ))
                
                ?>
            </div>
        </div>
    </section>

    <section class="cont mt-4">
       <div class="row">
         <div class="col-sm-8">
                <div class="banner">
                        <?php dynamic_sidebar('i2');?>
                </div>

                <div class="slid">
                     <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php 
                                $x=0;
                                while(have_posts()){ the_post();
                                    $x++;
                            ?>  
                            <div class="carousel-item <?=($x==1)?'active':''?> ">
                                    <?php the_post_thumbnail();?>
                            </div>
                                    <?php }?>
                        </div>
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
         </div>
        <div class="col-sm-4">
            <a href="#">  <?php dynamic_sidebar('sr1');?></a>
            <a href="#">  <?php dynamic_sidebar('sr1');?></a>
            <a href="#">  <?php dynamic_sidebar('sr1');?></a>
            <a href="#">  <?php dynamic_sidebar('sr1');?></a>
            <a href="#">  <?php dynamic_sidebar('sr1');?></a>
            <a href="#">  <?php dynamic_sidebar('sr1');?></a>
            <a href="#">  <?php dynamic_sidebar('sr1');?></a>
            <a href="#">  <?php dynamic_sidebar('sr1');?></a>
        </div>
       </div>
    </section>
    

    <section class="cont">
        <div class="row">
            <div class="col-sm-8">
                <div class="uddag">
                <?php dynamic_sidebar('udd');?>
                </div>
               <a href="#"> <?php dynamic_sidebar('i3');?></a>

               
                  <div class="shak">
                    <p>
                    আশ্রয়ণের অধিকার শেখ হাসিনার উপহার
                    </p>
                   <div class="row">
                    <div class="col-sm-4"><iframe width="217" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="col-sm-4"><iframe width="217" height="150" src="https://www.youtube.com/embed/z6llDxY5JFs" title="আশ্রয়ণের  অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="col-sm-4"><iframe width="217" height="150" src="https://www.youtube.com/embed/MvTLqrU9ZbQ" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                   </div>
                  </div>


                  <div class="shak">
                    <p>
                 অন্যান্য ভিডিও
                    </p>
                   <div class="row text-center ">
                    <div class="col-sm-4"><iframe width="237" height="200" src="https://www.youtube.com/embed/zBAKSZqTkRg" title="How to Identify and Scout for Fall Armyworm in Bangla (accent from Bangladesh)" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <a href="#">ফল আর্মিওয়ার্ম পর্যবেক্ষণ ও সনাক্তকরণ</a></div>
                    <div class="col-sm-4 "><iframe width="193" height="200" src="https://www.youtube.com/embed/GT9ShGE_qjg" title="বন্যার সময় কি করণীয়...?" frameborder="" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><a href="#">বন্যার সময় কি করণীয়</a></div>
                    <div class="col-sm-4"><iframe width="220" height="200" src="https://www.youtube.com/embed/aI97ajpyq00" title="How to Registration on Surokkha Web (www.surokkha.gov.bd)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><a href="#">ভ্যাকসিনের জন্য নিবন্ধন করুন</a></div>
                   </div>
                  </div>
             
            </div>

            <div class="col-sm-4">
                    <div class="sokol text-start">
                    <p>সকল বাতায়ন</p>
                        
                            <nav class="navbar navbar-light">
                                <div class="container-fluid">
                                    <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="ওয়েবসাইট বাছাই করুন" aria-label="Search">
                                    <button class="btn btn-outline-secondary" type="submit">চলুন</button>
                                    </form>
                                </div>
                            </nav>
                    </div>

                        <div class="mujib">
                            <p>মুজিব১০০ আ্যাপ</p>
                        </div>
                        <p><iframe frameborder="0" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" width="100%"></iframe></p>

                        <div class="mujib">
                            <p>মাস্ক পরুন সেবা নিন</p>
                        </div>
                        <?php dynamic_sidebar('i4');?>

                    <div class="dan">
                            <p>ডেঙ্গু প্রতিরোধে করণীয়</p>
                            <a href="#"><?php dynamic_sidebar('i5');?></a>
                    </div>

                    <div class="dig">
                        <p>ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর</p>
                        <p><iframe width="315" height="220" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="মাননীয় প্রধানমন্ত্রী জননেত্রী শেখ হাসিনার নেতৃত্বে ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর।" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                    </div>

                    <div class="rup">
                        <p>রূপময় বাংলাদেশ</p>
                        <p><iframe width="315" height="220" src="https://www.youtube.com/embed/QNUSIOMb6vI" title="Beautiful Bangladesh - Land Of Stories" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></p>
                    </div>
                    
                    <div class="bslid">
                       <?php dynamic_sidebar('i6');?>
                       <?php dynamic_sidebar('i6');?>
                       <?php dynamic_sidebar('i6');?>
                       <?php dynamic_sidebar('i6');?>
                    </div>
                
            </div>
        </div>
    </section>
     
    <section class="cont foot"> 
    <?php dynamic_sidebar('i7');?> 
        <div class="row menu2 ">
            <div class="col-sm-7">
                <div class="navbar-expand ">
                    <?php wp_nav_menu(array(
                        'theme_location'=> 'sec',
                        'menu_class'=> 'navbar-nav'
                    ))?>
                </div>
                <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২৩-০২-০৫ ০৬:১৯:৫২</p>
            </div>
            <div class="col-sm-5 fbt">
                <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
                <p>কারিগরি সহায়তায়: <?php dynamic_sidebar('i8');?> </p>
            </div>
        </div>
       
    </section>

    <?php wp_footer(); ?>
</body>
</html>