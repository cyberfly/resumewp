 <!--section start-->
             <div class="section">

              <?php

                $cat_name = 'contact info';
                $cat_id = get_cat_ID( $cat_name );

                $args = array('category' =>$cat_id);
                $contact_info_posts = get_posts( $args );

                foreach( $contact_info_posts as $post ) : setup_postdata($post);

              ?>

              <h5><?php the_title(); ?></h5>

              <!--Contact_Info_items start-->
              <div class="contact_Info_items">

                <?php the_content(); ?>

              </div>
               <!--Contact_Info_items end-->

             <?php endforeach; ?>

             </div>
              <!--section end-->

              <!--section start-->
              <div class="section">

              <?php

                $cat_name = 'education info';
                $cat_id = get_cat_ID( $cat_name );

                $args = array('category' =>$cat_id);
                $education_info_posts = get_posts( $args );

                foreach( $education_info_posts as $post ) : setup_postdata($post);

              ?>

              <h5><?php the_title(); ?></h5>

              <!--education_items start-->
              <div class="education_items">

                <?php the_content(); ?>

              </div>
              <!--education_items end-->

              <?php endforeach; ?>

              </div>
              <!--section end-->


             <div class="clearfix"></div>

              <!--section start-->
             <div class="section">



              <?php

                $cat_name = 'skills info';
                $cat_id = get_cat_ID( $cat_name );

                $args = array('category' =>$cat_id);
                $skills_info_posts = get_posts( $args );

                foreach( $skills_info_posts as $post ) : setup_postdata($post);

              ?>

              <h5><?php the_title(); ?></h5>

              <!--skills start-->

              <?php the_content(); ?>

              <!--skills end-->

              <?php endforeach; ?>

             </div>
              <!--section end-->

             <div class="clearfix"></div>


             <!--section start-->
             <div class="section">

              <?php

                $cat_name = 'language info';
                $cat_id = get_cat_ID( $cat_name );

                $args = array('category' =>$cat_id);
                $language_info_posts = get_posts( $args );

                foreach( $language_info_posts as $post ) : setup_postdata($post);

              ?>

              <h5><?php the_title(); ?></h5>

              <!--language start-->

               <!--languages start-->
              <div class="languages">

              <?php the_content(); ?>

              </div>

              <!--language end-->

              <?php endforeach; ?>

              </div>
              <!--languages end-->

              <div class="clearfix"></div>

              <!--section start-->
             <div class="section">

              <?php

                $cat_name = 'references info';
                $cat_id = get_cat_ID( $cat_name );

                $args = array('category' =>$cat_id);
                $references_info_posts = get_posts( $args );

                foreach( $references_info_posts as $post ) : setup_postdata($post);

              ?>

              <h5><?php the_title(); ?></h5>

              <!--references start-->
              <div class="references">

                <?php the_content(); ?>

              </div>
              <!--references end-->


              <?php endforeach; ?>

             </div>
             <!--section end-->


             <div class="clearfix"></div>



             <!--section start-->
             <div class="section">

              <?php

                $cat_name = 'awards info';
                $cat_id = get_cat_ID( $cat_name );

                $args = array('category' =>$cat_id);
                $awards_info_posts = get_posts( $args );

                foreach( $awards_info_posts as $post ) : setup_postdata($post);

              ?>

              <h5><?php the_title(); ?></h5>

              <!--award start-->
              <div class="award">

                <?php the_content(); ?>

              </div>
              <!--award end-->


              <?php endforeach; ?>

             </div>
             <!--section end-->


             <div class="clearfix"></div>

            <!-- section start -->


            <div class="section" >

                      <h5>Testimonials</h5>

                      <div class="testimonialWidget">

                        <?php

                          $cat_name = 'testimonial info';
                          $cat_id = get_cat_ID( $cat_name );

                          $args = array('category' =>$cat_id);
                          $testimonial_info_posts = get_posts( $args );

                          foreach( $testimonial_info_posts as $post ) : setup_postdata($post);

                        ?>

                        <?php the_content(); ?>

                        <?php endforeach; ?>

                      <div class="testimonialDetail cf">
                        <span class="testimonialArrows cf">
                          <span class="arrowLeft inactive"></span>
                          <span class="arrowRight"></span>
                        </span>
                        <span class="testimonialAuthor"></span>
                      </div>
                    </div>

            </div>


             <!-- section ends -->