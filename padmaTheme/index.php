<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    
<!-- header part start  -->
<header class="container-fluid slider">
    <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php 
                $x=0;
                while(have_posts()) {the_post();
                $x++;
                ?>
                <div class="carousel-item <?= ($x==1)?'active':'' ?>">
                    <?php the_post_thumbnail(); ?>
                    <!-- <img src="..." class="d-block w-100" alt="..."> -->
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
</header>
<!-- header part end  -->


<!-- logo part start  -->
<section class="logo container-fluid">
    <div class="row">
        <div class="col-sm-6 logoLeft pt-2">
            <?php the_custom_logo();?>
        </div>
        <div class="col-sm-6 logoRight text-end pt-2">
           <?php dynamic_sidebar('bdlogo')?>
        </div>
    </div>
</section>

<!-- logo part end -->

<!-- menu part start  -->
<section class="container_fluid menu">
    <div class="container nemu_1 navbar-expand">
        <?php wp_nav_menu( array(
            'theme_location' => 'TM',
            'menu_class' => 'navbar-nav',
        ))?>
    </div>
</section>
<!-- menu part end -->


<!-- hero part start -->
<section class="container">
    <div class="row tophero text-center mt-5">
        <?php dynamic_sidebar('herotop');?>
    </div>
    <div class="row bottomhero">
        <div class="col-sm-4">
            <div class="card text-center" style="width: 18rem;">
                <?php dynamic_sidebar('hbimg');?>
                <div class="card-body">
                    <?php dynamic_sidebar('hbbody');?>
                </div>
            </div>
        </div>
        <div class="col-sm-4">c</div>
        <div class="col-sm-4">b</div>
    </div>
</section>
<!-- hero part end -->




<?php wp_footer();?>
</body>
</html>