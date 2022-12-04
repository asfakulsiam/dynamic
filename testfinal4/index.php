<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bangladesh-gov-bd</title>
    <?php wp_head();?>
    <!-- <link rel="stylesheet" href="./style.css"> 
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css"> -->
</head>
<body>
    <!-- topbar part start here -->
    <section class="widthBox">
        <div class="row contentBox">
            <div class="col-lg-6 content_left">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-6 content_right text-end ">
                <p class="d-inline-block" >২৮ কার্তিক, ১৪২৯</p>
                <a class="text-decoration-none" href="#">English</a>
            </div>
        </div>
    </section>
    <!-- topbar part end here -->
        <marquee behavior="" direction=""><?php dynamic_sidebar('marque');?></marquee>
    <!-- logo part start here -->
    <section class="widthBox">
        <div class="row logo_main">
            <div class="col-lg-5 logo_left">
                <a href="#">
                    <?php the_custom_logo();?>
                    <!-- <img src="<?=get_template_directory_uri()?>./assets/images/logo/logo_bn.png" alt="logomain"> -->
                </a>
            </div>
            <div class="col-lg-5 search_box">
                <form action="#">
                    <input type="text" placeholder="খুঁজুন " value = "<?php get_search_query() ?>"> 
                    <button>অনুসন্ধান</button>
                </form>
            </div>
            <div class="col-lg-2 d-flex logo_right">
                <div class="logo_part1">
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/logoRight/a2i-logo-footer.png" alt=""></a>
                </div>
                <div class="logo_part2">
                    <p>সাথে থাকুন:</p>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/logoRight/facebook-icon.png" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/logoRight/twitter-blue-icon.png" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/logoRight/youtube-icon.png" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/logoRight/gplus-icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- logo part end here -->


    <!-- nav bar part start here -->
    <section class="widthBox">
        <div class="row navbarmain">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <?php wp_nav_menu([
                            'theme_location'=> 'TM',
                            'menu_class'=> 'navbar-nav menutop'
                            ]);?>
                        <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">হোম</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">বাংলাদেশ সম্পর্কিত</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ই-সেবাসমূহ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">সেবাখাত</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ব্যবসা-বাণিজ্য</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"> বৈদেশিক বিনিয়োগ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">আইন-বিধি</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">তথ্য বাতায়নnk</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">সেবাকুঞ্জ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">ফরমস</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">তথ্য বাতায়ন হ্যাকাথন</a>
                            </li>
                         </ul> -->
                    </div>
                </div>
            </nav>
        </div>
    </section>
    <!-- nav bar part end here -->

    <!-- banner part start from here -->
    <section class="widthBox">
        <div class="row banner_allbout">
            <div class="col-lg-8 ">
                <div class="banner">
                    <?php dynamic_sidebar('mainbanner');?>
                     <!-- <a href="#"><img class="w-100" src="<?=get_template_directory_uri()?>./assets/images/banner/padmabanner.jpg" alt=""></a> -->
                </div>
    <!-- slider part start -->
                <div class="slider">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <?php 
                                $qry = new wp_Query([
                                    'post_type' => 'post',
                                    'category_name' => 'slider',
                                ]);
                            ?>
                             <?php  
                             $x=0;
                             while($qry->have_posts()){$qry->the_post();
                                $x++;
                             ?>
                            <div class="carousel-item <?php ($x==1)? 'acticve':''?> active">
                                
                                <?php the_post_thumbnail();?>    
                                
                                <!-- <a href=""><img src="<?=get_template_directory_uri()?>./assets/images/slider/0.jpg" class="d-block w-100" alt=""></a> -->
                            </div>
                            <?php } ?>    

                        </div>
                    </div>
                </div>
                

                <div class="navtabbar">
                    <div class="navbarandtab">
                        <nav>
                            <div class="nav nav-tabs full_button" id="nav-tab" role="tablist">
                              <button class="nav-link active" id="nav-jonoprio-tab" data-bs-toggle="tab" data-bs-target="#nav-jonoprio" type="button" role="tab" aria-controls="nav-jonoprio" aria-selected="true">জনপ্রিয় সেবা</button>
                              <button class="nav-link" id="nav-notun-tab" data-bs-toggle="tab" data-bs-target="#nav-notun" type="button" role="tab" aria-controls="nav-notun" aria-selected="false">নতুন সেবা</button>
                              <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">মোবাইল সেবা</button>
                              <button class="nav-link" id="nav-doptor-tab" data-bs-toggle="tab" data-bs-target="#nav-doptor" type="button" role="tab" aria-controls="nav-doptor" aria-selected="false">দপ্তর ভিত্তিক সেবা</button>
                              <button class="nav-link" id="nav-sokol-tab" data-bs-toggle="tab" data-bs-target="#nav-sokol" type="button" role="tab" aria-controls="nav-sokol" aria-selected="false">সকল ই-সেবা</button>
                            </div>
                          </nav>
                          <div class="tab-content full_tabView" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-jonoprio" role="tabpanel" aria-labelledby="nav-jonoprio-tab" tabindex="0"></div>
                            <div class="tab-pane fade" id="nav-notun" role="tabpanel" aria-labelledby="nav-notun-tab" tabindex="0"></div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                                <div class="row">
                                <?php
                                $qry2 = new wp_Query([
                                    'post_type' => 'post',
                                    'category_name' => 'jonoprio',
                                    'order' => 'ASC',
                                ]);
                                
                                ?>
                                <div class="col-lg-2 barmenu">
                                <?php while($qry2->have_posts()){$qry2->the_post();?>
                                <a href="#">
                                    <?php the_post_thumbnail();?>
                                    <!-- <img class="" src="<?=get_template_directory_uri()?>./assets/images/submenu/agriculture.png" alt=""> -->
                                    <p> <?php the_title();?></p>
                                </a>
                                </div>
                                <?php }?>
                                <!-- <a href="#"><img class="text-center" src="<?=get_template_directory_uri()?>./assets/images/submenu/call_center.png" alt=""><p>কল সেন্টার</p></a>
                                <a href="#"><img class="text-center" src="<?=get_template_directory_uri()?>./assets/images/submenu/agriculture.png" alt=""><p>মৎস্য ও প্রাণী</p></a>
                                <a href="#"><img class="text-center" src="<?=get_template_directory_uri()?>./assets/images/submenu/mobile_service.png" alt=""><p>মোবাইল সেবা</p></a>
                                <a href="#"><img class="text-center" src="<?=get_template_directory_uri()?>./assets/images/submenu/helpdesk.png" alt=""><p>হেল্পডেস্ক</p></a>
                                 -->
                            </div>
                            </div>
                            <div class="tab-pane fade" id="nav-doptor" role="tabpanel" aria-labelledby="nav-doptor-tab" tabindex="0">
                            <div class="row">
                                <?php
                                $qry3 = new wp_Query([
                                    'post_type' => 'post',
                                    'category_name' => 'nioym',
                                    'order' => 'ASC',
                                ]);
                                
                                ?>
                                <div class="col-lg-2 barmenu">
                                <?php while($qry3->have_posts()){$qry3->the_post();?>
                                <a href="#">
                                    <?php the_post_thumbnail();?>
                
                                    <p> <?php the_title();?></p>
                                </a>
                                </div>
                                <?php }?>

                            </div>
                            <div class="tab-pane fade" id="nav-sokol" role="tabpanel" aria-labelledby="nav-sokol-tab" tabindex="0"></div>
                          </div>
                    </div>
                </div>
            <!-- some more part is here -->

                <div class="somemore">
                    <h6>উদ্যোগ</h6>
                    <div class="morepart">
                        <a href="#">বাংলাদেশ সরকারের সপ্তম পঞ্চবার্ষিক পরিকল্পনা (২০১৬-২০২০)</a>
                        <p>(১৩-০৬-২০১৬)</p>  
                    </div>
                    <div class="morepart">
                        <a class="extrapart" href="#">বাংলাদেশে ঘূর্ণিঝড়ের জরুরি প্রস্তুতি পরিকল্পনা। </a>
                        <p>(১১-০৪-২০১৫)</p>
                    </div>
                    <div class="morepart">
                        <a class="extrapart" href="#">বাংলাদেশ সরকারের ষষ্ঠ পঞ্চবার্ষিক পরিকল্পনা। </a>
                        <p>(০৭-০৪-২০১৫)</p>
                    </div>
                    <div class="morepart">
                        <a href="#">বাংলাদেশ সরকারের প্রেক্ষিত পরিকল্পনা (২০১০-২০২১)।</a>
                        <p>(০৭-০৪-২০১৫)</p>  
                    </div>
                    <div class="morepart">
                        <a href="#">দূর্যোগ ব্যবস্থাপনা জন্য জাতীয় পরিকল্পনা ২০১০-২০১৫।</a>
                        <p>(০৭-০৪-২০১৫)</p>  
                    </div>
                </div>
            
        <!-- extra part start from here -->

                <div class="extra">
                    <div class="sokol">
                        <p>সকল</p>
                    </div>
                    <div class="bottomlogo">
                        <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/bottomlogo/vision_2021_bn.png" alt=""></a>
                        <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/bottomlogo/forms_portal_logo (1).png" alt=""></a>
                        <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/bottomlogo/infokosh-logo (1).png" alt=""></a>

                        <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/bottomlogo/Konnect Logo.png" alt=""></a>
                        <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/bottomlogo/logo_0_0.png" alt=""></a>
                        <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/bottomlogo/MP logo.png" alt=""></a>
                        <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/bottomlogo/services_portal_bn.png" alt=""></a>
                        <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/bottomlogo/TP main-logo.png" alt=""></a>
                        <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/bottomlogo/vision_2021_bn.png" alt=""></a>
                        <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/bottomlogo/ebook_bangla (1).png" alt=""></a>
                    </div>
                </div>
        <!-- extra part 2 -->
                <div class="extra_part">
                    <div class="extra1">
                        <p>আশ্রয়ণের অধিকার শেখ হাসিনার উপহার</p>
                    </div>
                    <div class="ytvideos">
                        <div class="videoo">
                            <iframe width="212" height="150" src="https://www.youtube.com/embed/l7G3TPz6P24" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="videoo">
                            <iframe width="212" height="150" src="https://www.youtube.com/embed/z6llDxY5JFs" title="আশ্রয়ণের  অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="videoo">
                            <iframe width="212" height="150" src="https://www.youtube.com/embed/MvTLqrU9ZbQ" title="আশ্রয়ণের অধিকার শেখ হাসিনার উপহার" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                        <div class="extra1">
                            <p>অন্যান্য ভিডিও </p>
                        </div>
                    <div class="ytvideos1">
                        <div class="videooo">
                            <iframe width="210" height="200" src="https://www.youtube.com/embed/zBAKSZqTkRg" title="How to Identify and Scout for Fall Armyworm in Bangla (accent from Bangladesh)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>ফল আর্মিওয়ার্ম পর্যবেক্ষণ ও সনাক্তকরণ</p>
                        </div>
                        <div class="videooo">
                            <iframe width="210" height="200" src="https://www.youtube.com/embed/GT9ShGE_qjg" title="বন্যার সময় কি করণীয়...?" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>বন্যার সময় কি করণীয়</p>
                        </div>
                        <div class="videooo">
                            <iframe width="210" height="200" src="https://www.youtube.com/embed/aI97ajpyq00" title="How to Registration on Surokkha Web (www.surokkha.gov.bd)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <p>ভ্যাকসিনের জন্য নিবন্ধন করুন </p>
                        </div>
                    </div>
                </div>
            </div>

    <!-- left part start from here -->
            <div class="col-lg-4">
               <div class="sidebar_start">
               <?php dynamic_sidebar('sideimg');?>
                    <!-- <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/sidebarright/bangladesh-portal--batton-bangla.png" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/sidebarright/discount_bn.jpg" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/sidebarright/Jonotar-Sorkar-banner-Bangl (1).jpg" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/sidebarright/mygov_bn.jpg" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/sidebarright/prottyon.jpeg" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/sidebarright/Tamplate_DistrictBranding_b (3).png" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/sidebarright/Tamplate_govtjob_bn.png" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/sidebarright/Tamplate_guard_bn.png" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/sidebarright/Tamplate_inherit_bn (4).png" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/sidebarright/Tamplate_policy_bn.png" alt=""></a>
                    <a href="#"><img src="<?=get_template_directory_uri()?>./assets/images/sidebarright/Tamplate_security_bn (1).png" alt=""></a>
                -->
                </div>

            <!-- side bar bottom -->
               <div class="sidebarbottom">
                    <div class="sdbottomp">
                        <p>সকল বাতায়ন </p>
                    </div>
                    <div class="drop_down">
                        <form action="#">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle dd_main" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">ওয়েবসাইট বাছাই করুন</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li> 
                                    </ul>
                                </li>
                            </ul>
                            <button class="dd_button">চলুন</button>
                        </form>
                    </div>
               </div>

        <!-- another section start here -->
               <div class="mujib">
                    <div class="mujib_p">
                        <p>মুজিব১০০ আ্যাপ </p>
                    </div>
                    <div class="mujib_video">
                        <iframe width="317" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                    <div class="mujib_p">
                        <p>মাস্ক পরুন সেবা নিন </p>
                    </div>
                    <div class="musk">
                        <img class="w-100" src="<?=get_template_directory_uri()?>./assets/images/somextrapicture/mask-bd-portal (1).jpeg" alt="">
                    </div>
                    <div class="another_p">
                        <p>ডেঙ্গু প্রতিরোধে করণীয় </p>
                    </div>
                    <div class="dengu">
                        <a href="#"><img class="w-100" src="<?=get_template_directory_uri()?>./assets/images/somextrapicture/dengu.jpg" alt=""></a>
                    </div>
                    <div class="digital_agee">
                        <p>ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর</p>
                    </div>
                    <div class="rupmoy_bangladesh">
                        <iframe width="315" height="220" src="https://www.youtube.com/embed/B0FgrYBE4uY" title="মাননীয় প্রধানমন্ত্রী জননেত্রী শেখ হাসিনার নেতৃত্বে ডিজিটাল বাংলাদেশ এর এগিয়ে যাওয়ার ১২ বছর।" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </div>
                    <div class="rupmoybn_p">
                        <p>রূপময় বাংলাদেশ </p>
                    </div>
                    <div class="rp_video">
                        <iframe width="315" height="220" src="https://www.youtube.com/embed/QNUSIOMb6vI" title="Beautiful Bangladesh - Land Of Stories" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="footerimg">
                        <a href="#"><img class="w-100" src="<?=get_template_directory_uri()?>./assets/images/footerimage/budget_bn_new.png" alt=""></a>
                        <a href="#"><img class="w-100" src="<?=get_template_directory_uri()?>./assets/images/footerimage/currency_bangla (1).png" alt=""></a>
                        <a href="#"><img class="w-100" src="<?=get_template_directory_uri()?>./assets/images/footerimage/stock_bangla.png" alt=""></a>
                        <a href="#"><img class="w-100" src="<?=get_template_directory_uri()?>./assets/images/footerimage/weather_bn.png" alt=""></a>
                    </div>
               </div>
            </div>
    <!-- side bar part end here -->
        </div>
    </section>
    <!-- banner end here -->
    <!-- footer part start here -->
    <footer class="widthBox">
        <div class="footer_main">
            <img src="<?=get_template_directory_uri()?>./assets/images/footer/footer_top_bg.png" alt="">
        </div>
        <div class="row footer_botom">
            <div class="col-lg-8 f_left">
                <nav class="navbar navbar-expand-lg bg-light">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#">গোপনীয়তার নীতিমালা</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">ব্যবহারের শর্তাবলি</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">সার্বিক সহযোগিতায়</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">সাইট ম্যাপ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">সচরাচর জিজ্ঞাসা</a>
                                </li>
                             </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-lg-4 d-flex f_right">
                <p>পরিকল্পনা ও বাস্তবায়নে: </p>
                <a href="#">এটুআই, </a>
                <a href="#">মন্ত্রিপরিষদ বিভাগ, </a>
                <a href="#">বিসিসি, </a>
                <a href="#">বেসিস, </a>
                <a href="#">ডিওআইসিটি </a>
            </div>

        </div>
        <div class="row bottom2">
            <div class="col-lg-6 leftside">
                <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
            </div>
            <div class="col-lg-6 d-flex rightside">
                <p>কারিগরি সহায়তায়:</p>
                <img src="<?=get_template_directory_uri()?>./assets/images/footerbottomimage/np-logo-set.png" alt="">

            </div>
        </div>

    
    
    
    
    

        <div class="cp_r8">
            <p>copyright asfakul siam all right reverse 2022</p>
         </div>
    </footer>
    <!-- footer part end here -->
    <?php wp_footer();?>
    

    <section class="widthBox">
        <div class="row brancing text-center">
       <div class="col-lg-3"> 

               <?php 
               
               for($i = 0; $i<=10; $i++) 
               {print $i . '<br>';}
               
               ?>             

       </div>
       <div class="col-lg-3">
       <?php 
    $mark = 30;
    if($mark >= 40) {
        echo "<h1> pass </h1>";
    }
        else {
            echo "<h1> fail </h1>";
        }
    ?>

       </div>
       <div class="col-lg-3">
        <?php 
        $mark = 30;
        echo ($mark<=40)? "<h1> pass </h1> " : "<h1> fail </h1>" ;
        
        ?>
        </div>
        <div class="col-lg-3">
        <?php 
       $num = 0;
       while($num<=10){

            echo $num . '<br>';
            $num=$num;


       }
        
        ?>

       </div>
        </div>
    </section>
<!-- script for js -->
<!-- <script src="<?=get_template_directory_uri()?>./assets/js/bootstrap.bundle.min.js"></script> -->
</body>
</html>