<?php

?>
<header class="header-top-bar height-top_bar">
	<div class="container-fluid height-top_bar" style="max-width: 1900px">
		<div class="row height-top_bar pt-2 pb-2">
			<div class="col-xl-5 h-100">
				<div class="row">
				<div class="col-xl-6 py-3 index-menu">
					<div class="div_lang">
						<a href="#0" class="number_telephone sm-link sm-link_text sm-link8" data-sm-link-text="IT">
							<span class="sm-link__label">IT</span>
						</a>
					</div>
					<div class="div_lang">
						<a href="#0" class="number_telephone sm-link sm-link_text sm-link8" data-sm-link-text="EN">
							<span class="sm-link__label">EN</span>
						</a>
					</div>
					<div class="div_lang">
						<a href="#0" class="number_telephone sm-link sm-link_text sm-link8" data-sm-link-text="DE">
							<span class="sm-link__label">DE</span>
						</a>
					</div>
				</div>
				<div class="col-xl-6 py-3 index-menu">
							<a href="#0" class="number_telephone sm-link sm-link_text sm-link8" data-sm-link-text="+39 423423432424">
								<span class="sm-link__label">+39 423423432424</span>
							</a>
				</div>
				</div>
			</div>
			<div class="col-xl-2 h-100 header__logo-container">
				<img class="h-100 rounded mx-auto d-block" src="<?php echo get_template_directory_uri(); ?>/images/logo-nero.png">
			</div>
			<div class="col-xl-3 h-100 text-right are-vertically-aligned-center py-3">
				<a href="#" class="hvr-sweep-to-bottom blue_button px-5 py-3 button" id="button_book">Book now</a>
			</div>
			<div class="col-xl-2 text-center index-menu" id="div_menu">
				<input type="checkbox" id="checkbox2" class="checkbox2 visuallyHidden">
				<label for="checkbox2"  id="menu_icon" class="label_menu">
					<div class="hamburger hamburger2 float-left" id="icon_hamburger">
						<span class="bar bar1"></span>
						<span class="bar bar2" id="bar2"></span>
						<span class="bar bar3" id="bar3"></span>
						<span class="bar bar4"></span>
					</div>
					<span id="menu_text" class="float-left menu_text animated">MENU</span>
					<span id="menu_close_text" class="float-left menu_text animated d-none">CLOSE</span>
				</label>
			</div>
		</div>
	</div>
	<main class="demo-inola animated d-none fast" id="menu_big">
		<section class="content">
			<nav class="menu menu--inola">
				<a class="menu__item" href="#">
					<span class="menu__item-name">Study With Us</span>
					<span class="menu__item-label">Information on Courses</span>
				</a>
				<a class="menu__item" href="#">
					<span class="menu__item-name">Research</span>
					<span class="menu__item-label">Centers &amp; Groups</span>
				</a>
				<a class="menu__item" href="#">
					<span class="menu__item-name">Alumni</span>
					<span class="menu__item-label">Global Networks</span>
				</a>
				<a class="menu__item" href="#">
					<span class="menu__item-name">International</span>
					<span class="menu__item-label">Partnerships</span>
				</a>
				<a class="menu__item" href="#">
					<span class="menu__item-name">Calendar</span>
					<span class="menu__item-label">Important Dates</span>
				</a>
			</nav>
		</section>
	</main>
</header>
