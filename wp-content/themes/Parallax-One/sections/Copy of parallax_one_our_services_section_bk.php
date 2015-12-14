<!-- =========================
 SECTION: SERVICES
============================== -->
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
            background: url('img/b03.png') no-repeat;
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
            background: url('img/a03.png') no-repeat;
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
	global $wp_customize;
	$parallax_one_our_services_title = get_theme_mod('parallax_one_our_services_title',esc_html__('Our Services','parallax-one'));
	$parallax_one_our_services_subtitle = get_theme_mod('parallax_one_our_services_subtitle',esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit.','parallax-one'));
	$parallax_one_services = get_theme_mod('parallax_one_services_content',
		json_encode(
			array(
					array('choice'=>'parallax_icon','icon_value' => 'icon-basic-webpage-multiple','title' => esc_html__('Lorem Ipsum','parallax-one'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','parallax-one')),
					array('choice'=>'parallax_icon','icon_value' => 'icon-ecommerce-graph3','title' => esc_html__('Lorem Ipsum','parallax-one'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','parallax-one')),
					array('choice'=>'parallax_icon','icon_value' => 'icon-basic-geolocalize-05','title' => esc_html__('Lorem Ipsum','parallax-one'),'text' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec purus feugiat, molestie ipsum et, consequat nibh. Etiam non elit dui. Nullam vel eros sit amet arcu vestibulum accumsan in in leo.','parallax-one'))
			)
		)
	);

	if(!empty($parallax_one_our_services_title) || !empty($parallax_one_our_services_subtitle) || !parallax_one_general_repeater_is_empty($parallax_one_services)){
?>
		<section class="services" id="services" role="region" aria-label="<?php esc_html_e('Services','parallax-one') ?>">
			<div class="section-overlay-layer">
				<div class="container">

					<!-- SECTION HEADER -->
					<div class="section-header">
						<?php
							if( !empty($parallax_one_our_services_title) ){
								echo '<h2 class="dark-text">'.esc_attr($parallax_one_our_services_title).'</h2><div class="colored-line"></div>';
							} elseif ( isset( $wp_customize )   ) {
								echo '<h2 class="dark-text paralax_one_only_customizer"></h2><div class="colored-line paralax_one_only_customizer"></div>';
							}
						?>

						<?php
							if( !empty($parallax_one_our_services_subtitle) ){
								echo '<div class="sub-heading">'.esc_attr($parallax_one_our_services_subtitle).'</div>';
							} elseif ( isset( $wp_customize )   ) {
								echo '<div class="sub-heading paralax_one_only_customizer"></div>';
							}
						?>
					</div>


					<?php
						if( !empty($parallax_one_services) ){
							$parallax_one_services_decoded = json_decode($parallax_one_services);
							echo '<div id="our_services_wrap" class="services-wrap">';
								foreach($parallax_one_services_decoded as $parallax_one_service_box){
									if( (!empty($parallax_one_service_box->icon_value) && $parallax_one_service_box->icon_value!='No Icon' && $parallax_one_service_box->choice == 'parallax_icon')  || (!empty($parallax_one_service_box->image_url)  && $parallax_one_service_box->choice == 'parallax_image') || !empty($parallax_one_service_box->title) || !empty($parallax_one_service_box->text) ){
										echo '<div class="service-box"><div class="single-service border-bottom-hover">';
											if( !empty($parallax_one_service_box->choice) && $parallax_one_service_box->choice !== 'parallax_none'  ){
												if ( $parallax_one_service_box->choice == 'parallax_icon' ){
													if( !empty($parallax_one_service_box->icon_value) ) {
														if( !empty($parallax_one_service_box->link) ){
															echo '<div class="service-icon colored-text"><a href="'.esc_url($parallax_one_service_box->link).'"><span class="'.esc_attr($parallax_one_service_box->icon_value).'"></span></a></div>';
														} else {
															echo '<div class="service-icon colored-text"><span class="'.esc_attr($parallax_one_service_box->icon_value).'"></span></div>';
														}
													}
												}
												if( $parallax_one_service_box->choice == 'parallax_image' ){
													if( !empty($parallax_one_service_box->image_url)){
														if( !empty($parallax_one_service_box->link) ){
															if(!empty($parallax_one_service_box->title)){
																echo '<a href="'.esc_url($parallax_one_service_box->link).'"><img src="'.parallax_one_make_protocol_relative_url(esc_url($parallax_one_service_box->image_url)).'" alt="'.$parallax_one_service_box->title.'"/></a>';
															} else {
																echo '<a href="'.esc_url($parallax_one_service_box->link).'"><img src="'.parallax_one_make_protocol_relative_url(esc_url($parallax_one_service_box->image_url)).'" alt="'.esc_html__('Featured Image','parallax-one').'"/></a>';
															}
														} else {
															if(!empty($parallax_one_service_box->title)){
																echo '<img src="'.parallax_one_make_protocol_relative_url(esc_url($parallax_one_service_box->image_url)).'" alt="'.$parallax_one_service_box->title.'"/>';
															} else {
																echo '<img src="'.parallax_one_make_protocol_relative_url(esc_url($parallax_one_service_box->image_url)).'" alt="'.esc_html__('Featured Image','parallax-one').'"/>';
															}
														}
													}
												}
											}
											if(!empty($parallax_one_service_box->title)){
												if( !empty($parallax_one_service_box->link) ){
													if (function_exists ( 'icl_t' ) && !empty($parallax_one_service_box->id)){
														$parallax_one_title_services = icl_t('Featured Area',$parallax_one_service_box->id.'_services_title',$parallax_one_service_box->title);
														echo '<h3 class="colored-text"><a href="'.esc_url($parallax_one_service_box->link).'">'.esc_attr($parallax_one_title_services).'</a></h3>';
													} else {
														echo '<h3 class="colored-text"><a href="'.esc_url($parallax_one_service_box->link).'">'.esc_attr($parallax_one_service_box->title).'</a></h3>';
													}
												} else {
													if (function_exists ( 'icl_t' ) && !empty($parallax_one_service_box->id)){
														$parallax_one_title_services = icl_t('Featured Area',$parallax_one_service_box->id.'_services_title',$parallax_one_service_box->title);
														echo '<h3 class="colored-text">'.esc_attr($parallax_one_title_services).'</h3>';
													} else {
														echo '<h3 class="colored-text">'.esc_attr($parallax_one_service_box->title).'</h3>';
													}
												}
											}
											if(!empty($parallax_one_service_box->text)){
												if (function_exists ( 'icl_t' ) && !empty($parallax_one_service_box->id)){
													echo '<p>'.icl_t('Featured Area',$parallax_one_service_box->id.'_services_text',html_entity_decode($parallax_one_service_box->text)).'</p>';
												} else {
													echo '<p>'.html_entity_decode($parallax_one_service_box->text).'</p>';
												}
											}
										echo '</div></div>';
									}
								}
							echo '</div>';
						}
					?>
				</div>	
			</div>
		</section>
<?php
	} else {
		if( isset( $wp_customize ) ) {
?>
			<section class="services paralax_one_only_customizer" id="services" role="region" aria-label="<?php esc_html_e('Services','parallax-one') ?>">
				<div class="section-overlay-layer">
					<div class="container">
						<div class="section-header">
							<h2 class="dark-text paralax_one_only_customizer"></h2><div class="colored-line paralax_one_only_customizer"></div>
							<div class="sub-heading paralax_one_only_customizer"></div>
						</div>
					</div>
				</div>
			</section>
<?php
		}
	}
?>
<script>
        jssor_1_slider_init();
    </script>