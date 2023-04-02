<div id="Pflege" class="otherPages">
<?php 
$bodyClass = "otherPages";
/*
* Template Name: Pflege
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
					<a href="/industrie" class="breadcrumbs_active">Pflege</a>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="industrie_content schwerpunkte-submenuBlock">
	<div class="container">
		<div class="page_titles">
    		<p class="title"><?= ( get_field('first_section')['heading'] ); ?></p>
    		<p class="subtitle"><?= ( get_field('first_section')['subheading'] ); ?><br><?= ( get_field('first_section')['subheading2'] ); ?> <span class="author-name"><?= ( get_field('first_section')['author'] ); ?></span></p>
		</div>
		<div class="schwerpunkte-submenuImg">
			<img src="<?= ( get_field('first_section')['image'] ); ?>"/>
		</div>

		<div id="info_block">
    			<div class="row">
    				<div class="col-sm-12">
    					<p><?= ( get_field('first_section')['paragraph'] ); ?></p>
						<p><?= ( get_field('first_section')['paragraph2'] ); ?></p>
						<p class="subtitle"><?= ( get_field('first_section')['first_title'] ); ?></p>
    					<ul class="description_list">
                           <li><img src="<?= ( get_field('first_section')['first_image'] ); ?>"><?= ( get_field('first_section')['first_text'] ); ?> </li>
						   <li><img src="<?= ( get_field('first_section')['second_image'] ); ?>"><?= ( get_field('first_section')['second_text'] ); ?> </li>
						   <li><img src="<?= ( get_field('first_section')['third_image'] ); ?>"><?= ( get_field('first_section')['third_text'] ); ?> </li>
						   <li><img src="<?= ( get_field('first_section')['fourth_image'] ); ?>"><?= ( get_field('first_section')['fourth_text'] ); ?> </li>
						   <li><img src="<?= ( get_field('first_section')['fifth_image'] ); ?>"><?= ( get_field('first_section')['fifth_text'] ); ?> </li>
						</ul>
						<p class="subtitle"><?= ( get_field('first_section')['second_title'] ); ?></p>
    					<ul class="description_list">
						   <li><img src="<?= ( get_field('first_section')['first_image2'] ); ?>"><?= ( get_field('first_section')['first_text2'] ); ?> </li>
						   <li><img src="<?= ( get_field('first_section')['second_image2'] ); ?>"><?= ( get_field('first_section')['second_text2'] ); ?> </li>
						   <li><img src="<?= ( get_field('first_section')['third_image2'] ); ?>"><?= ( get_field('first_section')['third_text2'] ); ?> </li>
						   <li><img src="<?= ( get_field('first_section')['fourth_image2'] ); ?>"><?= ( get_field('first_section')['fourth_text2'] ); ?> </li>
						   <li><img src="<?= ( get_field('first_section')['fifth_image2'] ); ?>"><?= ( get_field('first_section')['fifth_text2'] ); ?> </li>
						   <li><img src="<?= ( get_field('first_section')['sixth_image2'] ); ?>"><?= ( get_field('first_section')['sixth_text2'] ); ?> </li>
						   <li><img src="<?= ( get_field('first_section')['seventh_image2'] ); ?>"><?= ( get_field('first_section')['seventh_text2'] ); ?> </li>
						</ul>
    				</div>
    			</div>
    		</div>
	</div>
</div>

<?php get_footer(); ?>
