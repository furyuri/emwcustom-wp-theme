<?php /* Template Name: Blog Template*/ ?>

<?php get_header(); ?>

<header class="basic-page-header">
  <h1 id="top">Our Blog</h1>
</header>
<main>
<div class="container">
    
<?php $catquery = new WP_Query( 'cat=11 &posts_per_page=5' ); ?>

<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
    
 <div class="blog-post">
 <h2 class="blog-post-title"><?php the_title(); ?></h2>
 <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
 <?php the_content(); ?>
 </div><!-- /.blog-post -->
    
<?php endwhile; ?> 

<?php wp_reset_postdata(); ?>   
    

 <nav>
 <ul class="pager">
 <li><?php next_posts_link('Previous'); ?></li>
 <li><?php previous_posts_link('Next'); ?></li>
 </ul>
 </nav>


</div>
    
</main>

<?php get_footer(); ?>