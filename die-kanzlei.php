<div id="die-kanzlei_page" class="otherPages">
<?php 
$bodyID = "die-kanzlei_page";
$bodyClass = "otherPages";
/*
* Template Name: Die Kanzlei
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
					<a href="/die-kanzlei" class="breadcrumbs_active">Die Kanzlei </a>
				</li>
			</ul>
		</div>
	</div>
</div>

<!-- <div class="page_titles">
    <div class="container">
        <p class="title">Alles um uns herum</p>
        <p class="subtitle">Unser Hauptaugenmerk liegt auf Kunden, Karriere und Geschäftserfolg</p>
    </div>
</div> -->

<div id="" class="pages_aboutUs">
    <div class="container">
        <div class="row">
                <div class="col-sm-6">
                <div class="textContent">
                        <div class="txt">
                            <p class="title"><?= ( get_field('first_section')['heading'] ); ?></p>
                            <p class="text1"><?= ( get_field('first_section')['first_text'] ); ?></p>
                            <p class="text2"><?= ( get_field('first_section')['second_text'] ); ?></p>
                            <p class="text2 textDesktop"><?= ( get_field('first_section')['third_text'] ); ?></p>
                            <p class="text2 textDesktop"><?= ( get_field('first_section')['fourth_text'] ); ?> <br><?= ( get_field('first_section')['fourth_text2'] ); ?><br><?= ( get_field('first_section')['fourth_text3'] ); ?></p>
                            <!-- <div class="aboutUs_btn"><a href="#contact">Kontakt<img src="assets/images/left-arrow.svg"></a></div> -->
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                <div class="imageContent">
                        <!-- <img src="assets/images/dieKanzlei-img.png"> -->
                        <img src="<?= ( get_field('first_section')['image'] ); ?>">
                        <p class="text2 textMobile"><?= ( get_field('first_section')['first_text_mobile'] ); ?></p>
                        <p class="text2 textMobile"><?= ( get_field('first_section')['first_text_mobile2'] ); ?><br><?= ( get_field('first_section')['first_text_mobile3'] ); ?><br><?= ( get_field('first_section')['first_text_mobile4'] ); ?></p>
                    </div>
                </div>
        </div>
    </div>
</div>
<div id="signature-block">
    <div class="container">
        <p class="subtitle"><?= ( get_field('signature_section')['subtitle'] ); ?></p>
        <div class="row">
            <div class="col-sm-4">
                <div class="content">
                    <img src="<?= ( get_field('signature_section')['first_image'] ); ?>">
                    <div class="text">
                        <p class="name"><?= ( get_field('signature_section')['first_name'] ); ?></p>
                        <p class="position"><?= ( get_field('signature_section')['first_position'] ); ?></p>
                    </div>
                    <img src="<?= ( get_field('signature_section')['first_signature'] ); ?>" class="sign">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="content">
                    <img src="<?= ( get_field('signature_section')['second_image'] ); ?>">
                    <div class="text">
                        <p class="name"><?= ( get_field('signature_section')['second_name'] ); ?></p>
                        <p class="position"><?= ( get_field('signature_section')['second_position'] ); ?></p>  
                    </div>
                    <img src="<?= ( get_field('signature_section')['second_signature'] ); ?>" class="sign">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="content">
                    <img src="<?= ( get_field('signature_section')['third_image'] ); ?>">
                    <div class="text">
                        <p class="name"><?= ( get_field('signature_section')['third_name'] ); ?></p>
                        <p class="position"><?= ( get_field('signature_section')['third_position'] ); ?></p>
                    </div> 
                    <img src="<?= ( get_field('signature_section')['third_signature'] ); ?>" class="sign"> 
                </div>
            </div>
        </div>
    </div>
</div>

<div id="die-kanzlei_slider1">
    <div class="container">
        <div class="text_info">
            <p class="title"><?= ( get_field('slider')['title'] ); ?></p>
            <p class="subtitle"><?= ( get_field('slider')['subtitle'] ); ?></p>
        </div>
        <div id="slider2_content1" class="container">
                <div class="slider_img">
                    <div class="item image1">  
                        <img src="<?= ( get_field('slider')['image_1'] ); ?>" alt="">
                    </div>   
                    <div class="item image2">  
                        <img src="<?= ( get_field('slider')['image_2'] ); ?>" alt="">
                    </div>
                    <div class="item image3">  
                        <img src="<?= ( get_field('slider')['image_3'] ); ?>" alt="">
                    </div> 
                    <div class="item image4">  
                        <img src="<?= ( get_field('slider')['image_4'] ); ?>" alt="">
                    </div>
                    <div class="item image5">  
                        <img src="<?= ( get_field('slider')['image_5'] ); ?>" alt="">
                    </div>   
                    <div class="item image6">  
                        <img src="<?= ( get_field('slider')['image_6'] ); ?>" alt="">
                    </div>
                    <div class="item image7">  
                        <img src="<?= ( get_field('slider')['image_7'] ); ?>" alt="">
                    </div> 
                    <div class="item image8">  
                        <img src="<?= ( get_field('slider')['image_8'] ); ?>" alt="">
                    </div>
                    <div class="item image9">  
                        <img src="<?= ( get_field('slider')['image_9'] ); ?>" alt="">
                    </div>
                    <div class="item image10">  
                        <img src="<?= ( get_field('slider')['image_10'] ); ?>" alt="">
                    </div>
                    <div class="item image11">  
                        <img src="<?= ( get_field('slider')['image_11'] ); ?>" alt="">
                    </div>
                </div>
            </div>
    </div>
</div>
<div id="die-kanzlei_slider">
    <div class="container">
        <div class="text_info">
            <p class="title"><?= ( get_field('second_slider')['title'] ); ?></p>
            <p class="text"><?= ( get_field('second_slider')['text'] ); ?><br><?= ( get_field('second_slider')['text_2'] ); ?><br> <?= ( get_field('second_slider')['text_3'] ); ?> </p>
        </div>


        <div id="slider2_content" class="container">
                <div class="slider_img">
                    <div class="item image1">  
                        <img src="<?= ( get_field('second_slider')['image_1'] ); ?>" alt="">
                    </div>   
                    <div class="item image2">  
                        <img src="<?= ( get_field('second_slider')['image_2'] ); ?>" alt="">
                    </div>
                    <div class="item image3">  
                        <img src="<?= ( get_field('second_slider')['image_3'] ); ?>" alt="">
                    </div> 
                    <div class="item image4">  
                        <img src="<?= ( get_field('second_slider')['image_4'] ); ?>" alt="">
                    </div>
                    <!-- <div class="item image5">  
                        <img src="<?= ( get_field('second_slider')['image_5'] ); ?>" alt="">
                    </div>    -->
                    <div class="item image6">  
                        <img src="<?= ( get_field('second_slider')['image_6'] ); ?>" alt="">
                    </div>
                    <div class="item image7">  
                        <img src="<?= ( get_field('second_slider')['image_7'] ); ?>" alt="">
                    </div> 
                    <div class="item image8">  
                        <img src="<?= ( get_field('second_slider')['image_8'] ); ?>" alt="">
                    </div>
                    <div class="item image9">  
                        <img src="<?= ( get_field('second_slider')['image_9'] ); ?>" alt="">
                    </div>
                    <div class="item image10">  
                        <img src="<?= ( get_field('second_slider')['image_10'] ); ?>" alt="">
                    </div>
                    <div class="item image11">  
                        <img src="<?= ( get_field('second_slider')['image_11'] ); ?>" alt="">
                    </div>
                    <!-- <div class="item image12">  
                        <img src="<?= ( get_field('second_slider')['image_12'] ); ?>" alt="">
                    </div> -->
                </div>
                    <!-- <div class="count_item"> 
                        <ul id="clicks">
                            <li class="active-number">01</li>
                            <li class="">02</li>
                            <li class="">03</li>
                        </ul>
                        <div class="line"><img src="assets/images/line.svg"/></div>
                        <div class="slider_number">03</div>
                    </div>   -->
            </div>
    </div>
</div>

<div id="apply-block">
    <div class="page_titles">
        <div class="container">
            <p class="title"><?= ( get_field('last_section')['title'] ); ?> <br><?= ( get_field('second_slider')['title2'] ); ?></p>
            <div class="jobs_btn"><a href="/jobs"><?= ( get_field('last_section')['button'] ); ?><img src="<?= ( get_field('last_section')['image'] ); ?>"></a></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>