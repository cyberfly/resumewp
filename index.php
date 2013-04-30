<?php

get_header();

?>




            <!--contents start-->
            <section id="contents">



             <!--main start-->
             <div id="main">

             <!--section start-->
             <div class="section">

              <h5>Work Experience</h5>

              <?php

              $cat_name = 'work experience';
              $cat_id = get_cat_ID( $cat_name );

              $args = array('category' =>$cat_id);
              $work_experience_posts = get_posts( $args );

              foreach( $work_experience_posts as $post ) : setup_postdata($post);

              ?>

            <!--work_item start-->
            <div class="work_item" id="post-<?php the_ID(); ?>" >

              <div class="year"><?php echo get_post_meta($post->ID, 'working period', true); ?></div>

              <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to
              <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br /></h3>

              <h6><?php echo get_post_meta($post->ID, 'company', true); ?></h6>
              <br />

              <?php the_content('Read the rest of this entry &raquo;'); ?>

            </div>
            <!--portfolio_item end-->

           <?php endforeach; ?>

            </div> <!--section end-->

             <div class="clearfix"></div>
             <br />
              <!--section start-->
             <div class="section">

              <h5>Portfolio</h5>

              <?php

              $cat_name = 'portfolio';
              $cat_id = get_cat_ID( $cat_name );

              $args = array('category' =>4);
              $portfolio_posts = get_posts( $args );

              foreach( $portfolio_posts as $post ) : setup_postdata($post);

              ?>

              <!--portfolio_item start-->
             <div class="portfolio_item" id="post-<?php the_ID(); ?>" >

                <?php

                $portfolio_tag = get_post_meta($post->ID, 'portfolio tag', true);

                if (!empty($portfolio_tag)): ?>

                <div class="tag"><?php echo $portfolio_tag;  ?></div>

                <?php endif ?>

                <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to
              <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br /></h3>
                <h6><?php echo get_post_meta($post->ID, 'portfolio remark', true); ?></h6>
                <br />
                <?php the_content('Read the rest of this entry &raquo;'); ?>
            </div>
            <!--portfolio_item end-->

             <?php endforeach; ?>

             </div>
             <!--section end-->

             </div>
              <!--main end-->


          	 <!--sidebar start-->
             <aside id="sidebar">

               <?php get_sidebar(); ?>

             </aside>
             <!--sidebar end-->

           <div style="clear:both;"></div>

			     </section>
            <!--contents end-->

            </div>
			<!--wrapper end-->

</body>
</html>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
 <script type="text/javascript" charset="utf-8">

$(document).ready(function(){
 $("a[rel=gallery]").fancybox({
        'transitionIn'    : 'none',
        'transitionOut'   : 'none',
        'titlePosition'   : 'over',
        'titleFormat'   : function(title, currentArray, currentIndex, currentOpts) {
          return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
      });




      $('#bandar').css('display','none');
      var sentParts = window.location.href.toString().split('?');
      if(sentParts.length > 1)
      if(sentParts[1] ='sent'){
      $('#mydiv').css('display','');
              setTimeout(function() {
              $('#mydiv').fadeOut('fast');
          }, 3000);
      }



      });
      </script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/twitter.js"></script>

<script type="text/javascript">

/*
 * ----------------------------------------------------------------
 *  Twitter
 * ----------------------------------------------------------------
 */

  getTwitters('tweet', {
    id: 'egrappler',  /* Your Twitter ID */
    count: 4, /* Number of tweets that will be shown */
    enableLinks: true,
    ignoreReplies: true,
    clearContents: true,
    template: '<div class="twitter-content">%text%</div><a  href="http://twitter.com/%user_screen_name%/statuses/%id_str%/"></a>'
  });
</script>