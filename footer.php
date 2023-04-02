<footer>
<div id="contact">
    <div class="container">
        <div class="content">
            <p class="title">Kontaktanfrage</p>
            <p class="subtitle">Bitte geben Sie in das nachstehende Formular die benötigten Informationen ein, damit wir Ihnen passgenau und zeitnah antworten können.</p>
            <!-- <form id="contact_form" action="mail.php" method="POST">	 -->
                <!-- <div class="row">
                    <div class="col-sm-6">
                        <div class="field name required">
                            <input type="text" name="name" id="form_name" placeholder="Vor- & Nachname*" required="">
                        </div>
                        <div class="field email required">
                            <input type="text" name="email" id="form_email" placeholder="E-Mail-Adresse*" required="">
                        </div>
                        <div class="field phone_number required">
                            <input type="text" name="tel" id="form_tel" placeholder="Telefonnummer*" required="">
                        </div>
                    </div>
                    <div class="col-sm-6"> 
                        <div class="field comment required">
                            <textarea name="message" rows="3" cols="5" id="msg_text" placeholder="Nachricht*" required=""></textarea>
                        </div>
                        <input type="text" name="website" id="website" style="display: none;">
                        <div class="contact_btn">
                            <button type="submit" class="g-recaptcha" data-sitekey="6LcX3wUaAAAAALKJVgHv2EEuIfYTOTJch6MHpJfu" data-callback='onSubmit' data-action='submit'>Senden <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/left-arrow.svg" alt=""></button>
                        </div>
                    </div>
                </div> -->
								<div class="contact-form-section">
								<?php echo do_shortcode('[contact-form-7 id="1497" title="Contact form 1"]') ?>
								</div>
            <!-- </form> -->
        </div>
    </div>  
   <!-- function onSubmit(token) {
     document.getElementById("contact_form").submit();
   }
 </script> -->
</div>
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="footer_col_1">
                    <img src="<?php echo get_bloginfo('template_directory')?>/assets/images/logo-mkh.png" alt="Webiste Logo" id="footerLogo"/>
                    <!-- <p>Folgen Sie uns im <br>sozialen Netzwerk:</p>
                    <ul class="social_icons">
                        <li class="redHoverActive active_socialIcon"><a href="#"><img src="assets/images/fb.svg"></a></li>
                        <li class="redHover"><a href="#"><img src="assets/images/twitter.svg"></a></li>
                        <li class="redHover"><a href="#"><img src="assets/images/linkedin.svg"></a></li>
                    </ul> -->
                </div>
            </div>

            <div class="col-sm-2">
                <div class="footer_col_2">
                    <a href="/leistungen"><h3>Leistungen</h3></a>
                        <ul>
                            <li><a href="/steuerberatung">Steuerberatung</a></li>
                            <li><a href="/unternehmensberatung">Unternehmensberatung</a></li>
                            <li><a href="/rechtsberatung">Rechtsberatung</a></li>
                            <li><a href="/wirtschaftsprufung">Wirtschaftsprüfung</a></li>
                            <li><a href="/digitalisierung">Digitalisierung</a></li>
                        </ul>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="footer_col_3">
                    <a href="/schwerpunkte"><h3>Schwerpunkte</h3></a>
                    <ul>
                        <li><a href="/pflege">Pflege</a></li>
                        <li><a href="/logistik">Logistik</a></li>
                        <li><a href="/handwerk">Handwerk</a></li>
                        <li><a href="/industrie">Industrie</a></li>
                        <li><a href="/handel">Handel</a></li>
                        <li><a href="/freiberufler">Freiberufler</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="footer_col_4">
                    <h3>Infos</h3>
                    <ul>
                        <li><a href="/die-kanzlei">Die Kanzlei</a></li>
                        <li><a href="/aktuelles">Aktuelles</a></li>
                        <li><a href="/jobs">Jobs</a></li>
                        <li><a href="/datenschutz">Datenschutz</a></li>
                        <li><a href="/impressum">Impressum</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="footer_col_4">
                    <h3>Kontakt</h3>
                    <ul>
                        <li><a href="#">mkh</a></li>
                        <li><a href="#">Hoerneckestraße 39</a></li>
                        <li><a href="#">28217 Bremen</a></li>
                        <li><a href="#">0049 421 598 37 0</a></li>
                        <li><a href="mailto:info@mkh-bremen.de">info@mkh-bremen.de</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="line"></div>
            <p class="copyRight copyRightText">© <?php echo "".date("Y");?> - Michalek, Kuhz, Hollenbeck | created by <a href="https://www.solution25.com/" style="color: #FFF;font-weight: 600;" target="_blank">solution25</a></p>
        </div>
    </div>
    <div class="cookies-banner" style="display:none">
        <script id="CookieDeclaration" src="https://consent.cookiebot.com/4002b938-dcbd-4f61-95b5-9848bce67433/cd.js" type="text/javascript" async></script>
    </div>
</div>
</footer>
</body>
<?php wp_footer(); ?>

</html>

