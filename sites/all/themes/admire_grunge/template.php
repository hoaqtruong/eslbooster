<?php
// Theme name: Grunge Pure
// Theme by: Worthapost
// Website: http://www.worthapost.com
// Author name: Mohd. Sakib
//
// Visit our website to rate this theme and see our Ppremium Themes.


if (is_null(theme_get_setting('admire_grunge_feed_url'))) {
  global $theme_key;
  // Save default theme settings
  $feed_url = url(drupal_get_path_alias('rss.xml'));
  $defaults = array(
    'admire_grunge_feed_url' => $feed_url,
  );

  variable_set(
    str_replace('/', '_', 'theme_'. $theme_key .'_settings'),
    array_merge(theme_get_settings($theme_key), $defaults)
  );
  // Force refresh of Drupal internals
  theme_get_setting('', TRUE);
}

function get_sidebar_state($sidebar_first, $sidebar_last, $right_dark){

	if($sidebar_first && ($sidebar_last || $right_dark)){
		return ' both_sides';
	}
	if($sidebar_first && !$sidebar_last && !$right_dark){
		return ' left_side';
	}
	if(!$sidebar_first && ($sidebar_last || $right_dark)){
		return ' right_side';
	}
	if(!$sidebar_first && !$sidebar_last && !$right_dark){
		return ' no_side';
	}

}

function admire_grunge_comment_wrapper($content, $node) {
	if (!$content || $node->type == 'forum') {
		return '<div id="comments">'. $content .'</div>';
	}
	else {
		return '<h2 class="comments">'. t('Comments') .'</h2>' . '<div id="comments">' . $content .'</div>';
	}
}

function login_register_links(){
	$login = url(drupal_get_path_alias('user'));
	$register = url(drupal_get_path_alias('user/register'));
	return "<a href=\"$login\">" . t('Login') . '</a>' . " | <a href=\"$register\">" . t('Register') . "</a>";
}


function admire_grunge_welcome_user(){
	global $user;
	$usr_path = 'user/'.$user->uid;
	$myAccount = drupal_get_path_alias($usr_path);
	$logOut = drupal_get_path_alias('logout');
	if($user->uid)
	{
		$output = theme('item_list', array(
		l(t('My account |'), $myAccount, array('title' => t('My account'))),
		l(t(' Sign out'), $logOut)));
		return $output;
	}

	return;
}

//function admire_grunge_feed_icon($url) {
//
//	if ($image = theme('image', path_to_theme(). '/images/rss.png', t('Syndicate content'), $title)) {
//		return '<a href="'. check_url($url) .'" class="feed-icon">'. $image .'</a>';
//	}
//
//}

function admire_grunge_preprocess_search_theme_form(&$vars, $hook) {
	//modify title, size and button value of the search form
	unset($vars['form']['search_theme_form']['#title']);
	$vars['form']['submit']['#value'] = "Search";

	//Rebuild the rendered version
	unset($vars['form']['search_theme_form']['#printed']);
	unset($vars['form']['submit']['#printed']);
	$vars['search']['search_theme_form'] = drupal_render($vars['form']['search_theme_form']);
	$vars['search']['submit'] = drupal_render($vars['form']['submit']);
	//Group all variables
	$vars['search_form'] = implode($vars['search']);
}

function admire_grunge_node_submitted($node) {
	return t('<span class="larger">@day</span> <br/> @datetime',
	array(
	// '!username' => theme('username', $node),
     '@day' => format_date($node->created,'custom','D'),
     '@datetime' => format_date($node->created,'custom','m/d/y'),
	));
}


function admire_grunge_comment_submitted($comment) {
	return t('@day @datetime by !username',
	array(
      '!username' => theme('username', $comment),
      '@day' => format_date($comment->timestamp,'custom','D'),
      '@datetime' => format_date($comment->timestamp,'custom','m/d/y'),
	));
}

function admire_grunge_form($element) {
	if($element['#id'] == 'comment-form'){
	// Anonymous div to satisfy XHTML compliance.
	$action = $element['#action'] ? 'action="'. check_url($element['#action']) .'" ' : '';
	return '<form '. $action .' accept-charset="UTF-8" method="'. $element['#method'] .'" id="'. $element['#id'] .'"'. drupal_attributes($element['#attributes']) .">\n<div><div class=\"content1\"><div class=\"content2\"><div class=\"content3\"><div class=\"content4\">". $element['#children'] ."\n</div></div></div></div></div></form>\n";	
	}
	else{
	// Anonymous div to satisfy XHTML compliance.
	$action = $element['#action'] ? 'action="'. check_url($element['#action']) .'" ' : '';
	return '<form '. $action .' accept-charset="UTF-8" method="'. $element['#method'] .'" id="'. $element['#id'] .'"'. drupal_attributes($element['#attributes']) .">\n<div>". $element['#children'] ."\n</div></form>\n";
	
	}
}

