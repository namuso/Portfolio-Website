<div class="header" id="placeholder"></div>

<div class="topnav not--fixed" id="mynavbar">
	<ul>
		<?php 
			$navlink = "";
			if (__FILE__ != 'index.php') {
				$navlink = 'http://www.tcnj.edu/~amuson1/';
			}

			echo '<a href="' . $navlink . '#about" id="about-nav">'
				. '<li class="navbar-text">ABOUT</li>'
				. '<li class="navbar-logo">'
				. file_get_contents("img/navbar/about.svg")
				. '</li></a>';

			echo '<a href="' . $navlink . '#experience" id="experience-nav">'
				. '<li class="navbar-text">EXPERIENCE</li>'
				. '<li class="navbar-logo">'
				. file_get_contents("img/navbar/experience.svg")
				. '</li></a>';

			echo '<li class="navbar-center-logo">'
				. '<a href="http://www.tcnj.edu/~amuson1">'
				. file_get_contents("img/logos/NA-logo.svg")
				. '</a></li>';

			echo '<a href="' . $navlink . '#portfolio" id="portfolio-nav">'
				. '<li class="navbar-text">PORTFOLIO</li>'
				. '<li class="navbar-logo">'
				. file_get_contents("img/navbar/portfolio.svg")
				. '</li></a>';

			echo '<a href="' . $navlink . '#contact" id="contact-nav">'
				. '<li class="navbar-text">CONTACT</li>'
				. '<li class="navbar-logo">'
				. file_get_contents("img/navbar/contact.svg")
				. '</li></a>';
		?>
	</ul>
</div>
