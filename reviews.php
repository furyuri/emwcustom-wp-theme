<?php /* Template Name: Reviews */ ?>

<?php get_header(); ?>

<header class="basic-page-header">
  <h1 id="top">Reviews of Our Massage Therapists</h1>
</header>

<main>
<div class="container container-row">
    <div class="row row-top">
    
        <section class="col col-lg-8" id="reviewsPhoto1">
    
        </section>
        
        <section class="col col-lg-4" id="reviewsText1">
            <h2>Reviews</h2>
            <p>
                Whether from Google, Yelp, or just direct client reviews, our customers love us. Read what they have to say here and motivate yourself to schedule an appointment with us today.
            </p>
            <p>
                Want to send us a compliment, question or concern?
            </p>
            
            <a class="btn btn-primary btn-lg contact-button" href="contact" role="button">Contact Us &nbsp;<span class="glyphicon glyphicon-envelope"></span></a>
            
            <div>
                
            </div>
        </section>
        
    </div>     
     </div>  
 <div class="container container-row">
    <section class="row" id="review-content">

        <div class="col col-lg-4">
            <?php if ( is_active_sidebar( 'yelp-review-area' ) ) { dynamic_sidebar( 'yelp-review-area' ); } ?>
        </div>
        
        <div class="col col-lg-4">
            <?php if ( is_active_sidebar( 'google-review-area' ) ) { dynamic_sidebar( 'google-review-area' ); } ?>
        </div>
        
        <div class="col col-lg-4 direct-feedback">
            <h2>Direct Client Feedback</h2>
            <!-- PHP to pull in posts by category "direct review" using loop -->
            <?php
            $args = array( 
                'category' => 7, 
                'post_type' => 'post',
                'nopaging' => true 
                ); 
            $postslist = get_posts( $args );    
            foreach ($postslist as $post) :  setup_postdata($post); 
            ?>  
            <h4><?php the_title(); ?></h4> 
            <?php the_content(); ?>  
            <?php endforeach; ?> 
        </div>

    </section>
    </div>
	<div class="back-to-top">
		<a href="/" class="backlink">&lt; Home</a> | <a href="#top">Back to Top </a>
	</div>	
</main>
<?php get_footer(); ?>