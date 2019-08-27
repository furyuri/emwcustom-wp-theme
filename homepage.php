<?php /* Template Name: HomePage */ ?>

<?php get_header(); ?>

<header>
    <div class="jumbotron jumbotron-fluid">
      <span class="display-3"><h1 id="top">Essential massage therapy for every-body.</h1></span>
            <?php 
                $my_postid = 68;
                $content = get_post_field('post_content', $my_postid);
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
            ?>

        <a class="btn btn-primary btn-lg" href="services-rates#schedulicity-block" role="button">Schedule My Massage &nbsp;<span class="glyphicon glyphicon-calendar"></span></a>
        <br>
        <a class="btn btn-primary btn-lg" href="https://www.thegiftcardcafe.com/cart/indexpac.php?storeID=9635" target="_blank" role="button">Buy a Gift Certificate &nbsp;<span class="glyphicon glyphicon-credit-card"></span></a>
            <?php 
                $my_postid = 392;
                $content = get_post_field('post_content', $my_postid);
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
            ?>	
    </div>    
</header>
<main>
<!-- Photo of Office / Contact Info & Address -->
<section class="container container-row">
    <div class="row">
        <div class="col col-sm-6 col-md-8 col-lg-9" id="officePhoto1">
        </div>
        
        <div class="col col-sm-6 col-md-4 col-lg-3" id="contactBlock1">
            <div class="contact-section">
                <h3>Visit Us</h3>
                <a href="https://www.google.com/maps/dir/My+location/Essential+Massage+and+Wellness,+460+5th+St,+Lake+Oswego,+OR+97034/data=!4m6!4m5!1m0!1m2!1m1!1s0x54957499991b3249:0x3d39751512ffed12!3e0?sa=X&ved=0ahUKEwj6vNPjpb_YAhVbGGMKHTeZBBUQox0INjAA" target="_blank">
                    <p>460 5th Street, Suite C &amp; F</p>
                <p>Lake Oswego, OR 97034</p></a>
            </div>
            <!-- IMplement later
            <div class="contact-section">
                <h3>Photo Gallery</h3>
                <a href="">
                    <p>Check us out before-hand <br>and see our<br>beautiful space.</p>
                </a>
            </div> -->
            
            <div class="contact-section">
                <h3>Hours</h3>
                    <p>Mon / Tues / Thurs</p>
                    <p>9:00 a.m. - 9:00 p.m.</p>
                    <p>Weds / Fri / Sat</p>
                    <p>9:00 a.m. - 6:00 p.m.</p>
                    <p>Sunday: Closed</p>
            </div>
            
            <div class="contact-section">
                <h3>Questions?</h3>
                <p><span class="glyphicon glyphicon-earphone"></span> &nbsp; <a href="tel:+1-917-574-5696">917-574-5696</a></p>
            </div>            
        </div>
    </div>
</section>

<!-- Random Review Posts -->
<section>
        <article class="homepage-review">
            <?php 
                $my_postid = 22;
                $content = get_post_field('post_content', $my_postid);
                $content = apply_filters('the_content', $content);
                $content = str_replace(']]>', ']]&gt;', $content);
                echo $content;
            ?>
        </article>
</section>

<!-- Our Therapists - Therapist Bio's -->

<section class="container container-row therapist-bio-section">
    <div class="row">
        <h2 class="bio-section-header col-sm-12">Meet Our &nbsp;<em>Amazing</em> Therapists <br> <span style="font-size: .75em;">in Lake Oswego OR.</span></h2>
    </div>
    
    <div class="row">
        <div class="col col-xs-12 col-sm-6 col-lg-6 therapist-bio">
            <img src=<?php echo "\"" . get_template_directory_uri() . "/images/profile-small-dana_2.jpg" . "\"" . " alt=\"Dana Lofstrom Massage Therapist in Lake Oswego, Oregon\"" . " id=\"danaProfile\""; ?>>
            
            <h3 class="therapist-bio-header">Dana</h3>
            <article class="profile-main">
                <?php 
                    $my_postid = 81;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?>
            </article>
        </div>
        
        <div class="col col-xs-12 col-sm-6 col-lg-6 therapist-bio">
            <img src=<?php echo "\"" . get_template_directory_uri() . "/images/profile-small-jenny_2_orig.jpg" . "\"" . " alt=\"Jenny Lofstrom Massage Therapist in Lake Oswego, Oregon\"" . " id=\"jennyProfile\""; ?>>
            
            <h3 class="therapist-bio-header">Jenny</h3>
            <article class="profile-main">
                <?php 
                    $my_postid = 100;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?>
            </article>
        </div>
    </div>
</section>



<!-- Scheduling Block Blurb-->
<section id="home-schedule-block">
    <div>
        <div>
            <h2>Ready to make an appointment?</h2>
            <article class="profile-main">
                
                <?php 
                    $my_postid = 264;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?>
            </article>

        </div>
    <div>
            <a class="btn btn-primary btn-lg" href="services-rates#schedulicity-block" role="button">Schedule My Massage &nbsp;<span class="glyphicon glyphicon-calendar"></span></a>
        
    </div> 
    </div>
</section>

    <div class="back-to-top">
        <a href="#top">Back to Top </a> <!-- add arrow icon -->
    </div>

</main>
<?php get_footer(); ?>