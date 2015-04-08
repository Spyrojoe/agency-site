<?php include($_SERVER[DOCUMENT_ROOT].'/includes/head.inc.php'); ?>
<title>Apollo Interactive | Insurance Practice | Affiliate Marketing</title>
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

					<div id="seo_content-sub" class="noMobileImg">
						<h2>Affiliate Marketing</h2>
						<p class="highlight-text">We Mobilize Affiliates to Drive Results</p>
						<img src="/img/insurance/affiliates.png" alt="Apollo Interactive Insurance Practice - Affiliate Marketing" style="margin-bottom:16px;"  class="block centered">
							
						<p>The Internet is full of bright individuals with creative advertising techniques and web properties that attract audiences that our customers are interested in reaching.  By identifying and recruiting these affiliates we can establish relationships that benefit both the affiliate and the advertiser.  Efforts in this area include:</p>
						
						<ul>
							<li>Affiliate Recruitment	</li>
							<li>Affiliate Support and Management</li>
							<li>Affiliate Network Management</li>
							<li>Creative and Development Support</li>
							<li>Payment Processing</li>
							<li>Growth Incentives</li>
							<li>Real Time Reporting and Interfaces</li>
						</ul>
						
						<p>If you are interested in joining our affiliate program <a href="https://www.healthplansamerica.org/affiliate/" target="_blank">click here</a> to learn more and sign up today.</p>
					</div>

				</div>
			</div>
		
		</div>	

	</div>
<?php include($_SERVER[DOCUMENT_ROOT].'/includes/footer.inc.php'); ?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#insurance_side_sub').show();
		$('a[href="/insurance/affiliates.php"]').css('color', '#33ccff');
		$('li.nav_selected a').hover().css('color', '#ddd');
	});
</script>
</body>
</html>