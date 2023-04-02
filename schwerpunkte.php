<div id="Schwerpunkte" class="otherPages">
<?php 
$bodyClass = "otherPages";
/*
* Template Name: Schwerpunkte
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
					<a href="/schwerpunkte.php" class="breadcrumbs_active">Schwerpunkte</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="page_titles">
    <div class="container">
        <!-- <p class="title">Unser Schwerpunkt</p> -->
        <p class="subtitle"><?= ( get_field('first_section')['heading'] ); ?><span class="author-name"><?= ( get_field('first_section')['author'] ); ?></span></p>
    </div>
</div>
<div class="schwerpunkte_content">
	<div id="" class="pages_aboutUs">
	    <div class="container">
	        <div class="row">
	                <div class="col-sm-6">
	                <div class="textContent">
	                        <div class="txt">
	                            <p class="title"><?= ( get_field('first_section')['title'] ); ?> &amp; <?= ( get_field('first_section')['title2'] ); ?></p>
	                            <p class="text2"><?= ( get_field('first_section')['text'] ); ?></p>
	                            <div class="aboutUs_btn"><a href="#contact"><?= ( get_field('first_section')['button'] ); ?><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow.svg"></a></div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-sm-6">
	                <div class="imageContent">
	                        <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/mkh-homepage-slider-3.jpg">
	                    </div>
	                </div>
	        </div>
	    </div>
	</div>

	<div id="block_believeUs">
		<div class="page_titles">
	    	<div class="container">
	        	<p class="title"><?= ( get_field('second_section')['heading'] ); ?></p>
	        	<p class="subtitle"><?= ( get_field('second_section')['subheading'] ); ?></p>
	    	</div>
		</div>
		<div class="container">
			<div class="row row1">
	            <div class="col-sm-4">
	                <div class="content">
	                    <a href="/pflege"><img src="<?= ( get_field('second_section')['first_icon'] ); ?>"></a>
	                    <p class="title1"><?= ( get_field('second_section')['first_title'] ); ?></p>
	                    <!-- <p class="text">Bereits seit Anfang der 1970er Jahre liegt unser Kanzleischwerpunkt auf der umfassenden Beratung von voll- und teilstationären Altenpflegeeinrichtungen und ambulanten Pflegediensten.</p> -->
	                </div>
	            </div>
	            <div class="col-sm-4">
	                <div class="content">
	                    <a href="/logistik"><img src="<?= ( get_field('second_section')['second_icon'] ); ?>"></a>
	                    <p class="title1"><?= ( get_field('second_section')['second_title'] ); ?></p>
	                    <!-- <p class="text">Wir bieten Ihnen in der Speditions- und Logisitkunternehmen aufgrund unsererjahrelangen Erfahrungen und unserer Branchenkenntnis einen Mehrwert.</p> -->
	                </div>
	            </div>
	            <div class="col-sm-4">
	                <div class="content">
	                    <a href="/handwerk"><img src="<?= ( get_field('second_section')['third_icon'] ); ?>"></a>
	                    <p class="title1"><?= ( get_field('second_section')['third_title'] ); ?></p>
	                    <!-- <p class="text">Wir unterstützen Sie bei geplanten Investitionen, prüfen die Machbarkeit und stehen Ihnen mit all unserem Fachwissen zur Verfügung.</p> -->
	                </div>
	            </div>
        	</div>
        	<div class="row row2">
	            <div class="col-sm-4">
	                <div class="content">
	                    <a href="/industrie"><img src="<?= ( get_field('second_section')['fourth_icon'] ); ?>"></a>
	                    <p class="title1"><?= ( get_field('second_section')['fourth_title'] ); ?></p>
	                   <!--  <p class="text">Wir bieten Ihnen hochwertige Lösungen und digitalbasierte Geschäftsmodelle in den Bereichen Maschinenbau, Elektro- und Autoindustrie an.</p> -->
	                </div>
	            </div>
	            <div class="col-sm-4">
	                <div class="content">
	                    <a href="/handel"><img src="<?= ( get_field('second_section')['fifth_icon'] ); ?>"></a>
	                    <p class="title1"><?= ( get_field('second_section')['fifth_title'] ); ?></p>
	                    <!-- <p class="text">Nur wer seine Kunden in den Mittelpunkt stellt und ihnen ein besonderes Einkaufserlebnis bietet, wird auch künftig vor den steigenden Kundenerwartungen bestehen können.</p> -->
	                </div>
	            </div>
	            <div class="col-sm-4">
	                <div class="content">
	                    <a href="/freiberufler"><img src="<?= ( get_field('second_section')['sixth_icon'] ); ?>"></a>
	                    <p class="title1"><?= ( get_field('second_section')['sixth_title'] ); ?></p>
	                   <!--  <p class="text">Unabhängig davon, ob Sie Rechtsanwalt, Arzt, Architekt, Unternehmensberater oder Ostheopath sind – Sie stellen einen wichtigen Baustein unserer Volkswirtschaft dar.</p> -->
	                </div>
	            </div>
        	</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>