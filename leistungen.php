<div id="rechtsberatung_page" class="otherPages">
<?php 
$bodyID = "leistungen_page";
$bodyClass = "otherPages";
/*
* Template Name: Leistungen
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
			</ul>
		</div>
	</div>
</div>

<div class="page_titles">
    <div class="container">
        <p class="title"><?= ( get_field('first_section')['heading'] ); ?>.</p>
        <p class="subtitle"><?= ( get_field('first_section')['description'] ); ?></p>
    </div>
</div>
<div class="leistungen_content">
	<div id="" class="pages_aboutUs">
	    <div class="container">
	        <div class="row">
	                <div class="col-sm-6">
	                <div class="textContent">
	                        <div class="txt">
	                            <p class="title"><?= ( get_field('first_section')['title'] ); ?></p>
	                            <p class="text2"><?= ( get_field('first_section')['text'] ); ?></p>
	                            <div class="aboutUs_btn"><a href="#contact"><?= ( get_field('first_section')['button'] ); ?><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow.svg"></a></div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-sm-6">
	                <div class="imageContent">
	                        <img src="<?= ( get_field('first_section')['image'] ); ?>">
	                    </div>
	                </div>
	        </div>
	    </div>
	</div>
	<div id="moreInfo">
		<div class="container">
		<p class="title"><?= ( get_field('second_section')['heading'] ); ?></p>
		<p class="txt"><?= ( get_field('second_section')['description'] ); ?><br> stellen. Lassen Sie uns noch heute damit beginnen und nehmen Sie Kontakt mit uns auf. Wir freuen uns auf Sie!</p>
		<div class="row">
            <div class="col-sm-6">
                <div class="content">
                    <p class="title1"><?= ( get_field('second_section')['first_title'] ); ?></p>
                    <div class="text show-more-height">
					<?= ( get_field('second_section')['first_text'] ); ?><br><?= ( get_field('second_section')['first_text2'] ); ?>
                    </div>
                    <!-- <div class="show-more btn_">
                        <span>Zeig mehr</span>
                        <img src="assets/images/red-arrow.svg">
                    </div> -->
                </div>    
         	</div>
         	<div class="col-sm-6">
                <div class="content">
                    <p class="title1"><?= ( get_field('second_section')['second_title'] ); ?></p>
                    <div class="text show-more-height">
					<?= ( get_field('second_section')['second_text'] ); ?><br><?= ( get_field('second_section')['second_text2'] ); ?>
                    </div>
                    <!-- <div class="show-more btn_">
                        <span>Zeig mehr</span>
                        <img src="assets/images/red-arrow.svg">
                    </div> -->
                </div>    
         	</div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="content">
                    <p class="title1"><?= ( get_field('second_section')['third_title'] ); ?></p>
                    <div class="text show-more-height">
					<?= ( get_field('second_section')['third_text'] ); ?><br><?= ( get_field('second_section')['third_text2'] ); ?>
                    </div>
                    <!-- <div class="show-more btn_">
                        <span>Zeig mehr</span>
                        <img src="assets/images/red-arrow.svg">
                    </div> -->
                </div>    
         	</div>
         	<div class="col-sm-6">
                <div class="content">
                    <p class="title1"><?= ( get_field('second_section')['fourth_title'] ); ?></p>
                    <div class="text show-more-height">
					<?= ( get_field('second_section')['fourth_text'] ); ?> <br><?= ( get_field('second_section')['fourth_text2'] ); ?>
                    </div>
                    <!-- <div class="show-more btn_">
                        <span>Zeig mehr</span>
                        <img src="assets/images/red-arrow.svg">
                    </div> -->
                </div>    
         	</div>
         </div>
		</div>
	</div>
	<div id="subCategory_info">
		<div class="container">
			<div class="page_titles">
		        <p class="title">Was wir tun</p>
		        <p class="subtitle">Im Mittelpunkt stehen stets Sie, als unser Mandant und Ihre Wünsche. Wir erarbeiten gemeinsam <br>mit Ihnen individuelle Lösungen, die Sie zufrieden stellen.</p>
		    </div>
		<div class="row">
			<div class="col-sm-12">
				<div class="content_imgText">
			  		<div class="image">
			  			<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/presentation.svg">
			  		</div>
			  		<div class="partText">
			  			<p class="title1">Steuerberatung</p>
			  			<p class="txt">Was erwarten Sie von einer steuerlichen Beratung? Um was geht es bei der steuerlichen Beratung eigentlich? Vordergründig um Zahlen und korrekte Ergebnisse. Vor allem geht es aber um Vertrauen und eine hohe Beratungsqualität.</p>
			  			<div class="subcategory_btn">
			  				<a href="/steuerberatung">Mehr wissen<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/red-arrow.svg"></a>
			  			</div>
			  		</div>
		  		</div>
			</div>
			<div class="col-sm-12">
				<div class="content_imgText">
		  		<div class="image">
		  			<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/round-table.svg">
		  		</div>
		  		<div class="partText">
		  			<p class="title1">Unternehmensberatung</p>
		  			<p class="txt">Bei uns treffen Sie auf Berater, die sich in Ihre spezielle Situation hineinversetzen, Ihre Probleme erkennen und lösungsorientiert beraten. Dabei agieren wir stets auf Augenhöhe und sprechen dabei eine eindeutige Sprache – Ihre Sprache.</p>
		  			<div class="subcategory_btn">
		  				<a href="/unternehmensberatung">Mehr wissen<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/red-arrow.svg"></a>
		  			</div>
		  		</div>
		  	</div>
			</div>
			<div class="col-sm-12">
				<div class="content_imgText">
		  		<div class="image">
		  			<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/representative.svg">
		  		</div>
		  		<div class="partText">
		  			<p class="title1">Rechtsberatung</p>
		  			<p class="txt">In diesem Bereich können wir auf jahrelange Erfahrungen zurückblicken, um unseren Mandanten eine vorausschauende, kompetente Beratung zu bieten. Ziel unserer Arbeit ist eine von Branchenkenntnissen geprägte erfolgreiche juristische Beratung.</p>
		  			<div class="subcategory_btn">
		  				<a href="/rechtsberatung">Mehr wissen<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/red-arrow.svg"></a>
		  			</div>
		  		</div>
		  	</div>
			</div>
			<div class="col-sm-12">
				<div class="content_imgText">
		  		<div class="image">
		  			<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/statistics.svg">
		  		</div>
		  		<div class="partText">
		  			<p class="title1">Wirtschaftsprüfung</p>
		  			<p class="txt">Im Bereich Wirtschaftsprüfung kooperieren wir langjährig mit kompetenten Wirtschaftsprüfern aus Bremen, die Ihnen zuverlässige Ergebnisse mit Verbesserungsansätzen und Handlungsoptionen liefern.</p>
		  			<div class="subcategory_btn">
		  				<a href="/wirtschaftsprüfung">Mehr wissen<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/red-arrow.svg"></a>
		  			</div>
		  		</div>
		  	</div>
			</div>
			<div class="col-sm-12">
				<div class="content_imgText">
		  		<div class="image">
		  			<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/chat.svg">
		  		</div>
		  		<div class="partText">
		  			<p class="title1">Digitalisierung</p>
		  			<p class="txt">Eine gute Struktur Ihres digitalen Rechnungswesens sowie Controllings ermöglicht Ihnen, sich um das Wesentliche zu kümmern: Ihre Arbeit, Ihre Kunden, Ihren Erfolg.</p>
		  			<div class="subcategory_btn">
		  				<a href="/digitalisierung">Mehr wissen<img src="<?php echo get_bloginfo('template_directory')?>/assets/images/red-arrow.svg"></a>
		  			</div>
		  		</div>
		  	</div>
			</div>
		</div>		  	
		</div>

	</div>
</div>

<?php get_footer(); ?>