<?php

/* ======================================
   List Styles 
   ======================================*/
function imediapixel_checklist( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="checklist">', do_shortcode($content));
	return remove_wpautop($content);	
}
add_shortcode('checklist', 'imediapixel_checklist');

function imediapixel_itemlist( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="itemlist">', do_shortcode($content));
	return remove_wpautop($content);
	
}
add_shortcode('itemlist', 'imediapixel_itemlist');

function imediapixel_bulletlist( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="bulletlist">', do_shortcode($content));
	return remove_wpautop($content);
	
}
add_shortcode('bulletlist', 'imediapixel_bulletlist');

function imediapixel_arrowlist( $atts, $content = null ) {
	$content = str_replace('<ul>', '<ul class="arrowlist">', do_shortcode($content));
	return remove_wpautop($content);
	
}
add_shortcode('arrowlist', 'imediapixel_arrowlist');

/* ======================================
   Messages Box
   ======================================*/
function imediapixel_warningbox( $atts, $content = null ) {
   return '<div class="warning">' . do_shortcode($content) . '</div>';
}
add_shortcode('warning', 'imediapixel_warningbox');


function imediapixel_infobox( $atts, $content = null ) {
   return '<div class="info">' . do_shortcode($content) . '</div>';
}
add_shortcode('info', 'imediapixel_infobox');

function imediapixel_successbox( $atts, $content = null ) {
   return '<div class="success">' . do_shortcode($content) . '</div>';
}
add_shortcode('success', 'imediapixel_successbox');

function imediapixel_errorbox( $atts, $content = null ) {
   return '<div class="error">' . do_shortcode($content) . '</div>';
}
add_shortcode('error', 'imediapixel_errorbox');

/* ======================================
   Pullquote
   ======================================*/

function imediapixel_pullquote_right( $atts, $content = null ) {
   return '<span class="pullquote_right">' . do_shortcode($content) . '</span>';
}
add_shortcode('pullquote_right', 'imediapixel_pullquote_right');


function imediapixel_pullquote_left( $atts, $content = null ) {
   return '<span class="pullquote_left">' . do_shortcode($content) . '</span>';
}
add_shortcode('pullquote_left', 'imediapixel_pullquote_left');

/* ======================================
   Dropcap
   ======================================*/
function imediapixel_drop_cap( $atts, $content = null ) {
   return '<span class="dropcap">' . do_shortcode($content) . '</span>';
}
add_shortcode('dropcap', 'imediapixel_drop_cap');

/* ======================================
   Spacer
   ======================================*/
function imediapixel_spacer( $atts, $content = null ) {
   return '<div class="spacer"></div>';
}
add_shortcode('spacer', 'imediapixel_spacer');


/* ======================================
   Highlight
   ======================================*/
function imediapixel_highlight_yellow( $atts, $content = null ) {
   return '<span class="highlight-yellow">' . do_shortcode($content) . '</span>';
}
add_shortcode('highlight_yellow', 'imediapixel_highlight_yellow');

function imediapixel_highlight_dark( $atts, $content = null ) {
   return '<span class="highlight-dark">' . do_shortcode($content) . '</span>';
}
add_shortcode('highlight_dark', 'imediapixel_highlight_dark');

function imediapixel_highlight_green( $atts, $content = null ) {
   return '<span class="highlight-green">' . do_shortcode($content) . '</span>';
}
add_shortcode('highlight_green', 'imediapixel_highlight_green');

function imediapixel_highlight_red( $atts, $content = null ) {
   return '<span class="highlight-red">' . do_shortcode($content) . '</span>';
}
add_shortcode('highlight_red', 'imediapixel_highlight_red');

/* ======================================
   Columns
   ======================================*/
function imediapixel_col_12( $atts, $content = null ) {
   return '<div class="col_12">' . do_shortcode($content) . '</div>';
}
add_shortcode('col_12', 'imediapixel_col_12');

function imediapixel_col_12_last( $atts, $content = null ) {
   return '<div class="col_12_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('col_12_last', 'imediapixel_col_12_last');

function imediapixel_col_13( $atts, $content = null ) {
   return '<div class="col_13">' . do_shortcode($content) . '</div>';
}
add_shortcode('col_13', 'imediapixel_col_13');

function imediapixel_col_13_last( $atts, $content = null ) {
   return '<div class="col_13_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('col_13_last', 'imediapixel_col_13_last');

function imediapixel_col_14( $atts, $content = null ) {
   return '<div class="col_14">' . do_shortcode($content) . '</div>';
}
add_shortcode('col_14', 'imediapixel_col_14');

function imediapixel_col_14_last( $atts, $content = null ) {
   return '<div class="col_14_last">' . do_shortcode($content) . '</div>';
}
add_shortcode('col_14_last', 'imediapixel_col_14_last');

function imediapixel_col_23( $atts, $content = null ) {
   return '<div class="col_23">' . do_shortcode($content) . '</div>';
}
add_shortcode('col_23', 'imediapixel_col_23');

function imediapixel_col_34($atts, $content = null ) {
   return '<div class="col_34">' . do_shortcode($content) . '</div>';
}
add_shortcode('col_34', 'imediapixel_col_34');

/* ======================================
   Buttons 
   ======================================*/
function imediapixel_button( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'link'      => '#',
    ), $atts));

	$out = "<a class=\"button\" href=\"" .$link. "\"><span>" .do_shortcode($content). "</span></a>";
    
    return $out;
}
add_shortcode('button', 'imediapixel_button');


/* ======================================
   Video
   ======================================*/
#### Vimeo eg http://vimeo.com/5363880 id="5363880"
function vimeo_code($atts,$content = null){

	extract(shortcode_atts(array(  
		"id" 		=> '',
		"width"		=> '', 
		"height" 	=> ''
	), $atts)); 
	 
	$data = "<object width='$width' height='$height' data='http://vimeo.com/moogaloop.swf?clip_id=$id&amp;server=vimeo.com' type='application/x-shockwave-flash'>
			<param name='allowfullscreen' value='true' />
			<param name='allowscriptaccess' value='always' />
			<param name='wmode' value='opaque'>
			<param name='movie' value='http://vimeo.com/moogaloop.swf?clip_id=$id&amp;server=vimeo.com' />
		</object>";
	return $data;
} 
add_shortcode("vimeo_video", "vimeo_code"); 

#### YouTube eg http://www.youtube.com/v/MWYi4_COZMU&hl=en&fs=1& id="MWYi4_COZMU&hl=en&fs=1&"
function youTube_code($atts,$content = null){

	extract(shortcode_atts(array(  
      "id" 		=> '',
  		"width"		=> '', 
  		"height" 	=> ''
		 ), $atts)); 
	 
	$data = "<object width='$width' height='$height' data='http://www.youtube.com/v/$id' type='application/x-shockwave-flash'>			
      <param name='allowfullscreen' value='true' />
			<param name='allowscriptaccess' value='always' />
			<param name='FlashVars' value='playerMode=embedded' />
			<param name='wmode' value='opaque'>
			<param name='movie' value='http://www.youtube.com/v/$id' />
		</object>";
	return $data;
} 
add_shortcode("youtube_video", "youTube_code");

/* ======================================
   Custom Slideshow
   ======================================*/
function imediapixel_custom_slideshow($atts,$content = null) {
  global $post;
  
	extract(shortcode_atts(array(
      "type" => $type,  
  		"number" 	=> $number,
  		"width" 	=> $width,
  		"height" 	=> $height,
  		"transition" => $transition,
  		"speed" => $speed
		 ), $atts)); 
  
  $id = rand(100,1000);
  $img_width = ($width) ? $width : 620;
  $img_height = ($height) ? $height : 313;
  $effect_transition = ($transition) ? $transition : "random";
  $speed_transition = ($speed) ? $speed : 4000;
  
  $out = '<div id="custom_nivoslider" class="nivo_custom_'.$id.'" style="width:'.$img_width.'px;height:'.$img_height.'px;">';
    query_posts(array( 'post_type' => $type,'showposts' => $number,'orderby'=>'rand'));
    if (have_posts()) :
      while (have_posts() ) : the_post();
        $pf_link = get_post_meta($post->ID, '_portfolio_link', true );
        $pf_url = get_post_meta($post->ID, '_portfolio_url', true );
        $pf_preview = ($pf_link) ? $pf_link : thumb_url();
        $slide_permalink = htmlspecialchars("<a href=".get_permalink().'>'.get_the_title()."</a>");
            
        $out .= '<a href="'.$pf_preview.'" rel="prettyPhoto[custom_slideshow]">';
        $out .= '<img src="'.get_bloginfo('template_directory').'/timthumb.php?src='.thumb_url().'&amp;h='.$img_height.'&amp;w='.$img_width.'&amp;zc=1" title="'.$slide_permalink.'" /></a>';
        
      endwhile;endif;
      wp_reset_query();
  $out .= '</div><style type="text/css">.nivo-caption {width:'.$img_width.'px};</style>';
  $out .= '<script type="text/javascript">';
  $out .= "  jQuery(document).ready(function($) {	 
    $('.nivo_custom_".$id."').nivoSlider({
      directionNavHide:true,
      controlNav:false,
      effect: '".$effect_transition."',
      animSpeed:500, 
      pauseTime:".$speed_transition."
    }); 
    });";
  $out .= '</script>';
  
  return  $out;  
}
add_shortcode("slideshow", "imediapixel_custom_slideshow");


/* ======================================
   Child pages list base on parent page
   ======================================*/
function imediapixel_pagelist_shortcode($atts,$content=null) {
  global $post;
  
  extract(shortcode_atts(array(
    "parent_page" => '',
    "num" => '',
    "orderby" => '',
    "style" => ''
  ),$atts));
  
  if ($style == "") $style = "3col";
  if ($orderby == "") $orderby = "date";
   
  return imediapixel_pagelist($parent_page,$num,$orderby,$style);
}

add_shortcode('pagelist','imediapixel_pagelist_shortcode');

/* ======================================
   Post list base on category
   ======================================*/
function imediapixel_postlist_shortcode($atts,$content=null) {
  global $post;
  
  extract(shortcode_atts(array(
    "category" => '',
    "num" => '',
    "orderby" => '',
    "style" => ''
  ),$atts));
  
  if ($style == "") $style = "2col";
  if ($orderby == "") $orderby = "date";
  return imediapixel_postslist($category, $num, $orderby,$style);
}

add_shortcode('postlist','imediapixel_postlist_shortcode');


/* ======================================
   Google Map
   ======================================*/
function theme_shortcode_googlemap($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		"width" => '600',
		"height" => '400',
		"address" => '',
		"latitude" => 0,
		"longitude" => 0,
		"zoom" => 1,
		"html" => '',
		"popup" => 'false',
		"controls" => '[]',
		"scrollwheel" => 'true',
		"maptype" => 'G_NORMAL_MAP',
		"marker" => 'true',
	), $atts));
	
	if($width && is_numeric($width)){
		$width = 'width:'.$width.'px;';
	}else{
		$width = '';
	}
	if($height && is_numeric($height)){
		$height = 'height:'.$height.'px';
	}else{
		$height = '';
	}
	
	$id = rand(100,1000);
	if($marker != 'false'){
		return <<<HTML
[raw]
<div id="google_map_{$id}" class="google_map" style="{$width}{$height}"></div>
<script type="text/javascript">
jQuery(document).ready(function($) {
	jQuery("#google_map_{$id}").gMap({
	    zoom: {$zoom},
	    markers:[{
	    	address: "{$address}",
			latitude: {$latitude},
	    	longitude: {$longitude},
	    	html: "{$html}",
	    	popup: {$popup}
		}],
		controls: {$controls},
		maptype: {$maptype},
	    scrollwheel:{$scrollwheel}
	});
});
</script>
[/raw]
HTML;
	}else{
return <<<HTML
[raw]
<div id="google_map_{$id}" class="google_map" style="{$width}{$height}"></div>
<script type="text/javascript">
jQuery(document).ready(function($) {
	jQuery("#google_map_{$id}").gMap({
	    zoom: {$zoom},
	    latitude: {$latitude},
	    longitude: {$longitude},
	    address: "{$address}",
		controls: {$controls},
		maptype: {$maptype},
	    scrollwheel:{$scrollwheel}
	});
});
</script>
[/raw]
HTML;
	}
}

add_shortcode('gmap','theme_shortcode_googlemap');

function theme_shortcode_toggle($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'title' => false
	), $atts));
	return '<div class="toggle"><h5 class="toggle_title">' . $title . '</h5><div class="toggle_content"><p>' . do_shortcode(trim($content)) . '</p></div></div>';
}
add_shortcode('toggle', 'theme_shortcode_toggle');

/* Images */
function imediapixel_imagealignment( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'source'      => '#',
        'align' => ''
    ), $atts));
  
  switch ($align) {
    case "left" :
      $class="alignleft";
    break;
    case "right" :
      $class="alignright";
    break;
    case "center" :
      $class="aligncenter";
    break;
  }
  
	$out = "<img class=\"".$class." imgbox2\" src=\"" .$source. "\" alt=\"\">";
    
  return remove_wpautop($out);
}
add_shortcode('image', 'imediapixel_imagealignment');

/* Tabs and Accordiaon */
function theme_shortcode_tabs($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'style' => false
	), $atts));
	
	if (!preg_match_all("/(.?)\[(tab)\b(.*?)(?:(\/))?\](?:(.+?)\[\/tab\])?(.?)/s", $content, $matches)) {
		return do_shortcode($content);
	} else {
		for($i = 0; $i < count($matches[0]); $i++) {
			$matches[3][$i] = shortcode_parse_atts($matches[3][$i]);
		}
		$output = '<div class="tabs-wrapper"><ul class="'.$code.'">';
		
		for($i = 0; $i < count($matches[0]); $i++) {
			$output .= '<li><a href="#">' . $matches[3][$i]['title'] . '</a></li>';
		}
		$output .= '</ul>';
		$output .= '<div class="panes">';
		for($i = 0; $i < count($matches[0]); $i++) {
			$output .= '<div class="pane">' . do_shortcode(trim($matches[5][$i])) . '</div>';
		}
		$output .= '</div></div>';
		
		return '<div class="'.$code.'_container">' . $output . '</div>';
	}
}
add_shortcode('tabs', 'theme_shortcode_tabs');
add_shortcode('mini_tabs', 'theme_shortcode_tabs');
?>