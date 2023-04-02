<div id="aktuelles_page" class="otherPages">
<?php 
/*
* Template Name: Aktuelles
*/
get_header(); 
?>
    <div id="breadcrumbs_nav">
        <div class="container">
            <div class="konfigurator_breadcrumbs">
                <ul class="breadcrumbs">
                    <li class="breadcrumbs_item">
                        <a href="/">Home</a>
                    </li>
                    <li class="breadcrumbs_item">
                        <a href="/aktuelles" class="breadcrumbs_active">Aktuelles </a>
                    </li>
                </ul>
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
  
        <div id="pdf-block">
            <div class="container">
                <div class="content">
                    <p class="title"><?= ( get_field('pdf_section')['title'] ); ?></p>
                    <div class="text-pdf">
                        <p class="text"><?= ( get_field('pdf_section')['first_text'] ); ?> </p>
                        <a href="<?= ( get_field('pdf_section')['pdf_1'] ); ?>" target="_blank"><i class="fa fa-download"></i><?= ( get_field('pdf_section')['first_button'] ); ?></a>
                    </div>
                    <div class="text-pdf">
                        <p class="text"><?= ( get_field('pdf_section')['second_text'] ); ?> </p>
                        <a href="<?= ( get_field('pdf_section')['pdf_2'] ); ?>" target="_blank"><i class="fa fa-download"></i><?= ( get_field('pdf_section')['second_button'] ); ?></a>
                    </div>
                    <div class="text-pdf">
                        <p class="text"><?= ( get_field('pdf_section')['third_text'] ); ?> </p>
                        <a href="<?= ( get_field('pdf_section')['pdf_3'] ); ?>" target="_blank"><i class="fa fa-download"></i><?= ( get_field('pdf_section')['third_button'] ); ?></a>
                    </div>
                    <div class="text-pdf">
                        <p class="text"><?= ( get_field('pdf_section')['fourth_text'] ); ?> </p>
                        <a href="<?= ( get_field('pdf_section')['pdf_4'] ); ?>" target="_blank"><i class="fa fa-download"></i><?= ( get_field('pdf_section')['fourth_button'] ); ?></a>
                    </div>
                    <div class="text-pdf">
                        <p class="text"><?= ( get_field('pdf_section')['fifth_text'] ); ?> </p>
                        <a href="<?= ( get_field('pdf_section')['pdf_5'] ); ?>" target="_blank"><i class="fa fa-download"></i><?= ( get_field('pdf_section')['fifth_button'] ); ?></a>
                    </div>
                    <div class="text-pdf">
                        <p class="text"><?= ( get_field('pdf_section')['sixth_text'] ); ?></p>
                        <a href="<?= ( get_field('pdf_section')['pdf_6'] ); ?>" target="_blank"><i class="fa fa-download"></i><?= ( get_field('pdf_section')['sixth_button'] ); ?></a>
                    </div>
                    <div class="text-pdf">
                        <p class="text"><?= ( get_field('pdf_section')['seventh_text'] ); ?> </p>
                        <a href="<?= ( get_field('pdf_section')['pdf_7'] ); ?>" target="_blank"><i class="fa fa-download"></i><?= ( get_field('pdf_section')['seventh_button'] ); ?></a>
                    </div>
                    <div class="text-pdf">
                        <p class="text"><?= ( get_field('pdf_section')['eighth_text'] ); ?> </p>
                        <a href="<?= ( get_field('pdf_section')['pdf_8'] ); ?>" target="_blank"><i class="fa fa-download"></i><?= ( get_field('pdf_section')['eighth_button'] ); ?></a>
                    </div>
										<div class="text-pdf">
                        <p class="text"><?= ( get_field('pdf_section')['ninth_text'] ); ?> </p>
                        <a href="<?= ( get_field('pdf_section')['pdf_9'] ); ?>" target="_blank"><i class="fa fa-download"></i><?= ( get_field('pdf_section')['second_button'] ); ?></a>
                    </div>
										<div class="text-pdf">
                        <p class="text"><?= ( get_field('pdf_section')['tenth_text'] ); ?> </p>
                        <a href="<?= ( get_field('pdf_section')['pdf_10'] ); ?>" target="_blank"><i class="fa fa-download"></i><?= ( get_field('pdf_section')['second_button'] ); ?></a>
                    </div>
										<div class="text-pdf">
                        <p class="text"><?= ( get_field('pdf_section')['eleventh_text'] ); ?> </p>
                        <a href="<?= ( get_field('pdf_section')['pdf_11'] ); ?>" target="_blank"><i class="fa fa-download"></i><?= ( get_field('pdf_section')['second_button'] ); ?></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="video-block">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="mym-insert-here-86272"></div>
                            <script src="https://www.datev-mymarketing.de/onlineMedia/code.js?ids=86272"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<?php get_footer(); ?>
</div>