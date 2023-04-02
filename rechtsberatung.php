<div id="rechtsberatung_page" class="otherPages">
<?php 
$bodyID = "rechtsberatung_page";
$bodyClass = "otherPages";
/*
* Template Name: Rechtsebratung
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
					<a href="/leistungen" class="breadcrumbs_active">Leistungen</a>
				</li>
				<li class="breadcrumbs_item">
					<a href="/rechtsberatung" class="breadcrumbs_active">Rechtsberatung</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="rechtsberatung_content leistungen-submenuBlock">
	<div class="container">
		<div class="page_titles">
    		<p class="title"><?= ( get_field('first_section')['heading'] ); ?></p>
    		<p class="subtitle"><?= ( get_field('first_section')['heading2'] ); ?><br> <?= ( get_field('first_section')['subheading'] ); ?> <span class="author-name"><?= ( get_field('first_section')['author'] ); ?></span></p>
		</div>

		<div id="block_partner" class="rechtsberatung_aboutUs leistungen-submenuAboutUs">
	        <div class="row">
                <div class="col-sm-6">
                    <div class="imageContent">
                        <img src="<?= ( get_field('first_section')['image'] ); ?>">
                        <div class="whiteRectangle">
                        	<img src="<?= ( get_field('first_section')['icon'] ); ?>">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="textContent">
                        <div class="txt">
                            <p class="title"><?= ( get_field('first_section')['title'] ); ?></p>
                            <p class="text2"><?= ( get_field('first_section')['text'] ); ?></p>
                            <div class="partner_btn"><a href="#contact"><?= ( get_field('first_section')['button'] ); ?><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow.svg"></a></div>
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	    <div class="rechtsberatungText leistungen-submenuText"> 
	    	<div class="page_titles">
    			<p class="title"><?= ( get_field('second_section')['heading'] ); ?></p>
    			<p class="text1"><?= ( get_field('second_section')['description'] ); ?><br>Steuerrechts, des Handels- und Gesellschaftsrechts und des Transportrechts.</p>
			</div>
		</div>
		<div id="questions_block">
            <div class="info-box">
                <div class="text-box">
                    <p class="question"><?= ( get_field('second_section')['first_title'] ); ?></p>
					<div class="info">
					<p><?= ( get_field('second_section')['first_text'] ); ?> </p>
                    <p><?= ( get_field('second_section')['first_text2'] ); ?></p>
					<ul>
                    	<li><?= ( get_field('second_section')['list_1'] ); ?></li>
						<li><?= ( get_field('second_section')['list_2'] ); ?></li>
                    	<li><?= ( get_field('second_section')['list_3'] ); ?></li>
						<li><?= ( get_field('second_section')['list_4'] ); ?></li>
						<li><?= ( get_field('second_section')['list_5'] ); ?></li>
						<li><?= ( get_field('second_section')['list_6'] ); ?></li>
						<li><?= ( get_field('second_section')['list_7'] ); ?></li>
						<li><?= ( get_field('second_section')['list_8'] ); ?></li>
						<li><?= ( get_field('second_section')['list_9'] ); ?></li>
						<li><?= ( get_field('second_section')['list_10'] ); ?></li>
                    </ul>
                    </div>
                </div>
                <div class="arrow-function">
                    <button class="btn btn-link">
                       <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow_.svg" class="black_arrow" alt="">
                       <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow2.svg" class="red_arrow" alt="">
                    </button>
                </div>
            </div>
            <div class="info-box">
                <div class="text-box">
                    <p class="question"><?= ( get_field('second_section')['second_title'] ); ?></p>
                    <div class="info"><p>
					<?= ( get_field('second_section')['second_description'] ); ?> 
                    </p>
					<p><?= ( get_field('second_section')['second_description2'] ); ?></p> 
					<ul>
                    	<li><?= ( get_field('second_section')['first_list'] ); ?> </li>
                    	<li><?= ( get_field('second_section')['second_list'] ); ?> </li>
                    	<li><?= ( get_field('second_section')['third_list'] ); ?></li>
						<li><?= ( get_field('second_section')['fourth_list'] ); ?></li>
                    </ul>  
					<p><?= ( get_field('second_section')['text'] ); ?></p> 
                    </div>
                </div>
                <div class="arrow-function">
                    <button class="btn btn-link">
                       <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow_.svg" class="black_arrow" alt="">
                       <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow2.svg" class="red_arrow" alt="">
                    </button>
                </div>
            </div>
            <div class="info-box">
                <div class="text-box">
                    <p class="question"><?= ( get_field('second_section')['third_title'] ); ?></p>
                    <div class="info"><p>
					<?= ( get_field('second_section')['third_description'] ); ?>
                    </p>  
                    </div>
                </div>
                <div class="arrow-function">
                    <button class="btn btn-link">
                       <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow_.svg" class="black_arrow" alt="">
                       <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow2.svg" class="red_arrow" alt="">
                    </button>
                </div>
            </div>
        </div>
		<div class="box-3images">
			<div class="page_titles">
				<p class="title"><?= ( get_field('third_section')['title'] ); ?></p>
    			<p class="text1"><?= ( get_field('third_section')['text'] ); ?></p>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="image"><img src="<?= ( get_field('third_section')['first_image'] ); ?>"></div>
				</div>
				<div class="col-sm-4">
					<div class="image"><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/steuerberatungImg2.png"></div>
				</div>
				<div class="col-sm-4">
					<div class="image"><img src="<?= ( get_field('third_section')['third_image'] ); ?>"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
