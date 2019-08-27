<footer class="footer">
    <div class="container-row container">
        <div class="row">
            
            <!-- Social Media Section -->
            <section class="col col-sm-4">
                 <h3>Let's Connect!</h3>
                    <div class="container-row">
                        <div class="row" id="row-sm-icons">
                            <div class="socialMedia-icon">
                                <a href="https://www.facebook.com/Essential-Massage-and-Wellness-339961656062742/" target="_blank">
                                    <p class="hidden">Facebook</p><i class="fa fa-facebook fa-5x" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="socialMedia-icon">
                                <a href="https://www.instagram.com/essential_massage_and_wellness/" target="_blank">
                                    <p class="hidden">Instagram</p><i class="fa fa-instagram fa-5x" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="socialMedia-icon">
                                <a href="https://www.yelp.com/biz/essential-massage-and-wellness-lake-oswego-4" target="_blank">
                                    <p class="hidden">Yelp</p><i class="fa fa-yelp fa-5x" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
            </section>

            <!-- Cancellation Policy Section -->
            <section class="col col-sm-4">
                <h3>Our Cancellation Policy</h3>
                <div class="container-row">
                    <?php 
                            $my_postid = 32;
                            $content = get_post_field('post_content', $my_postid);
                            $content = apply_filters('the_content', $content);
                            $content = str_replace(']]>', ']]&gt;', $content);
                            echo $content; 
                    ?>
                </div>

                <h3>Site Info</h3>
                <div class="container-row">
                    <p>&copy; 2019 Essential Massage and Wellness
                    <br>Custom <a href="http://www.wordpress.org" target="_blank">WordPress</a> Design: <a href="https://www.urifrazier.com" target="_blank">Uri Frazier</a></p>
                </div>
            </section>

            <!-- Redundant Contact and Nav Section -->
            <section class="col col-sm-4">
                <div>
                    <h3>Essential Massage &amp; Wellness</h3>
                    <div class="container-row">
                        <p>460 5th Street, Suite C &amp; F <br> Lake Oswego, OR 97034</p>
                    </div>
                    
                <div>
                    <h3>Hours of Operation</h3>
                    <p><strong>Mon / Tues / Thurs</strong></p>
                    <p>9:00 a.m. - 9:00 p.m.</p>
                    <p><strong>Weds / Fri / Sat</strong></p>
                    <p>9:00 a.m. - 6:00 p.m.</p>
                    <p><strong>Sunday: </strong> Closed</p>
                </div>
                    
                <div class="nav-section">
                    <!-- Hours of Operation -->
                </div>
                    </div>
            </section>
            
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>