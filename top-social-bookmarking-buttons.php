<?php
/*
Plugin Name: Top Social Bookmarking Buttons
Version: 0.1
Plugin URI: http://wordpress.org/extend/plugins/top-social-bookmarking-buttons/
Description: The plugin contains Top Social Bookmarking buttons on the NET. Post all your content to the social bookmarking sites to get traffic for your website or blog. Visit <a href="http://socibook.com" target="_blank">plugin page</a>.
Author: Biser Markov
Author URI: http://socibook.com/
*/

function add_me($content) {

    global $post;
	
	$my_width = '100%';
	
	$my_align = 'left';
	
	$my_images_folder = get_settings('home') . '/wp-content/plugins/top-social-bookmarking-buttons/images/';
	
	$my_link = get_permalink($post->ID);	
    $my_title = get_the_title($post->ID);

	if ( !is_feed() && !is_page() ) {
		$content .= "\n\n" . '<!-- Begin Top Social Bookmarking Buttons plugin -->' . "\n"
                  . '<!-- http://wordpress.org/extend/plugins/top-social-bookmarking-buttons/ -->' . "\n"
                  . '<div style="padding:16px 0 16px 0;text-align:' . $my_align . ';width:' . $my_width . ';">' . "\n"
				  
                  . '<a href="http://socibook.com/submit.php?url=' . $my_title . '&amp;url=' . $my_link . '" target="_blank" rel="nofollow" title="SociBook"><img src="' . $my_images_folder . 'socibook.png" style="width:16px;height:16px;border:0px;" alt="SociBook" title="SociBook" /></a>' . "\n"				  
                  . '<a href="http://del.icio.us/post?url=' . $my_link . '&amp;title=' . $my_title . '" target="_blank" rel="nofollow" title="del.icio.us"><img src="' . $my_images_folder . 'delicious.gif" style="width:16px;height:16px;border:0px;" alt="del.icio.us" title="del.icio.us" /></a>' . "\n"
                  . '<a href="http://digg.com/submit?phase=2&amp;url=' . $my_link . '&amp;title=' . $my_title . '" target="_blank" rel="nofollow" title="Digg"><img src="' . $my_images_folder . 'digg.gif" style="width:16px;height:16px;border:0px;" alt="Digg" title="Digg" /></a>' . "\n"
                  . '<a href="http://facebook.com/sharer.php?u=' . $my_link . '&amp;t=' . $my_title . '" target="_blank" rel="nofollow" title="Facebook"><img src="' . $my_images_folder . 'facebook.gif" style="width:16px;height:16px;border:0px;" alt="Facebook" title="Facebook" /></a>' . "\n"
                  . '<a href="http://google.com/bookmarks/mark?op=add&amp;bkmk=' . $my_link . '&amp;title=' . $my_title . '" target="_blank" rel="nofollow" title="Google"><img src="' . $my_images_folder . 'google.gif" style="width:16px;height:16px;border:0px;" alt="Google" title="Google" /></a>' . "\n"
                  . '<a href="http://buzz.yahoo.com/submit?submitUrl=' . $my_title . '&amp;u=' . $my_link . '" target="_blank" rel="nofollow" title="Yahoo Buzz"><img src="' . $my_images_folder . 'buzz-icon.gif" style="width:16px;height:16px;border:0px;" alt="Yahoo Buzz" title="Yahoo Buzz" /></a>' . "\n"
                  . '<a href="http://stumbleupon.com/submit?url=' . $my_link . '&amp;title=' . $my_title . '&amp;newcomment=' . $my_title . '" target="_blank" rel="nofollow" title="StumbleUpon"><img src="' . $my_images_folder . 'stumbleupon.gif" style="width:16px;height:16px;border:0px;" alt="StumbleUpon" title="StumbleUpon" /></a>' . "\n"
                  . '</div>' . "\n"
				  . '<!-- End Top Social Bookmarking Buttons plugin -->' . "\n\n";				  
    }				  
	return $content;
}

add_filter('the_content', 'add_me', 1097);

?>