<div id="digitalisierung_page" class="otherPages">
<?php 
$bodyID = "digitalisierung_page";
$bodyClass = "otherPages";
/*
* Template Name: Digitaliserung
*/
get_header(); 
?>
<ul class="right-images">
                <li><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/Signet_Digitale_Kanzlei_2021_RGB.svg"></li>
            </ul>
<div id="breadcrumbs_nav">
	<div class="container">
		<div class="konfigurator_breadcrumbs">
			<ul class="breadcrumbs">
				<li class="breadcrumbs_item">
					<a href="/">Home</a>
				</li>
				<li class="breadcrumbs_item">
					<a href="/leistungen.php" class="breadcrumbs_active">Leistungen</a>
				</li>
				<li class="breadcrumbs_item">
					<a href="/digitalisierung.php" class="breadcrumbs_active">Digitalisierung</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="digitalisierung_content leistungen-submenuBlock">
	<div class="container">
		<div class="page_titles">
    		<p class="title"><?= ( get_field('first_section')['heading'] ); ?></p>
    		<p class="subtitle"><?= ( get_field('first_section')['description'] ); ?> <br><?= ( get_field('first_section')['description2'] ); ?> <span class="author-name"><?= ( get_field('first_section')['author'] ); ?></span></p>
		</div>

		<div id="block_partner" class="digitalisierung_aboutUs leistungen-submenuAboutUs">
	        <div class="row">
                <div class="col-sm-6">
                    <div class="imageContent">
                    	<p class="mobile-subtitle"><?= ( get_field('first_section')['title'] ); ?></p>
                        <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/digitalisierung-img.png">
                        <p class="subtitle"><?= ( get_field('first_section')['subtitle'] ); ?></p>
                        <div class="whiteRectangle">
                        	<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/chat1.svg">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="textContent">
                        <div class="txt">
                            <p class="title"><?= ( get_field('content')['title'] ); ?></p>
                            <p class="text2"><?= ( get_field('content')['text'] ); ?></p>
                            <div class="partner_btn"><a href="#contact"><?= ( get_field('content')['button'] ); ?><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow.svg"></a></div>
                        </div>
                    </div>
                </div>
            </div>
	    </div>
	    <div class="digitalisierungText leistungen-submenuText"> 
	    	<div class="page_titles">
    			<p class="title"><?= ( get_field('accordion_section')['heading'] ); ?></p>
    			<p class="text1"><?= ( get_field('accordion_section')['text'] ); ?></p>
			</div>
		</div>

		<div id="questions_block">
            <div class="info-box">
                <div class="text-box">
                    <p class="question"><?= ( get_field('accordion_section')['title'] ); ?></p>
					<div class="info">
						<ul>
	                    	<li><?= ( get_field('accordion_section')['list_1'] ); ?> </li>
	                    	<li><?= ( get_field('accordion_section')['list_2'] ); ?></li>
	                    	<li><?= ( get_field('accordion_section')['list_3'] ); ?></li>
							<li><?= ( get_field('accordion_section')['list_4'] ); ?></li>
							<li><?= ( get_field('accordion_section')['list_5'] ); ?></li>
							<li><?= ( get_field('accordion_section')['list_6'] ); ?></li>
							<li><?= ( get_field('accordion_section')['list_7'] ); ?></li>
							<li><?= ( get_field('accordion_section')['list_8'] ); ?></li>
							<li><?= ( get_field('accordion_section')['list_9'] ); ?></li>
	                    </ul>
                    <p><?= ( get_field('accordion_section')['description'] ); ?></p>
                    <div id="mym-insert-here-86299"></div>
					<script src="https://www.datev-mymarketing.de/onlineMedia/code.js?ids=86299"></script>
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
				<p class="title">Hier leisten wir unsere Arbeit</p>
    			<p class="text1">"Zusammenkommen ist ein Beginn, Zusammenbleiben ist ein Fortschritt, Zusammenarbeiten ist ein Erfolg." (Henry Ford)</p>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="image"><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/steuerberatungImg1.png"></div>
				</div>
				<div class="col-sm-4">
					<div class="image"><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/steuerberatungImg2.png"></div>
				</div>
				<div class="col-sm-4">
					<div class="image"><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/steuerberatungImg3.png"></div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
