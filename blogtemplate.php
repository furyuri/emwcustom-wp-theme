<?php /* Template Name: Blog Template*/ ?>

<?php get_header(); ?>

<header class="basic-page-header">
  <h1>Our Blog</h1>
</header>
<main>
<div>

    <h2>Test</h2>
<?php 
 if ( have_posts() ) { 
 while ( have_posts() ) : the_post();
 ?>
 <div class="blog-post">
 <h2 class="blog-post-title"><?php the_title(); ?></h2>
 <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
 <?php the_content(); ?>
 </div><!-- /.blog-post -->
 <?php
 endwhile;
 } 
 ?>
 

 <nav>
 <ul class="pager">
 <li><?php next_posts_link('Previous'); ?></li>
 <li><?php previous_posts_link('Next'); ?></li>
 </ul>
 </nav>

    <p>Also just a test.</p>
</div><!-- /.blog-main -->
</main>
<?php get_footer(); ?>