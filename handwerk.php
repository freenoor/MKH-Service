<div id="handwerk_page" class="otherPages">
<?php 
/*
* Template Name: Handwerk
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
					<a href="/handwerk" class="breadcrumbs_active">Handwerk</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="handwerk_content schwerpunkte-submenuBlock">
	<div class="container">
		<div class="page_titles">
    		<p class="title"><?= ( get_field('first_section')['heading'] ); ?></p>
    		<p class="subtitle"><?= ( get_field('first_section')['subheading'] ); ?> <br><span class="author-name"><?= ( get_field('first_section')['author'] ); ?></span></p>
		</div>
		<div class="schwerpunkte-submenuImg">
			<img src="<?= ( get_field('first_section')['image'] ); ?>"/>
		</div>

		<div id="info_block">
    			<div class="row">
    				<div class="col-sm-12">
    					<!-- <p class="subtitle">Handwerk Schwerpunkte</p> -->
    					<p><?= ( get_field('first_section')['first_text'] ); ?></p>
    					<p><?= ( get_field('first_section')['second_text'] ); ?></p>
    					<p><?= ( get_field('first_section')['third_text'] ); ?></p>
    				</div>
    			</div>
    		</div>
	</div>
</div>

<div id="block_leistungen" class="handwerk-page">
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