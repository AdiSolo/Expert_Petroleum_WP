<?php
/*
* Template Name: Sustainability
*/
?>

<?php get_header(); ?>
    <body>
        <section class="cover-page fixed">
            <div class="container cover-page-bg"></div>
            <h1>SUSTAINABILITY</h1>
        </section>
        <section class="vh-100"></section>

<?php if(have_posts()) : the_post(); ?>
<!-- Stories Section -->
        <section class="page">
            <div class="container">
                <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 content-menu">
                                <h5><?php the_title(); ?></h5>
                                <ul>
                                    <li>Safety</li>
                                    <li>Environment</li>
                                    <li>Communities</li>
                                </ul>

                            </div>
                            <div class="col-md-8 content-block">
                                <div class="row">
                                    <div class="page-content">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <?php endif; ?>
<!-- End Stories Section -->

<!-- Services Section -->
            <section class="services">
                <div class="container services-content">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4 content-menu">
                                    <h5>Related Stories</h5>
                                    <ul>
                                        <li>People</li>
                                        <li>Sustainability</li>
                                        <li>Technology</li>
                                    </ul>

                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                          <article class="col-md-6 pb-5 small-post">  <!-- Small post -->
                                              <div class="row">
                                                  <div class="col-md-6 pr-4">
                                                      <img src="<?php echo get_template_directory_uri(); ?>/img/post-small1.png" class="post-img" alt="">
                                                  </div>
                                                  <div class="col-md-6 pl-4 align-title">
                                                      <h5>Decomissioning. It could be dirty and mean, we do it clean and green!</h5>
                                                      <div class="date">Bucharest / Feb 2019</div>

                                                  </div>
                                              </div>
                                          </article> <!-- End Small post -->
                                          <article class="col-md-6 pb-5 small-post">  <!-- Small post -->
                                              <div class="row">
                                                  <div class="col-md-6 pl-4 pr-4">
                                                      <img src="<?php echo get_template_directory_uri(); ?>/img/post-small1.png" class="post-img" alt="">
                                                  </div>
                                                  <div class="col-md-6 pl-4 align-title">
                                                      <h5>Decomissioning. It could be dirty and mean, we do it clean and green!</h5>
                                                      <div class="date">Bucharest / Feb 2019</div>

                                                  </div>
                                              </div>
                                          </article> <!-- End Small post -->
                                          <article class="col-md-6 pb-5 small-post">  <!-- Small post -->
                                              <div class="row">
                                                  <div class="col-md-6  pr-4">
                                                      <img src="<?php echo get_template_directory_uri(); ?>/img/post-small1.png" class="post-img" alt="">
                                                  </div>
                                                  <div class="col-md-6 pl-4 align-title">
                                                      <h5>Decomissioning. It could be dirty and mean, we do it clean and green!</h5>
                                                      <div class="date">Bucharest / Feb 2019</div>

                                                  </div>
                                              </div>
                                          </article> <!-- End Small post -->
                                          <article class="col-md-6 pb-5 small-post">  <!-- Small post -->
                                              <div class="row">
                                                  <div class="col-md-6 pl-4 pr-4">
                                                      <img src="<?php echo get_template_directory_uri(); ?>/img/post-small1.png" class="post-img" alt="">
                                                  </div>
                                                  <div class="col-md-6 pl-4 align-title">
                                                      <h5>Decomissioning. It could be dirty and mean, we do it clean and green!</h5>
                                                      <div class="date">Bucharest / Feb 2019</div>

                                                  </div>
                                              </div>
                                          </article> <!-- End Small post -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- End Services Section -->

<!-- Footer Section -->
            <section class="footer">
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="copyright">
                                    <p>© 2005 - 2019 EXPERT PETROLEUM</p>
                                    <p id="copyright-media" class="pr-5"> UTILIZAREA ORICARUI TIP DE CONȚINUT (TEXT SAU IMAGINE) DIN ACEST MATERIAL FARĂ PERMISIUNE SCRISĂ ESTE STRICT INTERZISĂ.</p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class='footer-menu'>
                                        <ul class="parrent-li">
                                            <li>
                                                <a href="#">SUSTAINABILITY</a>
                                                <ul class="sub-menu">
                                                    <li>Safety</li>
                                                    <li>Environment</li>
                                                    <li>Communities</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">ORGANIZATION</a>
                                                <ul class="sub-menu">
                                                    <li>Safety</li>
                                                    <li>Environment</li>
                                                    <li>Communities</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">SERVICES</a>
                                                <ul class="sub-menu">
                                                    <li>Safety</li>
                                                    <li>Environment</li>
                                                    <li>Communities</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">OPERATIONS</a>
                                                <ul class="sub-menu">
                                                    <li>Safety</li>
                                                    <li>Environment</li>
                                                    <li>Communities</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">NEWS & MEDIA</a>
                                                <ul class="sub-menu">
                                                    <li>Safety</li>
                                                    <li>Environment</li>
                                                    <li>Communities</li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#">STORIES</a>
                                                <ul class="sub-menu">
                                                    <li>Safety</li>
                                                    <li>Environment</li>
                                                    <li>Communities</li>
                                                </ul>
                                            </li>
                                        </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<!-- End Footer Section -->
    </body>
</html>
<?php get_footer(); ?>
