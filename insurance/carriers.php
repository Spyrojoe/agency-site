<?php include($_SERVER[DOCUMENT_ROOT].'/includes/head.inc.php'); ?>
<title>Apollo Interactive | Insurance Practice | Insurance Carriers</title>
<meta name="description" content="Our insurance practice helps insurers make online advertising a powerful source of consistent, profitable revenue.">

</head>

<body id="pg_insurance" class="bg-img">
	
	<div class="wrapper">
		<?php include($_SERVER[DOCUMENT_ROOT].'/includes/sidebar_nav.inc.php'); ?>
		
		<div class="opacity-bg"></div>
		<div class="container">
		
			<div class="content">
				<div id="insurance_content" class="ins-page">
					
					<h1><span style="font-weight:400;">We help our clients</span> acquire customers and drive sales…</h1>
					<p class="highlight-text">…and take a sales-centric approach to reach consumers actively in the market.</p>

					<?php include($_SERVER[DOCUMENT_ROOT].'/includes/insurance_sub_nav.php'); ?>

					<div id="carriers-sub">
						<h2>Insurance Carriers</h2>
						<p class="highlight-text">We Maintain Direct Relationships With Leading Carriers</p>
						
						<p>Since 2004, we have worked directly with insurance carriers to help them achieve their goals.  In the constantly evolving insurance landscape, you can rely on Apollo to develop and execute plans that grow business.  Some of the support we provide insurance carriers includes:</p>
							
						<ul class="carriers">
							<li class="research">Consumer Research</li>
							<li class="planning">Strategic Planning</li>
							<li class="sales">Integration with Internal Sales Teams</li>
							<li class="media">Media Planning and Execution</li>
							<li class="lead-sourcing">Lead Sourcing</li>
							<li class="crm">CRM Integration</li>
							<li class="call-center">3rd Party Call Center Pre-Qualification</li>
							<li class="media">Media Attribution</li>
							<li class="branding">Branding and Awareness</li>
							<li class="seo">Search Engine Optimization</li>
						</ul>
					</div>
					
				</div>
			</div>
		
		</div>	

	</div>
<?php include($_SERVER[DOCUMENT_ROOT].'/includes/footer.inc.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#insurance_side_sub').show();
		$('a[href="/insurance/carriers.php"]').css('color', '#33ccff');
		$('li.nav_selected a').hover().css('color', '#ddd');
	});
</script>
</body>
</html>