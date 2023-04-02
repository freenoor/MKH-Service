<div id="handel_page" class="otherPages">
<?php 
/*
* Template Name: Handel
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
					<a href="/handel" class="breadcrumbs_active">Handel</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="handel_content schwerpunkte-submenuBlock">
	<div class="container">
		<div class="page_titles">
    		<p class="title"><?= ( get_field('first_section')['heading'] ); ?></p>
    		<p class="subtitle"><?= ( get_field('first_section')['subheading'] ); ?> <br><span class="author-name"><?= ( get_field('first_section')['author'] ); ?></span></p>
		</div>
		<div class="schwerpunkte-submenuImg">
			<img src="<?= ( get_field('first_section')['image'] ); ?>">
		</div>
		<div id="info_block">
    			<div class="row">
    				<div class="col-sm-12">
    					<!-- <p class="subtitle">Handel Schwerpunkte</p> -->
    					<p><?= ( get_field('first_section')['paragraph'] ); ?></p>
						<p class="subtitle"><?= ( get_field('first_section')['first_title'] ); ?></p>
						<ul class="description_list">
                           <li><img src="<?= ( get_field('first_section')['image_1'] ); ?>"><?= ( get_field('first_section')['first_description'] ); ?> </li>
                       </ul>
                       <p class="subtitle"><?= ( get_field('first_section')['second_title'] ); ?></p>
						<ul class="description_list">
                           <li><img src="<?= ( get_field('first_section')['image_2'] ); ?>"><?= ( get_field('first_section')['second_description'] ); ?></li>
                           <li><img src="<?= ( get_field('first_section')['image_3'] ); ?>"><?= ( get_field('first_section')['second_description2'] ); ?></li>
                       </ul>
                       <p class="subtitle">Kundenbindung</p>
						<ul class="description_list">
                           <li><img src="<?= ( get_field('first_section')['image_4'] ); ?>"><?= ( get_field('first_section')['third_description'] ); ?>
                           	<br><?= ( get_field('first_section')['third_description2'] ); ?></li>
                       </ul>
                       
    				</div>
    			</div>
    		</div>
	</div>
</div>
<div id="block_leistungen" class="handel-page">
<div class="container">
        <p class="title"><?= ( get_field('second_section')['heading'] ); ?></p>
        <div class="row">
            <div class="col-sm-3"><a href="/steuerberatung">
                <div class="content">
                    <img src="<?= ( get_field('second_section')['image_1'] ); ?>">
                    <p class="title1"><?= ( get_field('second_section')['first_title'] ); ?></p>
                    <p class="text"><?= ( get_field('second_section')['first_text'] ); ?></p>
                </div></a>
            </div>
            <div class="col-sm-3"><a href="/unternehmensberatung">
                <div class="content">
                    <img src="<?= ( get_field('second_section')['image_2'] ); ?>">
                    <p class="title1"><?= ( get_field('second_section')['second_title'] ); ?></p>
                    <p class="text"><?= ( get_field('second_section')['second_text'] ); ?></p>
                </div></a>
            </div>
            <div class="col-sm-3"><a href="/rechtsberatung">
                <div class="content">
                    <img src="<?= ( get_field('second_section')['image_3'] ); ?>">
                    <p class="title1"><?= ( get_field('second_section')['third_title'] ); ?></p>
                    <p class="text"><?= ( get_field('second_section')['third_text'] ); ?></p>
                </div></a>
            </div>
            <div class="col-sm-3"><a href="/digitalisierung">
                <div class="content">
                    <img src="<?= ( get_field('second_section')['image_4'] ); ?>">
                    <p class="title1"><?= ( get_field('second_section')['fourth_title'] ); ?></p>
                    <p class="text"><?= ( get_field('second_section')['fourth_text'] ); ?></p>
                </div></a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
</div>