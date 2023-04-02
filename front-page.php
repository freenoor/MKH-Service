<?php 
$bodyID = "homepage";
/*
* Template Name: Home
*/
get_header(); 
?>
<div id="home_slider">
    <ul class="right-images">
                <li><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/Signet_Digitale_Kanzlei_2021_RGB.svg"></li>
            </ul>
    <div class="row">
        <div class="col-sm-5">
            <div class="content">
                <div class="content_txt">
                    <p class="title"><?= ( get_field('first_section')['heading'] ); ?></p>
                    <p class="subtitle"><?= ( get_field('first_section')['title'] ); ?></p>
                    <p class="text"><?= ( get_field('first_section')['description'] ); ?></p>
                    <img src="<?= ( get_field('first_section')['signature_image'] ); ?>" class="signature" alt="signature"/>
                    <div class="slider_btn">
                        <a href=/leistungen><?= ( get_field('first_section')['button_label'] ); ?> <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow.svg" alt=""/></a>
                    </div>
                </div>
                <!-- <div class="social_info">
                    <p class="social_text">Folgen Sie uns im sozialen Netzwerk</p>
                    <ul class="social_icons">
                        <li class="redHoverActive active_socialIcon"><a href="#"><img src="assets/images/fb.svg"/></a></li>
                        <li class="redHover"><a href="#"><img src="assets/images/twitter.svg"/></a></li>
                        <li class="redHover"><a href="#"><img src="assets/images/linkedin.svg"/></a></li>
                    </ul>
                </div> -->
            </div>
        </div>
        <div class="col-sm-7">
        <div id="slider_content">
                <div class="slider_img">
                    <div class="item image1">
                        <picture>
                            <source srcset="<?php echo get_bloginfo('template_directory')?>/assets/images/slider-image.webp" type="image/webp">
                            <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/slider-image.jpg" alt=""/>
                        </picture>
                    </div>
                    <div class="item image2">
                        <picture>
                            <source srcset="<?php echo get_bloginfo('template_directory')?>/assets/images/slider-image3.webp" type="image/webp">
                            <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/slider-image3.jpg" alt=""/>
                        </picture>
                    </div>
                    <div class="item image3">
                        <picture>
                            <source srcset="<?php echo get_bloginfo('template_directory')?>/assets/images/slider-image2.webp" type="image/webp">
                            <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/slider-image2.jpg" alt=""/>
                        </picture>
                    </div>
                </div>
                    <div class="count_item"> 
                        <!-- <ul id="clicks">
                            <li class="active-number">01</li>
                            <li class="">02</li>
                            <li class="">03</li>
                        </ul> -->
                        <div class="line"><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/line.svg" alt=""/></div>
                        <div class="slider_number">03</div>
                    </div>  
            </div>
        </div>
    </div>
</div>

<div id="block_partner">
    <div class="container">
        <div class="row">
                <div class="col-sm-6">
                    <div class="imageContent">
                        <picture>
                            <source srcset="<?php echo get_bloginfo('template_directory')?>/assets/images/kanzlei_ueber_uns.webp" type="image/webp">
                            <img src="<?= ( get_field('second_section')['image'] ); ?>" alt="" loading="lazy"/>
                        </picture>
                        <div class="whiteRectangle">
                            <p class="txt"><?= ( get_field('second_section')['detail_image_text'] ); ?></p>
                            <p class="number"><?= ( get_field('second_section')['detail_image_number'] ); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="textContent">
                        <div class="txt">
                            <p class="title"><?= ( get_field('second_section')['heading'] ); ?></p>
                            <p class="text1"><?= ( get_field('second_section')['title'] ); ?></p>
                            <p class="text2"><?= ( get_field('second_section')['description'] ); ?></p>
                            <!-- <div class="partner_btn"><a href="#contact">Kostenlose Beratung<img src="assets/images/left-arrow.svg"/></a></div> -->
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
    </div>

<div id="block_leistungen">
    <div class="container">
        <p class="title"><?= ( get_field('third_section')['heading'] ); ?></p>
        <p class="subtitle"><?= ( get_field('third_section')['text'] ); ?><br><?= ( get_field('third_section')['text_2'] ); ?> <span class="author-name"><?= ( get_field('third_section')['text_3'] ); ?></span></p>

        <div class="row">
            <div class="col-sm-3"><a href="/steuerberatung">
                <div class="content">
                    <img src="<?= ( get_field('third_section')['first_icon'] ); ?>" alt=""/>
                    <p class="title1"><?= ( get_field('third_section')['first_title'] ); ?></p>
                    <p class="text"><?= ( get_field('third_section')['first_description'] ); ?></p>
                </div></a>
            </div>
            <div class="col-sm-3"><a href="/unternehmensberatung">
                <div class="content">
                    <img src="<?= ( get_field('third_section')['second_icon'] ); ?>" alt=""/>
                    <p class="title1"><?= ( get_field('third_section')['second_title'] ); ?></p>
                    <p class="text"><?= ( get_field('third_section')['second_description'] ); ?></p>
                </div></a>
            </div>
            <div class="col-sm-3"><a href="/rechtsberatung">
                <div class="content">
                    <img src="<?= ( get_field('third_section')['third_icon'] ); ?>" alt=""/>
                    <p class="title1"><?= ( get_field('third_section')['third_title'] ); ?></p>
                    <p class="text"><?= ( get_field('third_section')['third_description'] ); ?></p>
                </div></a>
            </div>
            <div class="col-sm-3"><a href="/digitalisierung">
                <div class="content">
                    <img src="<?= ( get_field('third_section')['fourth_icon'] ); ?>" alt=""/>
                    <p class="title1"><?= ( get_field('third_section')['fourth_title'] ); ?></p>
                    <p class="text"><?= ( get_field('third_section')['fourth_description'] ); ?></p>
                </div></a>
            </div>
        </div>
    </div>
</div>

<div id="block_attributes">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <div class="content">
                    <div class="txt_content">
                        <p class="title"><?= ( get_field('fifth_section')['heading'] ); ?><br><?= ( get_field('fifth_section')['heading_2'] ); ?></p>
                        <ul class="attr_list">
                            <li><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/tick.svg" alt=""/><p class="attr_title"><?= ( get_field('fifth_section')['title'] ); ?><br>
                            <span class="text"><?= ( get_field('fifth_section')['first_description'] ); ?> <br><?= ( get_field('fifth_section')['first_description_2'] ); ?></span></p></li>
                            <li><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/tick.svg" alt=""/><p class="attr_title"><?= ( get_field('fifth_section')['second_title'] ); ?><br>
                            <span class="text"><?= ( get_field('fifth_section')['second_description'] ); ?> <br><?= ( get_field('fifth_section')['second_description_2'] ); ?></span></p></li>
                            <li><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/tick.svg" alt=""/><p class="attr_title"><?= ( get_field('fifth_section')['third_title'] ); ?><br>
                            <span class="text"><?= ( get_field('fifth_section')['third_description'] ); ?> <br> <?= ( get_field('fifth_section')['third_description_2'] ); ?> </span></p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="blog" class="blog_page">
        <div class="container">
            <p class="title"><?= ( get_field('blog_section')['heading'] ); ?></p>
            <div id="blog-steps">
                <div id="blog-slider" class="container">
                    <div class="slider_img row">
                        <div class="blog_content col-sm-4">
                            <div class="image">
                                <img src="<?= ( get_field('blog_section')['first_image'] ); ?>">
                            </div>
                            <div class="text_content">
                                <div class="blog_date">
                                    <span class="date"><?= ( get_field('blog_section')['first_date'] ); ?></span>
                                    <!-- <span class="name">Namentlich</span> -->
                                </div>
                                <p class="blog_title"><?= ( get_field('blog_section')['first_title'] ); ?></p>
                                <p class="text"><?= ( get_field('blog_section')['first_text'] ); ?></p>
                                <a href="<?= ( get_field('blog_section')['pdf_1'] ); ?>" target="_blank" class="showMore_btn"><?= ( get_field('blog_section')['first_button'] ); ?><img src="<?= ( get_field('blog_section')['first_image2'] ); ?>"/></a>
                            </div>
                        </div>
                        <div class="blog_content col-sm-4">
                            <div class="image">
                                <img src="<?= ( get_field('blog_section')['second_image'] ); ?>">
                            </div>
                            <div class="text_content">
                                <div class="blog_date">
                                    <span class="date"><?= ( get_field('blog_section')['second_date'] ); ?></span>
                                    <!-- <span class="name">Namentlich</span> -->
                                </div>
                                <p class="blog_title"><?= ( get_field('blog_section')['second_title'] ); ?></p>
                                <p class="text"><?= ( get_field('blog_section')['second_text'] ); ?></p>
                                <a href="<?= ( get_field('blog_section')['pdf_2'] ); ?>" target="_blank" class="showMore_btn"><?= ( get_field('blog_section')['second_button'] ); ?><img src="<?= ( get_field('blog_section')['second_image2'] ); ?>"/></a>
                            </div>
                        </div>
                    	<div class="blog_content col-sm-4">
                            <div class="image">
                                <img src="<?= ( get_field('blog_section')['third_image'] ); ?>">
                            </div>
                            <div class="text_content">
                                <div class="blog_date">
                                    <span class="date"><?= ( get_field('blog_section')['third_date'] ); ?></span>
                                    <!-- <span class="name">Namentlich</span> -->
                                </div>
                                <p class="blog_title"><?= ( get_field('blog_section')['third_title'] ); ?><br><?= ( get_field('blog_section')['third_title2'] ); ?></p>
                                <p class="text"><?= ( get_field('blog_section')['third_text'] ); ?></p>
                                <a href="<?= ( get_field('blog_section')['pdf_3'] ); ?>" target="_blank" class="showMore_btn"><?= ( get_field('blog_section')['third_button'] ); ?><img src="<?= ( get_field('blog_section')['third_image2'] ); ?>"/></a>
                            </div>
                        </div>
                        <div class="blog_content col-sm-4">
                            <div class="image">
                                <img src="<?= ( get_field('blog_section')['fourth_image'] ); ?>">
                            </div>
                            <div class="text_content">
                                <div class="blog_date">
                                    <span class="date"><?= ( get_field('blog_section')['fourth_date'] ); ?></span>
                                    <!-- <span class="name">Namentlich</span> -->
                                </div>
                                <p class="blog_title"><?= ( get_field('blog_section')['fourth_title'] ); ?> <br><?= ( get_field('blog_section')['fourth_title2'] ); ?></p>
                                <p class="text"><?= ( get_field('blog_section')['fourth_text'] ); ?></p>
                                <a href="<?= ( get_field('blog_section')['pdf_4'] ); ?>" target="_blank" class="showMore_btn"><?= ( get_field('blog_section')['fourth_button'] ); ?><img src="<?= ( get_field('blog_section')['fourth_image2'] ); ?>"/></a>
                            </div>
                        </div>
                        <div class="blog_content col-sm-4">
                            <div class="image">
                                <img src="<?= ( get_field('blog_section')['fifth_image'] ); ?>">
                            </div>
                            <div class="text_content">
                                <div class="blog_date">
                                    <span class="date"><?= ( get_field('blog_section')['fifth_date'] ); ?></span>
                                    <!-- <span class="name">Namentlich</span> -->
                                </div>
                                <p class="blog_title"><?= ( get_field('blog_section')['fifth_title'] ); ?> <br><?= ( get_field('blog_section')['fifth_title2'] ); ?></p>
                                <p class="text"><?= ( get_field('blog_section')['fifth_text'] ); ?></p>
                                <a href="<?= ( get_field('blog_section')['pdf_5'] ); ?>" target="_blank" class="showMore_btn"><?= ( get_field('blog_section')['fifth_button'] ); ?><img src="<?= ( get_field('blog_section')['fifth_image2'] ); ?>"/></a>
                            </div>
                        </div>
                        <div class="blog_content col-sm-4">
                            <div class="image">
                                <img src="<?= ( get_field('blog_section')['sixth_image'] ); ?>">
                            </div>
                            <div class="text_content">
                                <div class="blog_date">
                                    <span class="date"><?= ( get_field('blog_section')['sixth_date'] ); ?></span>
                                   <!-- <span class="name">Namentlich</span> -->
                                </div>
                                <p class="blog_title"><?= ( get_field('blog_section')['sixth_title'] ); ?></p>
                                <p class="text"><?= ( get_field('blog_section')['sixth_text'] ); ?></p>
                                <a href="<?= ( get_field('blog_section')['pdf_6'] ); ?>" target="_blank" class="showMore_btn"><?= ( get_field('blog_section')['sixth_button'] ); ?><img src="<?= ( get_field('blog_section')['sixth_image2'] ); ?>"/></a>
                            </div>
                        </div>
                        <div class="blog_content col-sm-4">
                            <div class="image">
                                <img src="<?= ( get_field('blog_section')['seventh_image'] ); ?>">
                            </div>
                            <div class="text_content">
                                <div class="blog_date">
                                    <span class="date"><?= ( get_field('blog_section')['seventh_date'] ); ?></span>
                                        <!-- <span class="name">Namentlich</span> -->
                                </div>
                                <p class="blog_title"><?= ( get_field('blog_section')['seventh_title'] ); ?> <br><?= ( get_field('blog_section')['seventh_title2'] ); ?></p>
                                <p class="text"><?= ( get_field('blog_section')['seventh_text'] ); ?></p>
                                <a href="<?= ( get_field('blog_section')['pdf_7'] ); ?>" target="_blank" class="showMore_btn"><?= ( get_field('blog_section')['seventh_button'] ); ?><img src="<?= ( get_field('blog_section')['seventh_image2'] ); ?>"/></a>
                            </div>
                        </div>
                        <div class="blog_content col-sm-4">
                            <div class="image">
                                <img src="<?= ( get_field('blog_section')['eighth_image'] ); ?>">
                            </div>
                            <div class="text_content">
                                <div class="blog_date">
                                    <span class="date"><?= ( get_field('blog_section')['eighth_date'] ); ?></span>
                                    <!-- <span class="name">Namentlich</span> -->
                                </div>
                                <p class="blog_title"><?= ( get_field('blog_section')['eighth_title'] ); ?> </p>
                                <p class="text"><?= ( get_field('blog_section')['eighth_text'] ); ?></p>
                                <a href="<?= ( get_field('blog_section')['pdf_8'] ); ?>" target="_blank" class="showMore_btn"><?= ( get_field('blog_section')['eighth_button'] ); ?><img src="<?= ( get_field('blog_section')['eighth_image2'] ); ?>"/></a>
                            </div>
                        </div>
                        <div class="blog_content col-sm-4">
                            <div class="image">
                                <img src="<?= ( get_field('blog_section')['ninth_image'] ); ?>">
                            </div>
                            <div class="text_content">
                                <div class="blog_date">
                                    <span class="date"><?= ( get_field('blog_section')['ninth_date'] ); ?></span>
                                   <!-- <span class="name">Namentlich</span> -->
                                </div>
                                <p class="blog_title"><?= ( get_field('blog_section')['ninth_title'] ); ?></p>
                                <p class="text"><?= ( get_field('blog_section')['ninth_text'] ); ?></p>
                                <a href="<?= ( get_field('blog_section')['pdf_9'] ); ?>" target="_blank" class="showMore_btn"><?= ( get_field('blog_section')['ninth_button'] ); ?><img src="<?= ( get_field('blog_section')['ninth_image2'] ); ?>"/></a>
                            </div>
                        </div>
                        <div class="blog_content col-sm-4">
                            <div class="image">
                                <img src="<?= ( get_field('blog_section')['tenth_image'] ); ?>">
                            </div>
                            <div class="text_content">
                                <div class="blog_date">
                                    <span class="date"><?= ( get_field('blog_section')['tenth_date'] ); ?></span>
                                        <!-- <span class="name">Namentlich</span> -->
                                </div>
                                <p class="blog_title"><?= ( get_field('blog_section')['tenth_title'] ); ?> <br>2021 steigen</p>
                                <p class="text"><?= ( get_field('blog_section')['tenth_text'] ); ?></p>
                                <a href="<?= ( get_field('blog_section')['pdf_10'] ); ?>" target="_blank" class="showMore_btn"><?= ( get_field('blog_section')['tenth_button'] ); ?><img src="<?= ( get_field('blog_section')['tenth_image2'] ); ?>"/></a>
                            </div>
                        </div>  
                        <div class="blog_content col-sm-4">
                            <div class="image">
                                <img src="<?= ( get_field('blog_section')['eleventh_image'] ); ?>">
                            </div>
                            <div class="text_content">
                                <div class="blog_date">
                                    <span class="date"><?= ( get_field('blog_section')['eleventh_date'] ); ?></span>
                                    <!-- <span class="name">Namentlich</span> -->
                                </div>
                                <p class="blog_title"><?= ( get_field('blog_section')['eleventh_title'] ); ?><br>E-Autos</p>
                                <p class="text"><?= ( get_field('blog_section')['eleventh_text'] ); ?></p>
                                <a href="<?= ( get_field('blog_section')['pdf_11'] ); ?>" target="_blank" class="showMore_btn"><?= ( get_field('blog_section')['eleventh_button'] ); ?><img src="<?= ( get_field('blog_section')['eleventh_image2'] ); ?>"/></a>
                            </div>
                        </div>
                        <div class="blog_content col-sm-4">
                            <div class="image">
                                <img src="<?= ( get_field('blog_section')['twelfth_image'] ); ?>">
                            </div>
                            <div class="text_content">
                                <div class="blog_date">
                                    <span class="date"><?= ( get_field('blog_section')['twelfth_date'] ); ?></span>
                                    <!-- <span class="name">Namentlich</span> -->
                                </div>                                    
                                <p class="blog_title"><?= ( get_field('blog_section')['eleventh_title'] ); ?><br> geltend machen</p>
                                <p class="text"><?= ( get_field('blog_section')['twelfth_text'] ); ?></p>
                                <a href="<?= ( get_field('blog_section')['pdf_12'] ); ?>" target="_blank" class="showMore_btn"><?= ( get_field('blog_section')['twelfth_button'] ); ?><img src="<?= ( get_field('blog_section')['twelfth_image2'] ); ?>"/></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>






<?php get_footer(); ?>