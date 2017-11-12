<div class="home-header-wrap"><?php	$zerif_parallax_img1 = get_theme_mod('zerif_parallax_img1',get_template_directory_uri() . '/images/background1.jpg');	$zerif_parallax_img2 = get_theme_mod('zerif_parallax_img2',get_template_directory_uri() . '/images/background2.png');	$zerif_parallax_use = get_theme_mod('zerif_parallax_show');	if ( $zerif_parallax_use == 1 && (!empty($zerif_parallax_img1) || !empty($zerif_parallax_img2)) ) {		echo '<ul id="parallax_move">';				if( !empty($zerif_parallax_img1) ) { 				echo '<li class="layer layer1" data-depth="0.10" style="background-image: url(' . esc_url($zerif_parallax_img1) . ');"></li>';			}			if( !empty($zerif_parallax_img2) ) { 				echo '<li class="layer layer2" data-depth="0.20" style="background-image: url(' . esc_url($zerif_parallax_img2) . ');"></li>';			}		echo '</ul>';		}	$zerif_bigtitle_show = get_theme_mod('zerif_bigtitle_show');		if( isset($zerif_bigtitle_show) && $zerif_bigtitle_show != 1 ):			echo '<div class="header-content-wrap">';		elseif ( is_customize_preview() ):			echo '<div class="header-content-wrap zerif_hidden_if_not_customizer">';		endif;	if( (isset($zerif_bigtitle_show) && $zerif_bigtitle_show != 1) || is_customize_preview() ):		echo '<div class="container big-title-container">';		zerif_big_title_text_trigger();		/* Buttons */				$zerif_bigtitle_redbutton_label = get_theme_mod( 'zerif_bigtitle_redbutton_label',__('One button','zerif') );		$zerif_bigtitle_redbutton_url = get_theme_mod( 'zerif_bigtitle_redbutton_url','#' );		$zerif_bigtitle_greenbutton_label = get_theme_mod( 'zerif_bigtitle_greenbutton_label',__('Another button','zerif') );		$zerif_bigtitle_greenbutton_url = get_theme_mod( 'zerif_bigtitle_greenbutton_url','#' );		$zerif_accessibility = get_theme_mod( 'zerif_accessibility' );		if( (!empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url)) ||		(!empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url))):			echo '<div class="buttons">';				zerif_big_title_buttons_top_trigger();				/* Red button */							if (!empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url)):					if(isset($zerif_accessibility) && $zerif_accessibility == 1){												//echo '<button class="btn btn-primary custom-button red-btn" onclick="window.location=\''.esc_url($zerif_bigtitle_redbutton_url).'\';"><span class="screen-reader-text">'.wp_kses_post($zerif_bigtitle_redbutton_label).'</span>'.wp_kses_post($zerif_bigtitle_redbutton_label).'</button>';						echo '<button class="btn btn-primary custom-button" onclick="window.location=\''.esc_url($zerif_bigtitle_redbutton_url).'\';"><span class="screen-reader-text">'.wp_kses_post($zerif_bigtitle_redbutton_label).'</span>'.wp_kses_post($zerif_bigtitle_redbutton_label).'</button>';											} else {						//echo '<a href="'.esc_url($zerif_bigtitle_redbutton_url).'" class="btn btn-primary custom-button red-btn">'.wp_kses_post($zerif_bigtitle_redbutton_label).'</a>';						echo '<a href="'.esc_url($zerif_bigtitle_redbutton_url).'" class="btn btn-primary custom-button">'.wp_kses_post($zerif_bigtitle_redbutton_label).'</a>';					}				elseif ( is_customize_preview() ):					if(isset($zerif_accessibility) && $zerif_accessibility == 1) {						echo '<button class="btn btn-primary custom-button red-btn zerif_hidden_if_not_customizer"><span class="screen-reader-text">'.esc_html_e('Edit left button.','zerif').'</span></button>';					} else {						echo '<a href="" class="btn btn-primary custom-button red-btn zerif_hidden_if_not_customizer"></a>';					}				endif;				/* Green button */				if (!empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url)):					if(isset($zerif_accessibility) && $zerif_accessibility == 1) {						echo '<button class="btn btn-primary custom-button green-btn" onclick="window.location=\''.esc_url($zerif_bigtitle_greenbutton_url).'\';"><span class="screen-reader-text">'.wp_kses_post($zerif_bigtitle_greenbutton_label).'</span>'.wp_kses_post($zerif_bigtitle_greenbutton_label).'</button>';					} else {						echo '<a href="' . esc_url( $zerif_bigtitle_greenbutton_url ) . '" class="btn btn-primary custom-button green-btn">' . wp_kses_post( $zerif_bigtitle_greenbutton_label ) . '</a>';					}				elseif ( is_customize_preview() ):					if(isset($zerif_accessibility) && $zerif_accessibility == 1) {						echo '<button class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"><span class="screen-reader-text">'.esc_html_e('Edit right button.','zerif').'</span></button>';					} else {						echo '<a href="" class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"></a>';					}				endif;												/**********************************/				/*** Lmosoft Ajout de 3 boutons ***/				/**********************************/								$zerif_bigtitle_thirdbutton_label = get_theme_mod( 'zerif_bigtitle_thirdbutton_label',__('Third button','zerif') );				$zerif_bigtitle_thirdbutton_url = get_theme_mod( 'zerif_bigtitle_thirdbutton_url','#' );								$zerif_bigtitle_fourthbutton_label = get_theme_mod( 'zerif_bigtitle_fourthbutton_label',__('Fourth button','zerif') );				$zerif_bigtitle_fourthbutton_url = get_theme_mod( 'zerif_bigtitle_fourthbutton_url','#' );						$zerif_bigtitle_fifthbutton_label = get_theme_mod( 'zerif_bigtitle_fifthbutton_label',__('Fifth button','zerif') );				$zerif_bigtitle_fifthbutton_url = get_theme_mod( 'zerif_bigtitle_fifthbutton_url','#' );												/* third button */				if (!empty($zerif_bigtitle_thirdbutton_label) && !empty($zerif_bigtitle_thirdbutton_url)):					if(isset($zerif_accessibility) && $zerif_accessibility == 1) {						echo '<button class="btn btn-primary custom-button green-btn" onclick="window.location=\''.esc_url($zerif_bigtitle_thirdbutton_url).'\';"><span class="screen-reader-text">'.wp_kses_post($zerif_bigtitle_thirdbutton_label).'</span>'.wp_kses_post($zerif_bigtitle_thirdbutton_label).'</button>';					} else {						echo '<a href="' . esc_url( $zerif_bigtitle_thirdbutton_url ) . '" class="btn btn-primary custom-button green-btn">' . wp_kses_post( $zerif_bigtitle_thirdbutton_label ) . '</a>';					}				elseif ( is_customize_preview() ):					if(isset($zerif_accessibility) && $zerif_accessibility == 1) {						echo '<button class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"><span class="screen-reader-text">'.esc_html_e('Edit right button.','zerif').'</span></button>';					} else {						echo '<a href="" class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"></a>';					}				endif;								/* fourth button */				if (!empty($zerif_bigtitle_fourthbutton_label) && !empty($zerif_bigtitle_fourthbutton_url)):					if(isset($zerif_accessibility) && $zerif_accessibility == 1) {						echo '<button class="btn btn-primary custom-button green-btn" onclick="window.location=\''.esc_url($zerif_bigtitle_fourthbutton_url).'\';"><span class="screen-reader-text">'.wp_kses_post($zerif_bigtitle_fourthbutton_label).'</span>'.wp_kses_post($zerif_bigtitle_fourthbutton_label).'</button>';					} else {						echo '<a href="' . esc_url( $zerif_bigtitle_fourthbutton_url ) . '" class="btn btn-primary custom-button green-btn">' . wp_kses_post( $zerif_bigtitle_fourthbutton_label ) . '</a>';					}				elseif ( is_customize_preview() ):					if(isset($zerif_accessibility) && $zerif_accessibility == 1) {						echo '<button class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"><span class="screen-reader-text">'.esc_html_e('Edit right button.','zerif').'</span></button>';					} else {						echo '<a href="" class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"></a>';					}				endif;								/* fifth button */				if (!empty($zerif_bigtitle_fifthbutton_label) && !empty($zerif_bigtitle_fifthbutton_url)):					if(isset($zerif_accessibility) && $zerif_accessibility == 1) {						echo '<button class="btn btn-primary custom-button green-btn" onclick="window.location=\''.esc_url($zerif_bigtitle_fifthbutton_url).'\';"><span class="screen-reader-text">'.wp_kses_post($zerif_bigtitle_fifthbutton_label).'</span>'.wp_kses_post($zerif_bigtitle_fifthbutton_label).'</button>';					} else {						echo '<a href="' . esc_url( $zerif_bigtitle_fifthbutton_url ) . '" class="btn btn-primary custom-button green-btn">' . wp_kses_post( $zerif_bigtitle_fifthbutton_label ) . '</a>';					}				elseif ( is_customize_preview() ):					if(isset($zerif_accessibility) && $zerif_accessibility == 1) {						echo '<button class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"><span class="screen-reader-text">'.esc_html_e('Edit right button.','zerif').'</span></button>';					} else {						echo '<a href="" class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"></a>';					}				endif;												/**************** Lmosoft  ********/												zerif_big_title_buttons_bottom_trigger();			echo '</div>';		endif;		echo '</div>';	echo '</div><!-- .header-content-wrap -->';		endif;	echo '<div class="clear"></div>';?></div><!--.home-header-wrap -->