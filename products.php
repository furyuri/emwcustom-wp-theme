<?php /* Template Name: Products */ ?>

<?php get_header(); ?>

<header class="basic-page-header">
  <h1 id="top">Massage Therapy &amp; Wellness Products</h1>
</header>

<main>
<div class="container container-row">    
    <div class="row top-row">
    
        <section class="col col-lg-8" id="comphyPhoto1">
            <!-- Blank col for responsive gb image --> 
        </section>
        
        <section class="col col-lg-4" id="comphyText1">
            <h2>Comphy Co Sheets</h2>
		<h3 class="h3-sub-h2-white">
			At our office in Lake Oswego, OR
		</h3>
            <article>
                        <?php 
                            $my_postid = 266;
                            $content = get_post_field('post_content', $my_postid);
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content;
                        ?> 
            </article>
            <div>
                <!-- need to hide buttons on larger than mobile -->
                <a class="btn btn-primary btn-lg product-button" href="#products-link" role="button">Products</a>
                <a class="btn btn-primary btn-lg product-button" href="contact" role="button">Order <span class="glyphicon glyphicon-earphone"></span></a>
            </div>
        </section>
            
     </div>  
    </div>
    
    <section>
        <article class="productBenefits">
            <h3>Benefits &amp; Features</h3>
            <p>
                <?php 
                    $my_postid = 270;
                    $content = get_post_field('post_content', $my_postid);
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]&gt;', $content);
                    echo $content;
                ?>    
            </p>
        </article>
<div class="container container-row">    
        <div class="container-col" id="product-table">
            <div class="table-responsive"> <!-- insert BS grid classes here -->
                <table class="table">
                    <tr>
                        <th colspan="2" id="products-link"><h3>Products</h3></th>
                    </tr>
                    
                    <!-- New Category Section -->
                    <tr>
                        <th colspan="2"><h4>Sheet Sets</h4></th>
                    </tr>   
                    <tr>

                        <td>
                            
                                <?php 
                                    $my_postid = 148;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 148;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>

                    <tr>
                        <td>
                            
                                <?php 
                                    $my_postid = 152;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 152;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>

                    <tr>
                        <td>
                            
                                <?php 
                                    $my_postid = 154;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 154;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                                <?php 
                                    $my_postid = 156;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 156;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>
                   
                    <tr>
                        <td>
                            
                                <?php 
                                    $my_postid = 158;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 158;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>

                    <tr>
                        <td>
                            
                                <?php 
                                    $my_postid = 160;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 160;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>
                    
                    <!-- New Category Section -->
                    <tr>
                        <th colspan="2"><h4>Duvet Covers</h4></th>
                    </tr>
                    <tr>
                        <td>
                            
                                <?php 
                                    $my_postid = 312;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 312;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            
                                <?php 
                                    $my_postid = 205;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 205;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>
                    

                    <!-- New Category Section -->
                    <tr>
                        <th colspan="2"><h4>Quilted Blankets</h4></th>
                    </tr>
                    <tr>
                        <td>
                            
                                <?php 
                                    $my_postid = 315;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 315;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            
                                <?php 
                                    $my_postid = 316;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 316;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>
                    
                    <!-- New Category Section -->
                    <tr>
                        <th colspan="2"><h4>Quilted Pillow Shams</h4></th>
                    </tr>
                    <tr>
                        <td>
                            
                                <?php 
                                    $my_postid = 211;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 211;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                                <?php 
                                    $my_postid = 314;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 314;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            
                                <?php 
                                    $my_postid = 313;
                                    $title = get_post_field('post_title', $my_postid);
                                    $title = apply_filters('the_title', $title);
                                    $title = str_replace(']]>', ']]&gt;', $title);
                                    echo $title;
                                ?>     
                            
                        </td>
                        <td>
                            
                                <?php 
                                    $my_postid = 313;
                                    $content = get_post_field('post_content', $my_postid);
                                    $content = apply_filters('the_content', $content);
                                    $content = str_replace(']]>', ']]&gt;', $content);
                                    echo $content;
                                ?>                               
                            
                        </td>
                    </tr>
                </table>
            </div>
            </div>
        </div>
    </section>
    
    <div>
        <a class="btn btn-primary btn-lg schedule-button" href="contact" role="button">Order &nbsp;<span class="glyphicon glyphicon-earphone"></span></a>
    </div>
    
	<div class="back-to-top">
		<a href="/" class="backlink">&lt; Home</a> | <a href="#top">Back to Top </a>
	</div>	
</main>
<?php get_footer(); ?>