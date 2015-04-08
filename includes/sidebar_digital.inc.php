<?php if(!inSection('home')){ ?>
					<a href="/" class="visible-desktop"><img src="/img/logo.png" alt="Apollo Interactive" id="logo"/></a>
<?php } ?>					
					<nav id="side_nav">
						<ul>
							<li <?php echo (inSection('aboutus.php'))? 'class="active"':'';?>><span></span><a href="/digital/aboutus.php">About Us</a></li>
							<li <?php echo (inSection('capabilities.php'))? 'class="active"':'';?>><span></span><a href="/digital/capabilities.php">Capabilities</a></li>
							<?php /*
							<li <?php echo (inSection('ideas_and_solutions.php'))? 'class="active"':'';?>><span></span><a href="/digital/ideas_and_solutions.php">ideas + solutions</a></li>
							*/ ?>
							<li <?php echo (inSection('experience.php'))? 'class="active"':'';?>><span></span><a href="/digital/experience.php">Clients</a></li>
							<li <?php echo (inSection(array('insurance')))?  'class="active"':''; ?>><span></span><a href="/insurance/">Insurance Practice</a></li>
							<li <?php echo (inSection('contact.php'))? 'class="active"':'';?>><span></span><a href="/contact.php">Contact</a></li>
							<li <?php echo (inSection('clientlounge.php'))? 'class="active"':'';?>><span></span><a href="http://www.clientlounge.com/public/login/">Clientlounge</a></li>
						</ul>
					</nav>