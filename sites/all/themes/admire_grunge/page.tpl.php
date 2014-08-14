<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/master_reset.css";</style>
<!--[if lt IE 7]>
    <style type="text/css" media="all">@import "<?php print base_path() . path_to_theme() ?>/fix-ie6.css";</style>
	<![endif]-->
<?php print $scripts ?>
<script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>
<body class="<?php print $body_classes; print ' mainbody'; print get_sidebar_state($sidebar_first, $sidebar_last, $right_dark); ?>">


<!-- Preload Images (More important) -->
<div class="preload">
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/bg2.jpg" alt=""/>
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/bg2.jpg" alt="" />
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/primary.jpg"  alt="" />
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/search_box.jpg"  alt="" />
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/top_bar.jpg" alt="" />
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/footer_wood.jpg"  alt="" />
</div>


<div id="top_bar">
	<div class="container">
		<div id="top_menu">
			<?php if (isset($secondary_links)) : ?> 
			<?php print theme('links', $secondary_links, array('class' => 'links secondary-links')) ?>
			<?php endif; ?>
		</div>
		
		<div id="topbar_right">
		
			
			
			<div id="feed_icon_grunge">
			<a href="<?php print theme_get_setting('admire_grunge_feed_url'); ?>"><img src="<?php print base_path() . path_to_theme() ?>/images/rss.png" alt="Rss Feed" title="Subscribe to updates via RSS" /></a>
			</div>
		
			<div id="user_links">
			<?php if (!($user->uid)) { print login_register_links(); } else { echo  admire_grunge_welcome_user(); } ?>
			</div>
			
		</div>
	</div>
</div>


<div class="container">

<div id="head">
<?php if ($logo) { ?><div id="logocontainer"><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print t('Home') ?>" /></a></div><?php } ?>
<?php if($site_name || $site_slogan) { ?>
	<div id="texttitles">
	  <?php if ($site_name) { ?><h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1><?php } ?>
      <?php if ($site_slogan) { ?><div class='site-slogan'><?php print $site_slogan ?></div><?php } ?>
	</div>
<?php } ?>	

<?php if ($search_box){ ?>
<div id="head_right">
	<div id="grunge_search">
		<?php  print $search_box; ?>
	</div>
</div>
<?php } ?>
</div>

<?php if (isset($primary_links)) : ?>
<div id="primary_menu_bar">
		<?php print menu_tree($menu_name = variable_get('menu_primary_links_source', 'primary-links')); ?>
</div>
<?php endif; ?>

<div id="wrap" class="clear-block">
	
	<?php if($main_banner){ ?>
	<div id="main_adbanner" class="clear-block">
		<?php print $main_banner; ?>
	</div>
	<?php } ?>
	
	<?php if($sidebar_first) { ?>
	<div id="wrap_left" class="clear-block">
		<div id="left_top"><img src="<?php print base_path() . path_to_theme() ?>/images/left_top.jpg" alt=""/></div>
		<div id="left_inner">
		<div id="left_inner_inner">
		<?php  print $sidebar_first ;?>
		</div>
		<div id="left_bottom"><img src="<?php print base_path() . path_to_theme() ?>/images/left_bottom.png" alt=""/></div>
		</div>
	</div>
	<?php } ?>
	

	<div id="wrap_center" class="clear-block">
		<div id="wrap_inner">
		
		<?php if($above_content_ad){ ?>
		<div id="above_content_ad" class="clear-block">
		<?php print $above_content_ad; ?>
		</div>
		<?php } ?>
		
		<?php if($content_top) {?>
			<div id="content_block_cover1">
			<div id="content_block_cover2">
			<div id="content_block_cover3">
			<div id="content_top">
			<?php print $content_top; ?>
			</div></div></div></div><?php } ?>
			<?php if ($mission): print '<div id="mission">'. $mission .'</div>'; endif; ?>
			
			<?php if($breadcrumb){ ?><?php print $breadcrumb ?><?php } ?>
			<?php if($title){ ?><h1 class="title"><?php print $title ?></h1><?php } ?>
	        <?php if($tabs){ ?><div class="tabs"><?php print $tabs ?></div> <?php } ?>
	        <?php if ($show_messages) { print $messages; } ?>
	        <?php if($help){ ?><?php print $help ?><?php } ?>
	        <?php print $content; ?>
	        <?php print $feed_icons ?>
	        
	        <?php if($content_bottom) {?>
			<div id="content_bottom_block_cover1">
			<div id="content_bottom_block_cover2">
			<div id="content_bottom_block_cover3">
			<div id="content_bottom">
			<?php print $content_bottom; ?>
			</div></div></div></div><?php } ?>
		</div>
	</div>

	
	<?php if($right_dark || $sidebar_last) { ?>
	<div id="wrap_right" class="clear-block">
		<?php if($right_dark){?>
		<div id="right_dark" class="clear-block">
			<?php  print $right_dark ;?>
		</div>
		<?php } ?>
		
		<?php if($right_ad){ ?>
		<div id="right_ad" class="clear-block">
		<?php print $right_ad; ?>
		</div>
		<?php } ?>
		
		
		<?php if($sidebar_last){?>
		<div id="rightside" class="clear-block">
		<div id="right_block_inner" class="clear-block">
		<div id="right_bottom" class="clear-block">
		<?php  print $sidebar_last ;?>
		</div>
		</div>
		</div>
		<?php } ?>
	</div>
	<?php } ?>
	
	<br clear="all" class="clear-block"/>
	<div id="footer" class="clear-block">
	<div id="footer_message"><?php print $footer_message ?><br />
	<!-- Please do not remove this credit line. This encourage us to update, contribute more themes to the community. --><span class="credit">Powered by <a href="http://drupal.org/">Drupal</a>, <a href="http://www.worthapost.com/" title="Drupal themes">Drupal Themes</a>. </span>
	</div>
	<div id="footer_region"><?php print $footer ?></div>
	</div>
	
</div>

</div><!-- container -->

<!-- Preload Images (Less Important) -->
<div class="preload">
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/comment_form_mat.gif" alt="" />
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/comment_hanger.gif" alt=""/>
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/comment_paper.jpg" alt="" />
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/comment_paper_bottom.jpg" alt="" />
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/comment_paper_top.jpg" alt="" />
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/content_block_bg.jpg" alt="" />
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/content_block_top.jpg" alt="" />
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/left.jpg" alt="" />
	<img class="preload" src="<?php print base_path() . path_to_theme() ?>/images/right_top.jpg" alt="" />
</div>
<?php print $closure ?>
</body>
</html>
