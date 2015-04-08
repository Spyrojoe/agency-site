<?php
	if(inSection('home')):
		$title = 'Apollo Interactive | Digital Centric Advertising Agency';
		$meta_kw = 'Apollo Interactive is a digital-centric advertising agency with wide-ranging capabilities and deep experience.';
	elseif (inSection('digital')):
		if(inSection('capabilities.php')):
			$title = 'Apollo Interactive | Capabilities';
			$meta_kw = 'We think it\'s smart to focus on what you do best, and then do it really well. That\'s why we are a digital-centric advertising agency.';
		elseif (inSection('aboutus.php')):
			$title = 'Apollo Interactive | About Us';
			$meta_kw = 'Our ideas and solutions help consumer brands achieve practical marketing goals through persuasive messaging, targeted media, and exceptional analysis.';
		elseif(inSection('work.php')):
			$title = 'Apollo Interactive | Work';
			$meta_kw = 'Our ideas and solutions help consumer brands achieve practical marketing goals through engaging messaging, targeted media, and exceptional analysis.';
		elseif(inSection('experience.php')):
			$title = 'Apollo Interactive | Clients';
			$meta_kw = 'We have extensive experience across a wide range of verticals including Retail, Restaurants, CPG, Franchises, Hospitality, and Financial Services.';
		endif;
	elseif (inSection('digital.php')):
		$title = 'Apollo Interactive | Contacts';
		$meta_kw = 'Contact information and key individuals for our offices located in Los Angeles, California and Dallas, Texas.';
	elseif (inSection('consulting')):
		if (inSection('index.php')):
			$title = 'Apollo Interactive | Marketing Technology Consulting';
			$meta_kw = 'We leverage our firm\'s two decades of experience to provide advisory services for private equity and accounting clients.';
		elseif (inSection('services.php')):
			$title = 'Apollo Interactive | Marketing Technology Consulting | Services';
			$meta_kw = 'Our methodologies reveal growth potential, uncover opportunities for optimization, and expose potentially costly pitfalls that require resolution.';
		elseif (inSection('audit_and_evaluation.php')):
			$title = 'Apollo Interactive | Marketing Technology Consulting | Audit + Evaluation';
			$meta_kw = 'Our audit and evaluation services provide insight that can be used by any marketing partner or internal team to maximize growth and realize cost savings.';
		elseif (inSection('experience.php')):
			$title = 'Apollo Interactive | Marketing Technology Consulting | Experience';
			$meta_kw = 'Apollo Interactive has planned and executed marketing strategies for Fortune 1000 clients since 1995.';
		endif;
	elseif (inSection('insurance')):
		if (inSection('index.php')):
			$title = 'Apollo Interactive | Insurance Practice';
			$meta_kw = 'Our insurance practice helps insurers make online advertising a powerful source of consistent, profitable revenue.';
		elseif (inSection('program.php')):
			$title = 'Apollo Interactive | Insurance Practice | The Program';
			$meta_kw = 'Our comprehensive channel revenue program focuses on everything required to generate consistent, profitable revenue.';
		elseif (inSection('insight.php')):
			$title = 'Apollo Interactive | Insurance Practice | Unique Insight';
			$meta_kw = 'After many years of research the results are clear -- there are many things insurance companies can do better to drive more business.';
		elseif (inSection('products.php')):
			$title = 'Apollo Interactive | Insurance Practice | Proprietary Products';
			$meta_kw = 'Apollo Interactive has powerful tools and properties that deliver prospects and convert them into customers.';
		elseif (inSection('experience.php')):
			$title = 'Apollo Interactive | Insurance Practice | Deep Experience';
			$meta_kw = 'We have unmatched experience in digital-centric insurance marketing. Contact us to find out how we can help.';
		elseif (inSection('carriers.php')):
			$title = 'Apollo Interactive | Insurance Practice | Carriers';
			$meta_kw = 'In the constantly evolving insurance landscape, insurance carriers rely on Apollo Interactive to grow business.';
		elseif (inSection('agents.php')):
			$title = 'Apollo Interactive | Insurance Practice | Agents and Brokers';
			$meta_kw = 'We work with large agencies as well as individual brokers and provide them with affordable, reliable, and high quality leads.';
		elseif (inSection('affiliates.php')):
			$title = 'Apollo Interactive | Insurance Practice | Affiliate Marketing';
			$meta_kw = 'We identify and recruit affiliates with web properties that attract audiences that our customers are interested in reaching.';
		endif;
	elseif (inSection('clientlounge.php')):
		$title = 'Apollo Interactive | ClientLounge';
		$meta_kw = 'Apollo Interactive ClientLounge entrance. Access work in progress for authorized individuals only.';
	elseif (inSection('contact.php')):
		$title = 'Apollo Interactive | Contacts';
		$meta_kw = 'Contact information and key individuals for our offices located in Los Angeles, California and Dallas, Texas.';
	elseif (inSection('careers')):
		if (inSection('index.php')):
			$title = 'Apollo Interactive | Careers';
			$meta_kw = '';
		endif;
	endif;
?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $meta_kw; ?>">
