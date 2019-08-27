<?php /* Template Name: Contact Us */ ?>

<?php get_header(); ?>

<header class="basic-page-header">
  <h1 id="top">Contact Us</h1>
</header>

<main>
<div class="container container-row"> 
    <div class="row" id="contactContainer">
        <section id="contactBlock" class="col col-sm-6">
               <div class="contact-section">
                    <h2>Essential Massage &amp; Wellness</h2>
                    <p>460 5th Street, Suite C &amp; F</p>
                    <p>Lake Oswego, OR 97034</p>
                    <p><span class="glyphicon glyphicon-earphone"></span> &nbsp; <a href="tel:+1-917-574-5696">917-574-5696</a></p>
                    <span><a href="#map-section" class="btn btn-primary btn-lg product-button" role="button" id="map-button">Map</a></span>
                </div>
            <figure id="officePic">
            <img src=<?php echo "\"" . get_template_directory_uri() . "/images/officePic1.jpg" . "\"" . " alt=\"Essential Massage and Wellness Office in Lake Oswego, OR\"" . " id=\"emwOffice1\""; ?>>
                <figcaption>Therapy offices are located up these stairs and to the right.</figcaption>
            </figure>
        </section>
        <hr>
        <section class="col col-sm-6" id="contactForm1">
            <div id="form-container">
                <h2>Send Us a Message</h2>
                <?php 
                    $my_postid = 194;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?>
            </div>
        </section>
    </div>
    </div>
    <div class="map-responsive" id="map-section">
        <?php 
            $my_postid = 311;
            $content = get_post_field('post_content', $my_postid);
            $content = apply_filters('the_content', $content);
            $content = str_replace(']]>', ']]&gt;', $content);
            echo $content;
        ?>            
    </div>
    <div class="back-to-top">
        <a href="https://www.google.com/maps/dir/My+location/Essential+Massage+and+Wellness,+460+5th+St,+Lake+Oswego,+OR+97034/data=!4m6!4m5!1m0!1m2!1m1!1s0x54957499991b3249:0x3d39751512ffed12!3e0?sa=X&ved=0ahUKEwj6vNPjpb_YAhVbGGMKHTeZBBUQox0INjAA" class="btn btn-primary btn-lg product-button" target="_blank" role="button">Directions</a>
    </div>
	<div class="back-to-top">
		<a href="/" class="backlink">&lt; Home</a> | <a href="#top">Back to Top </a>
	</div>	
</main>

<?php get_footer(); ?>