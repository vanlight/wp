<!-- =========================
 SECTION: LATEST NEWS   
============================== -->
<script type="text/javascript" src="/wp/wp-content/themes/Parallax-One/lib/carousel-slider/js/jssor.slider.min.js"></script>
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $AutoPlaySteps: 4,
              $SlideDuration: 160,
              $SlideWidth: 200,
              $SlideSpacing: 3,
              $Cols: 4,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $Steps: 4
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 1,
                $SpacingY: 1
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", $Jssor$.$WindowResizeFilter(window, ScaleSlider));
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
        
        /* jssor slider bullet navigator skin 03 css */
        /*
        .jssorb03 div           (normal)
        .jssorb03 div:hover     (normal mouseover)
        .jssorb03 .av           (active)
        .jssorb03 .av:hover     (active mouseover)
        .jssorb03 .dn           (mousedown)
        */
        .jssorb03 {
            position: absolute;
        }
        .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
            position: absolute;
            /* size of bullet elment */
            width: 21px;
            height: 21px;
            text-align: center;
            line-height: 21px;
            color: white;
            font-size: 12px;
            background: url('/wp/wp-content/themes/Parallax-One/lib/carousel-slider/img/b03.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb03 div { background-position: -5px -4px; }
        .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
        .jssorb03 .av { background-position: -65px -4px; }
        .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }

        /* jssor slider arrow navigator skin 03 css */
        /*
        .jssora03l                  (normal)
        .jssora03r                  (normal)
        .jssora03l:hover            (normal mouseover)
        .jssora03r:hover            (normal mouseover)
        .jssora03l.jssora03ldn      (mousedown)
        .jssora03r.jssora03rdn      (mousedown)
        */
        .jssora03l, .jssora03r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 55px;
            height: 55px;
            cursor: pointer;
            background: url('/wp/wp-content/themes/Parallax-One/lib/carousel-slider/img/a03.png') no-repeat;
            overflow: hidden;
        }
        .jssora03l { background-position: -3px -33px; }
        .jssora03r { background-position: -63px -33px; }
        .jssora03l:hover { background-position: -123px -33px; }
        .jssora03r:hover { background-position: -183px -33px; }
        .jssora03l.jssora03ldn { background-position: -243px -33px; }
        .jssora03r.jssora03rdn { background-position: -303px -33px; }
    </style>

<?php


	$parallax_number_of_posts = get_option('posts_per_page');
	$args = array( 'post_type' => 'post', 'posts_per_page' => $parallax_number_of_posts, 'order' => 'DESC','ignore_sticky_posts' => true );
	$the_query = new WP_Query( $args );
	if ( $the_query->have_posts() ) {
		$parallax_one_latest_news_title = get_theme_mod('parallax_one_latest_news_title',esc_html__('Latest news','parallax-one'));
		if($parallax_number_of_posts > 0) {
		?>
			<section class="brief timeline" id="latestnews" role="region" aria-label="<?php esc_html_e('Latest blog posts','parallax-one'); ?>">
				<div class="section-overlay-layer">
					<div class="container">
						<div class="row">

							<!-- TIMELINE HEADING / TEXT  -->
							<?php
								if(!empty($parallax_one_latest_news_title)){
									echo '<div class="col-md-12 timeline-text text-left"><h2 class="text-left dark-text">'.esc_attr($parallax_one_latest_news_title).'</h2><div class="colored-line-left"></div></div>';
								} elseif ( isset( $wp_customize )   ) {
									echo '<div class="col-md-12 timeline-text text-left paralax_one_only_customizer"><h2 class="text-left dark-text "></h2><div class="colored-line-left "></div></div>';
								}
							?>
							<div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 809px; height: 150px; overflow: hidden;">
            
               <?php

											$i_latest_posts= 0;

											while (  $the_query->have_posts() ) :  $the_query->the_post();

												$i_latest_posts++;												
										?>
										<div style="display: none;">
										<?php 

																if ( has_post_thumbnail() ) :
																	the_post_thumbnail('parallax-one-post-thumbnail-latest-news');
																else: ?>
																	<img data-u="image" src="<?php echo parallax_one_make_protocol_relative_url(parallax_get_file('/images/no-thumbnail-latest-news.jpg')); ?>" width="150" height="150" alt="<?php the_title(); ?>">
															<?php 
																endif; 
															?>
															</div>
											<?php	
										endwhile;
										wp_reset_postdata(); 
										?>
            
        </div>
        <!-- Bullet Navigator -->        
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
    </div>										
									
						</div>
					</div>
				</div>
			</section>
	<?php
		}
	} ?>
<script>
        jssor_1_slider_init();
    </script>