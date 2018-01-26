<?php 
	
// Container
function btsu_container_shortcode( $atts, $content = null ) {       
	$html = '<div class="container">' . do_shortcode($content) . '</div>';
    return $html;
}
add_shortcode('container','btsu_container_shortcode');	
// Container Fluid
function btsu_containerfluid_shortcode( $atts, $content = null ) {       
	$html = '<div class="container-fluid">' . do_shortcode($content) . '</div>';
    return $html;
}
add_shortcode('containerfluid','btsu_containerfluid_shortcode');

// row
function btsu_row_shortcode( $atts, $content = null ) {       
	$html = '<div class="row">' . do_shortcode($content) . '</div>';
    return $html;
}
add_shortcode('row','btsu_row_shortcode');

// columns
function bs_col_shortcode( $atts, $content = null ) {     
    // Params extraction
    extract(
        shortcode_atts(
            array(
                'num'  => '',
                'sm'   => '',
                'md'   => '',
                'lg'   => '',
                'xl'   => '',
            ), 
            $atts
        )
    ); 
	ob_start();?>
	<div class="<?php 
		if(!empty($num)){ echo 'col-'.$num.' ';}
		if(!empty($sm)){ echo 'col-sm-'.$sm.' ';}
		if(!empty($md)){ echo 'col-md-'.$md.' ';}
		if(!empty($lg)){ echo 'col-lg-'.$lg.' ';}
		if(!empty($xl)){ echo 'col-xl-'.$xl.' ';}
		else{ echo 'col';}
	?>"><?php echo $content; ?></div>
	
	<?php return ob_get_clean();
}
add_shortcode('col','bs_col_shortcode');

