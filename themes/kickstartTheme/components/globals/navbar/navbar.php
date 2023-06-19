<nav class="navMobile">
	<a class="navMobileLogo " href="<?php echo site_url('') ?>">
		<img class="mobileLogo" src="<?php echo get_theme_file_uri('/images/mobileLogo.svg') ?>" alt="LOGO">
	</a>
	<div class="burgerMenuWrapper">
		<?php get_template_part('/components/globals/newsletter/newsletter') ?>
		<div class="burgerMenu">
			<div class="burgerLine"></div>
			<div class="burgerLine"></div>
			<div class="burgerLine"></div>
		</div>
	</div>
	<div class="navMobileWrapper hide">
		<ul class="navMobileUL">
			<li class="navMobileLI"><a href="<?php echo site_url('/events') ?>">Events</a></li>
			<li class="navMobileLI"><a href="<?php echo site_url('/podcast') ?>">Podcast</a></li>
			<li class="navMobileLI"><a href="<?php echo site_url('/blog') ?>">Blog</a></li>
			<li class="navMobileLI"><a href="<?php echo site_url('/mentors') ?>">Mentors</a></li>
			<li class="navMobileLI"><a href="<?php echo site_url('/volunteer') ?>">Volunteering</a></li>
			<li class="navMobileLI"><a href="<?php echo site_url('/crew') ?>">Crew</a></li>
		</ul>
	</div>
</nav>

<nav class="navDesktop">
	<a class="navMobileLogo " href="<?php echo site_url('') ?>">
		<img class="mobileLogo" src="<?php echo get_theme_file_uri('/images/mobileLogo.svg') ?>" alt="LOGO">
	</a>
		<ul class="navDesktopUL">
			<li class="navDesktopLI"><a class="<?php echo is_page('events') || has_category('events', get_the_ID()) ? 'navLIActive' : '' ?>" href="<?php echo site_url('/events')  ?>">Events</a></li>
			<li class="navDesktopLI"><a class="<?php echo is_page('podcast') ? 'navLIActive' : '' ?>" href="<?php echo site_url('/podcast') ?>">Podcast</a></li>
			<li class="navDesktopLI"><a class="<?php echo is_page('blog') || has_category('blog', get_the_ID()) ? 'navLIActive' : '' ?>" href="<?php echo site_url('/blog') ?>">Blog</a></li>
			<li class="navDesktopLI"><a class="<?php echo is_page('mentors') ? 'navLIActive' : '' ?>" href="<?php echo site_url('/mentors') ?>">Mentors</a></li>
			<li class="navDesktopLI"><a class="<?php echo is_page('volunteer') ? 'navLIActive' : '' ?>" href="<?php echo site_url('/volunteer') ?>">Volunteering</a></li>
			<li class="navDesktopLI"><a class="<?php echo is_page('crew') ? 'navLIActive' : '' ?>" href="<?php echo site_url('/crew') ?>">Crew</a></li>
		</ul>
</nav>