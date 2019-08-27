<?php /* Template Name: Services */ ?>

<?php get_header(); ?>

<header class="basic-page-header">
  <h1 id="top">Massage Services &amp; Rates</h1>
</header>   

<main>
<section>    
<div class="container container-row">

<div class="row top-row">    
    <section class="col col-lg-8" id="servicesPhoto1">

    </section>
    <!-- Price Table -->
    <section id="rates-table" class="col col-lg-4">
        <h2>Rates</h2>
        <p>
            Here you'll find our basic service rates. Please note that <em>some services may be a little more</em> or a little less &#40;<em>see service descriptions</em>&#41;.
        </p>
        <div class="table-responsive">
            <table class="table">
                <tr>
                    <td>30 Minutes</td>
                    <td>&dollar;50</td>
                </tr>
                <tr>
                    <td>60 Minutes</td>
                    <td>&dollar;80</td>
                </tr>
                <tr>
                    <td>75 Minutes</td>
                    <td>&dollar;95</td>
                </tr>
                <tr>
                    <td>90 Minutes</td>
                    <td>&dollar;110</td>
                </tr>
            </table>
            <a class="btn btn-primary btn-lg schedule-button" href="#schedulicity-block" role="button">Schedule Now &nbsp;<span class="glyphicon glyphicon-calendar"></span></a>
			<p id="rates-subtext">Some types of insurance accepted.<br><a href="#insurance-section">See details below.</a></p>
        </div>
    </section>
    </div>
 </div>    
<div class="container-row container">
    <div class="row services-row">
    <!-- Services List -->
    <section id="services-section" class="col-lg-6">
        <h2>Massage Services</h2>
		<h3 class="h3-sub-h2">
			Serving Lake Oswego, OR
		</h3>
        <ul></ul>
        <h3 class="service-title">
                <?php 
                    $my_postid = 120;
                    $title = get_post_field('post_title', $my_postid);
                    $title = apply_filters('the_title', $title);
                    $title = str_replace(']]>', ']]&gt;', $title);
                    echo $title;
                ?>   
        </h3>
        <article>
                <?php 
                    $my_postid = 120;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?> 
        </article>

        <h3 class="service-title">
                <?php 
                    $my_postid = 122;
                    $title = get_post_field('post_title', $my_postid);
                    $title = apply_filters('the_title', $title);
                    $title = str_replace(']]>', ']]&gt;', $title);
                    echo $title;
                ?>   
        </h3>
        <article>
                <?php 
                    $my_postid = 122;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?> 
        </article>
        
        <h3 class="service-title">
                <?php 
                    $my_postid = 124;
                    $title = get_post_field('post_title', $my_postid);
                    $title = apply_filters('the_title', $title);
                    $title = str_replace(']]>', ']]&gt;', $title);
                    echo $title;
                ?>   
        </h3>
        <article>
                <?php 
                    $my_postid = 124;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?> 
        </article>

        <h3 class="service-title">
                <?php 
                    $my_postid = 126;
                    $title = get_post_field('post_title', $my_postid);
                    $title = apply_filters('the_title', $title);
                    $title = str_replace(']]>', ']]&gt;', $title);
                    echo $title;
                ?>   
        </h3>
        <article>
                <?php 
                    $my_postid = 126;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?> 
        </article>
        
        <h3 class="service-title">
                <?php 
                    $my_postid = 128;
                    $title = get_post_field('post_title', $my_postid);
                    $title = apply_filters('the_title', $title);
                    $title = str_replace(']]>', ']]&gt;', $title);
                    echo $title;
                ?>   
        </h3>
        <article>
                <?php 
                    $my_postid = 128;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?> 
        </article>
        
    </section>

    <!-- Add On's List -->
    <section id="add-ons-section" class="col-lg-6">
        <h2>Therapy Add-On's</h2>

        <h3 class="service-title">
                <?php 
                    $my_postid = 130;
                    $title = get_post_field('post_title', $my_postid);
                    $title = apply_filters('the_title', $title);
                    $title = str_replace(']]>', ']]&gt;', $title);
                    echo $title;
                ?>   
        </h3>
        <article>
                <?php 
                    $my_postid = 130;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?> 
        </article>
        <h3 class="service-title">
                <?php 
                    $my_postid = 135;
                    $title = get_post_field('post_title', $my_postid);
                    $title = apply_filters('the_title', $title);
                    $title = str_replace(']]>', ']]&gt;', $title);
                    echo $title;
                ?>   
        </h3>
        <article>
                <?php 
                    $my_postid = 135;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?> 
        </article>

    </section>
    <!-- Insurance Section -->
   </div>
    <div class="row services-row">
        <section id="insurance-section" class="col-lg-6">
            <h2>Insurance Information</h2>
            <h3 class="service-title">
                <?php 
                        $my_postid = 463;
                        $title = get_post_field('post_title', $my_postid);
                        $title = apply_filters('the_title', $title);
                        $title = str_replace(']]>', ']]&gt;', $title);
                        echo $title;
                    ?>
            </h3>
            <article>
                <?php 
                        $my_postid = 463;
                        $content = get_post_field('post_content', $my_postid);
                        $content = apply_filters('the_content', $content);
                        $content = str_replace(']]>', ']]&gt;', $content);
                        echo $content;
                    ?>
            </article>
        </section>
    </div>
</div>
 </section>
<section id="schedulicity-block">

    <header class="basic-page-header">
      <h1>Schedule Now</h1>
    </header>
        <article class="scheduler-cookies" id="cookie-notice">
            <p><strong>Please note:</strong> This scheduler uses <strong>3rd-party cookies</strong>. If you encounter errors, feel free to continue booking at <a href="https://www.schedulicity.com/scheduling/mbbq9h" target="_blank"><strong>Schedulicity.com</strong></a></p>
        </article>
        <article class="scheduler-cookies" id="mobile-schedule-notice">
            <p><strong>On mobile devices/phones:</strong> Please schedule appointments via <a href="https://www.schedulicity.com/scheduling/mbbq9h" target="_blank"><strong>Schedulicity.com</strong></a> using the "schedule now" button below.</p>
        </article>
        <div class="scheduler-loading-disappear">
        <p id="scheduler-notice">Loading Scheduler...</p>
            </div>

        <div id="schedulicity-plugin">
				                <?php 
                    $my_postid = 364;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?>
        </div>
    
</section>
	<div class="back-to-top">
		<a href="/" class="backlink">&lt; Home</a> | <a href="#top">Back to Top </a>
	</div>	
</main>
<?php get_footer(); ?>