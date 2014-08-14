<?php
function phptemplate_settings($saved_settings) {

	$settings = theme_get_settings('admire_grunge');
	$feed_url = url(drupal_get_path_alias('rss.xml'));
	$defaults = array(
    'admire_grunge_feed_url' => $feed_url,
	);

	$settings = array_merge($defaults, $settings);

	$form['admire_grunge_feed_url'] = array(
	'#type' => 'textfield',
	'#title' => t('URL to your rss feed.'),
	'#default_value' => $settings['admire_grunge_feed_url'],
 	'#description' => t('If you use external feed services like feedburner, please enter full URL with http://'),
	'#size' => 60,
	);

	return $form;
}