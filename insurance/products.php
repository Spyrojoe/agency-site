<?php include($_SERVER[DOCUMENT_ROOT].'/includes/head.inc.php'); ?>
<title>Apollo Interactive | Insurance Practice | Proprietary Tools</title>
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

					<div id="products-sub">
						<h2>Proprietary Tools</h2>
						<p class="highlight-text">We utilize powerful tools and properties that deliver prospects and convert them into customers</p>
						
						<h3>Affiliate Network</h3>
						<div class="sub-proprietary">
							<img src="/img/insurance/network.png" width="370" height="213"  alt=""/>
							<p>Our Health Plans of America affiliate network unites hundreds of independent web sites that attract highly targeted consumers who are looking for insurance. Together, our network produces more than 50,000 prospects per month across all types of insurance products.</p>
						</div>
						
						<h3>Consumer Portals</h3>
						<div class="sub-proprietary">	
							<p>Our portfolio of five insurance web portals spans health insurance, auto insurance, life insurance, and Medicare products. Through compelling consumer oriented content, licensed from leading industry sources, we attract hundreds of thousands of targeted visits monthly through natural search. Our clients leverage these properties to acquire highly qualified prospects.</p>
							<img src="/img/portals.png" width="370" height="320"  alt=""/>
						</div>
						
						<h3>LeadQueue</h3>
						<div class="sub-proprietary noMobileImg">	
							<img src="/img/insurance/db_system.png" width="370" height="320"  alt=""/>
							<p>Our LeadQueue Database System is a proprietary lead management application that accepts, reviews, validates, de-duplicates, tracks and transmits leads through open source protocols. Our clients leverage this tool to increase conversion and sales.</p>
						</div>

						<h3>Lead Handling</h3>
						<div class="sub-proprietary noMobileImg">	
							<p>Conversion to contract is highly dependent on when and how you work your leads. We support our clients through lead handling services that include outbound calling, follow up, qualification, and hot transfer.</p>
							<img src="/img/insurance/handling.png" width="400" height="268"  alt=""/>
						</div>
					</div>

				</div>
			</div>
		
		</div>	

	</div>
<?php include($_SERVER[DOCUMENT_ROOT].'/includes/footer.inc.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#insurance_side_sub').show();
		$('a[href="/insurance/products.php"]').css('color', '#33ccff');
		$('li.nav_selected a').hover().css('color', '#ddd');
	});
</script>
</body>
</html>