<ul class="right-images">
                <li><img src="<?php echo get_bloginfo('template_directory')?>/assets/images/Signet_Digitale_Kanzlei_2021_RGB.svg"></li>
            </ul>
<div id="jobs_page" class="otherPages">
		<?php 
/*
* Template Name: Jobs
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
                        <a href="/jobs" class="breadcrumbs_active">Jobs </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="page_titles">
        <div class="container">
        <p class="title"><?= ( get_field('slider_section')['heading'] ); ?></p>
        <p class="subtitle"><?= ( get_field('slider_section')['subheading'] ); ?></p>
            
        </div>
    </div>
    <div id="die-kanzlei_slider">
        <div class="container">
            <!-- <div class="text_info">
                <p class="title">Unsere Crew</p>
                <p class="text">Respektvoller Umgang und Transparenz sind bei uns großgeschrieben. Wir legen viel<br> Wert auf Harmonie und Teamgeist und bieten Ihnen ein anspruchsvolles, interessantes<br> Tätigkeitsfeld im direkten Kontakt zu Mandanten. </p>
            </div> -->


            <div id="slider2_content" class="container">
                    <div class="slider_img">
                        <div class="item image1">  
                           <img src="<?= ( get_field('slider_section')['image_1'] ); ?>" alt="">
                        </div>   
                        <div class="item image2">  
                           <img src="<?= ( get_field('slider_section')['image_2'] ); ?>" alt="">
                        </div>
                        <div class="item image3">  
                           <img src="<?= ( get_field('slider_section')['image_3'] ); ?>" alt="">
                        </div> 
                        <div class="item image4">  
                           <img src="<?= ( get_field('slider_section')['image_4'] ); ?>" alt="">
                        </div>
                        <!-- <div class="item image5">  
                            <img src="<?= ( get_field('slider_section')['image_5'] ); ?>" alt="">
                        </div>    -->
                        <div class="item image6">  
                           <img src="<?= ( get_field('slider_section')['image_6'] ); ?>" alt="">
                        </div>
                        <div class="item image7">  
                           <img src="<?= ( get_field('slider_section')['image_7'] ); ?>" alt="">
                        </div> 
                        <div class="item image8">  
                            <img src="<?= ( get_field('slider_section')['image_8'] ); ?>" alt="">
                        </div>
                        <div class="item image9">  
                            <img src="<?= ( get_field('slider_section')['image_9'] ); ?>" alt="">
                        </div>
                        <div class="item image10">  
                            <img src="<?= ( get_field('slider_section')['image_10'] ); ?>" alt="">
                        </div>
                        <div class="item image11">  
                            <img src="<?= ( get_field('slider_section')['image_11'] ); ?>" alt="">
                        </div>
                        <!-- <div class="item image12">  
                            <img src="<?= ( get_field('slider_section')['image_12'] ); ?>" alt="">
                        </div> -->
                    </div>
                </div>
        </div>
    </div>

    <div class="page_titles">
        <div class="container">
            <p class="text"><?= ( get_field('slider_section')['text'] ); ?></p>
        </div>
    </div>


    <div class="jobs_content">
        <div class="container">
            <div id="jobs-position">
                <div class="row">
                    <div class="col-sm-4">
                      
                            <div class="content">
                                <p class="category"><img src="<?= ( get_field('jobs_content')['first_image'] ); ?>" class="job-logo">
                                <img src="<?= ( get_field('jobs_content')['first_logo'] ); ?>" class="job-logo-hover">
                                </p>
                                <div class="line"></div>
                                <a href="#apply-formular"><p class="category_title"><?= ( get_field('jobs_content')['first_title'] ); ?><br><?= ( get_field('jobs_content')['first_title2'] ); ?></p></a>
                                <p class="description"><?= ( get_field('jobs_content')['first_description'] ); ?></p>
                                <!-- <p class="nr_position">1 Position Laufend</p> -->
                            </div>
                    
                    </div>
                    <div class="col-sm-4">
                       
                            <div class="content">
                                <p class="category"><img src="<?= ( get_field('jobs_content')['second_image'] ); ?>" class="job-logo">
                                <img src="<?= ( get_field('jobs_content')['second_logo'] ); ?>" class="job-logo-hover"></p>
                                <div class="line"></div>
                                <a href="#apply-formular"><p class="category_title"><?= ( get_field('jobs_content')['second_title'] ); ?> <br><?= ( get_field('jobs_content')['second_title2'] ); ?></p></a>
                                <p class="description"><?= ( get_field('jobs_content')['second_description'] ); ?></p>
                                <!-- <p class="nr_position">1 Position Laufend</p> -->
                            </div>
                    </div>
                    <div class="col-sm-4">
                        
                            <div class="content">
                                <p class="category"><img src="<?= ( get_field('jobs_content')['third_image'] ); ?>" class="job-logo">
                                <img src="<?= ( get_field('jobs_content')['third_logo'] ); ?>" class="job-logo-hover"></p>
                                <div class="line"></div>
                                <a href="#apply-formular"><p class="category_title"><?= ( get_field('jobs_content')['third_title'] ); ?> <br><?= ( get_field('jobs_content')['third_title2'] ); ?></p></a>
                                <p class="description"><?= ( get_field('jobs_content')['third_description'] ); ?></p>
                                <!-- <p class="nr_position">1 Position Laufend</p> -->
                            </div>
                       
                    </div>
                </div>
               <!--  <div class="row">
                    <div class="col-sm-4">
                        
                            <div class="content">
                                <p class="category">Strategie</p>
                                <div class="line"></div>
                                <p class="category_title">Steuerfachangestellte</p>
                                <p class="description">Hoerneckestraße 39 28217 Bremen</p>
                                <p class="nr_position">1 Position Laufend</p>
                            </div>
                        
                    </div>
                    <div class="col-sm-4">
                        
                            <div class="content">
                                <p class="category">Strategie</p>
                                <div class="line"></div>
                                <p class="category_title">Steuerfachwirte</p>
                                <p class="description">Hoerneckestraße 39 28217 Bremen</p>
                                <p class="nr_position">1 Position Laufend</p>
                            </div>
                       
                    </div>
                    <div class="col-sm-4">
                        
                            <div class="content">
                                <p class="category">Strategie</p>
                                <div class="line"></div>
                                <p class="category_title">Bilanzbuchhalter</p>
                                <p class="description">Hoerneckestraße 39 28217 Bremen</p>
                                <p class="nr_position">1 Position Laufend</p>
                            </div>
                       
                    </div>
                </div> -->
            </div>

            <div id="apply-formular">
                <div class="page_titles">                        
                    <p class="title">Hier ganz einfach bewerben</p>
                    <p class="subtitle">Bitte fülle das Formular aus und sende Deine Bewerbung in nur wenigen Schritten.<br>
(Dateitypen: pdf, doc, docx, jpg, png, jpeg - max. 2 MB pro Datei) </p>
                </div>
                <form id="apply_form" action="/upload/index.php" method="post" enctype="multipart/form-data"> 
                <div class="row">
                    <div class="col-sm-6">
                        <div class="field name required">
                            <input type="text" name="job-name" id="name_lastname" placeholder="Vorname & Nachname*" required="">
                        </div>
                        <div class="field email required">
                            <input type="text" name="job-email" id="e-mail" placeholder="E-Mail-Adresse*" required="">
                        </div>
                        <!-- <div class="field phone_number required">
                            <input type="text" name="job-tel" id="tel" placeholder="Telefonnummer*" required="">
                        </div> -->
                        <!-- <div class="field position required">
                            <input type="text" name="job-position" id="position" placeholder="Position*" required="">
                        </div> -->
                    </div>
                    <div class="col-sm-6" id="fileUpload"> 
                    <div class="field phone_number required">
                            <input type="text" name="job-tel" id="tel" placeholder="Telefonnummer*" required="">
                        </div>
                        <!-- <div class="field photo-file required">
                            <label class="apply-label">Bewerbungsfoto</label>
                            <input type="file" name="uploadfoto" id="uploadfoto" style="display:none;"/>
                            <label class="up-btn" for="uploadfoto">Hochladen<img src="assets/images/black-arrow.svg"></label>
                        </div>
                        <div class="field cv required">
                            <label class="apply-label">Lebenslauf*</label>
                            <input type="file" name="uploadfile_1" id="uploadfile_1" oninvalid="this.setCustomValidity('Bitte die Datei hochladen.')" oninput="setCustomValidity('')" required="">
                            <label class="up-btn" for="uploadfile_1">Hochladen<img src="assets/images/black-arrow.svg"></label>
                        </div>
                        <div class="field letter required">
                            <label class="apply-label">Bewerbungsschreiben</label>
                            <input type="file" name="uploadfile_2" id="uploadfile_2" style="display:none;"/>
                            <label class="up-btn" for="uploadfile_2">Hochladen<img src="assets/images/black-arrow.svg"></label>
                        </div> -->
                        <div class="contact_btn">
                            <button type="submit" name="submit" value="SUBMIT">Senden <img src="https://mkh-bremen.c-1955.maxcluster.net/wp-content/uploads/2022/09/left-arrow-1.svg"></button>
                        </div>
                    </div>
                </div>
            </form>
            </div>

            <!-- <div id="ourValues">
                <p class="title">Unsere Werte</p>
                <div class="row text-row">
                    <div class="col-sm-6">
                        <p class="text">Unser Mandantenstamm wächst und unser<br> Team muss mitwachsen!</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="description_word">
                            <ul>
                                <li>Vertrauen</li>
                                <li>Zusammenarbeit</li>
                            </ul>
                            <ul>
                                <li>Professionalität</li>
                                <li>Transparenz</li>
                                <li>Fairness</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row image-row1">
                    <div class="col-sm-7">
                        <img src="assets/images/valuesBlock1.png" class="img1">
                    </div>
                    <div class="col-sm-5">
                        <p class="img-description">Unseres Büros</p>
                        <img src="assets/images/valuesBlock2.png" class="img2">
                    </div>
                </div>
                <div class="row image-row2">
                    <div class="col-sm-5">
                        <img src="assets/images/short3.jpg" class="img4">
                    </div>
                    <div class="col-sm-7">
                        <img src="assets/images/job-page.jpg" class="img3">
                    </div>
                </div>
                <div class="row image-row3">
                    <div class="col-sm-7">
                        <img src="assets/images/long1.jpg" class="img1">
                    </div>
                    <div class="col-sm-5">
                        <img src="assets/images/short1.jpg" class="img2">
                    </div>
                </div>
                <div class="row image-row4">
                    <div class="col-sm-5">
                        <img src="assets/images/short2.jpg" class="img4">
                    </div>
                    <div class="col-sm-7">
                        <img src="assets/images/long2.jpg" class="img3">
                    </div>
                </div>
            </div> -->
        </div>
    </div>
		<?php get_footer(); ?>
</div>