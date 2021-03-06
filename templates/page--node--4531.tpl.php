<?php

$theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));
$logo = "http://librarytest.upei.ca/sites/librarytest.upei.ca/themes/themes/roblib_2017/dist/assets/img/logo.svg"; 
$hours = module_invoke('block', 'block_view', 'current_library_hours-block');


?>

<div class="l-page">
	<!--______________________topnav______________________-->
	<header class="l-header" role="banner">
		<div id="upei-topbar" class="top-bar">

			<div class="top-left">
				<ul class="branding menu">
				<li>
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">
						<img class="site-logo" src="<?php print $logo ?>">
					</a>
				</li>
				<li>
					<span class="site-name">
					<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home">Robertson<br>Library</a>
					</span>
				</li>
				</ul>
			</div>
			<div class="top-center">
				<?php print render($page['menu_bar_center']); ?>
			</div>
			<div class="top-right">
				<?php print views_embed_view('current_library_hours', 'block'); ?>
					<button type="button" class="button" data-toggle="offCanvas">Open Menu</button>
			</div>

		</div>

	</header>
	<!--++++++++++++++tabs+++++++++++++++++++++ -->

	<!--______________________messages_____________________________-->
	<div class="l-messages">
		<?php print render($page['highlighted']); ?>
		<?php //print $messages; ?>
		<?php print render($page['help']); ?>
	</div>
	<!--______________________content_____________________________-->

	<div class="l-main">
		<div class="l-content " role="main">
			<div class="content">
				<?php print $breadcrumb; ?>
				<a id="main-content"></a>
				<?php print render($title_prefix); ?>
				<?php if ($title): ?>
				<h1><?php print $title; ?></h1>
				<?php endif; ?>
				<?php print render($title_suffix); ?>
				<?php if ($tabs): ?>
				<button class="button admin-menu__button" type="button" data-toggle="admin-dropdown"></button>
				<div class="dropdown-pane admin-menu__dropdown" id="admin-dropdown" data-position="bottom" data-alignment="right"  data-dropdown data-auto-focus="true">
					<?php print render($tabs); ?>
				</div> 
				<?php endif; ?>

				<?php if ($action_links): ?>
				<ul class="action-links"><?php print render($action_links); ?></ul>
				<?php endif; ?>
				<?php print render($page['content']); ?>
				<?php print $feed_icons; ?>
			</div>
		</div>

		<?php print render($page['sidebar_first']); ?>
		<?php print render($page['sidebar_second']); ?>
	</div>
	<!--______________________sidebar-first_______________________-->
	<!--______________________sidebar-second______________________-->
	<!--______________________footer______________________________-->
	<footer class="l-footer" role="contentinfo">
		<aside class="footer">
			<div class="container">
				<?php print render($page['footer']); ?>
			</div>
		</aside>
		<aside class="subfooter">
			<div class="container">
				<?php print render($page['subfooter']); ?>
			</div>
		</aside>
	</footer>
	<!--______________________subfooter___________________________-->
</div>
<?php print render($page['offcanvas']); ?>
