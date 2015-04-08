<div class="main-navigation">
	<a href="/" class="logo"><img src="/img/apollo-logo.png" alt="Apollo Interactive" id="logo"/></a>
	<div class="mobile"><img src="/img/mobile-menu.png" alt="Navigation menu button" id="menu-btn" /></div>

	<nav id="side_nav">
		<ul id="main_nav">

			<li class="nav_about <?= inPage('/digital/aboutus.php') ? ' nav_selected' : '' ?>"><div class="nav-block"></div>
				<a class="nav_btn" href="/digital/aboutus.php">About Us</a>
			</li>

			<li class="nav_capabilities <?= inPage('/digital/capabilities.php') ? ' nav_selected' : '' ?>"><div class="nav-block"></div>
				<a class="nav_btn" href="/digital/capabilities.php">Capabilities</a>
			</li>
			
			<li class="nav_work <?= inPage('/digital/work.php') ? ' nav_selected' : '' ?>"><div class="nav-block"></div>
				<a class="nav_btn" href="/digital/work.php">Work</a>
			</li>
            
			<li class="side_sub_nav" id="work_side_sub">
				<ul>
					<li><a href="#visionworks">Visionworks</a></li>
					<li><a href="#einstein_noah">Einstein Noah</a></li>
					<li><a href="#universal">Universal Sports</a></li>
					<li><a href="#curves">Curves</a></li>
					<li><a href="#bmw">BMW</a></li>
					<li><a href="#stage_stores">Stage Stores</a></li>
					<li><a href="#wingstop">Wingstop</a></li>
					<li><a href="#yoshinoya">Yoshinoya</a></li>
				</ul>
			</li>
			<li class="nav_team <?= inPage('/digital/team.php') ? ' nav_selected' : '' ?>"><div class="nav-block"></div>
				<a class="nav_btn" href="/digital/team.php">Team</a>
			</li>

			<li class="nav_clients <?= inPage('/digital/experience.php') ? ' nav_selected' : '' ?>"><div class="nav-block"></div>
				<a class="nav_btn" href="/digital/experience.php">Clients</a>
			</li>

			<?php /* inPage('/insurance/index.php') || inPage('/insurance/program.php') || '/insurance/insight.php' || '/insurance/products.php' || '/insurance/experience.php' || '/insurance/carriers.php' || '/insurance/agents.php' || '/insurance/affiliates.php' ) ? ' nav_selected' : '' 
			*/?>

			<li class="nav_insurance <?= inSection('insurance') ? ' nav_selected' : '' ?>"><div class="nav-block"></div>
				<a class="nav_btn" href="/insurance/">Insurance</a>
			</li>

			<li class="side_sub_nav" id="insurance_side_sub">
				<ul>
					<li><a href="/insurance/program.php">The Program</a></li>
					<li><a href="/insurance/insight.php">Unique Insight</a></li>
					<li><a href="/insurance/experience.php">Deep Experience</a></li>
					<li><a href="/insurance/carriers.php">Insurance Carriers</a></li>
					<li><a href="/insurance/agents.php">Agents/Brokers</a></li>
					<li><a href="/insurance/affiliates.php">Affiliate Marketing</a></li>
					<li><a href="/insurance/products.php">Proprietary tools</a></li>
				</ul>
			</li>

			<li class="nav_careers <?= inPage('/careers/index.php') ? ' nav_selected' : '' ?>"><div class="nav-block"></div>
				<a class="nav_btn" href="/careers/">Careers</a>
			</li>

			<li class="nav_news <?= inPage('/news/index.php') ? ' nav_selected' : '' ?>"><div class="nav-block"></div>
				<a class="nav_btn" href="/news/">News</a>
			</li>

			<li class="nav_contact <?= inPage('/contact.php') ? ' nav_selected' : '' ?>"><div class="nav-block"></div>
				<a class="nav_btn" href="/contact.php">Contact</a>
			</li>
			<li class="nav_clientlounge"><div class="nav-block"></div>
				<a class="nav_btn" href="http://www.clientlounge.com" target="_blank">Clientlounge</a>
			</li>
			<!--
			<li class="nav_clientlounge <?= inPage('/clientlounge.php') ? ' nav_selected' : '' ?>"><div class="nav-block"></div>
				<a class="nav_btn" href="/clientlounge.php">Clientlounge</a>
			</li>
			-->
			
		</ul>
	</nav>
</div>