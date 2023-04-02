<div id="spedition-und-transport_page" class="otherPages">
<?php 
/*
* Template Name: Logistik
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
					<a href="/schwerpunkte" class="breadcrumbs_active">Schwerpunkte</a>
				</li>
				<li class="breadcrumbs_item">
					<a href="/logistik" class="breadcrumbs_active">Logistik</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="spedition-und-transport_content schwerpunkte-submenuBlock">
	<div class="container">
		<div class="page_titles">
    		<p class="title"><?= ( get_field('first_section')['heading'] ); ?></p>
    		<p class="subtitle"><?= ( get_field('first_section')['description'] ); ?><br> <?= ( get_field('first_section')['description2'] ); ?></p>
		</div>
		<div class="schwerpunkte-submenuImg">
			<img src="<?= ( get_field('first_section')['image'] ); ?>"/>
		</div>

		<div id="info_block">
    			<div class="row">
    				<div class="col-sm-12">
    					<p><?= ( get_field('first_section')['paragraph'] ); ?></p>
    					<!-- <p class="subtitle">Logistisches Leistungsprektrum</p> -->
    					<ul class="description_list">
                           <li><img src="<?= ( get_field('first_section')['first_image'] ); ?>"><?= ( get_field('first_section')['first_text'] ); ?></li>
                       </ul>
                       <!-- <p class="subtitle">Digitale Transformation</p> -->
    					<ul class="description_list">
                           <li><img src="<?= ( get_field('first_section')['second_image'] ); ?>"><?= ( get_field('first_section')['second_text'] ); ?></li>
                       </ul>
    				</div>
    			</div>
    		</div>
	</div>
</div>


<div id="block_leistungen" class="logistik-page">
    <div class="container">
        <p class="title"><?= ( get_field('second_section')['heading'] ); ?></p>
        <div class="row">
            <div class="col-sm-3"><a href="/steuerberatung">
                <div class="content">
                    <img src="<?= ( get_field('second_section')['first_image'] ); ?>">
                    <p class="title1"><?= ( get_field('second_section')['first_title'] ); ?></p>
                    <p class="text"><?= ( get_field('second_section')['first_text'] ); ?></p>
                </div></a>
            </div>
            <div class="col-sm-3"><a href="/unternehmensberatung">
                <div class="content">
                    <img src="<?= ( get_field('second_section')['second_image'] ); ?>">
                    <p class="title1"><?= ( get_field('second_section')['second_title'] ); ?></p>
                    <p class="text"><?= ( get_field('second_section')['second_text'] ); ?></p>
                </div></a>
            </div>
            <div class="col-sm-3"><a href="/rechtsberatung">
                <div class="content">
                    <img src="<?= ( get_field('second_section')['third_image'] ); ?>">
                    <p class="title1"><?= ( get_field('second_section')['third_title'] ); ?></p>
                    <p class="text"><?= ( get_field('second_section')['third_text'] ); ?></p>
                </div></a>
            </div>
            <div class="col-sm-3"><a href="/digitalisierung">
                <div class="content">
                    <img src="<?= ( get_field('second_section')['fourth_image'] ); ?>">
                    <p class="title1"><?= ( get_field('second_section')['fourth_title'] ); ?></p>
                    <p class="text"><?= ( get_field('second_section')['fourth_text'] ); ?></p>
                </div></a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
</div>