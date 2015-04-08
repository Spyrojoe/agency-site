<?php include($_SERVER[DOCUMENT_ROOT].'/includes/head.inc.php'); ?>
<title>Apollo Interactive | Insurance Practice | Deep Experience</title>
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

					<div id="experience-sub">
						<h2>Deep Experience</h2>
						<p class="highlight-text">We posses unmatched experience in digital-centric insurance marketing</p>
						<br/>
						<img src="/img/insurance/affiliates_bcbs.png" alt="">
						<img src="/img/insurance/affiliates_wellpoint.png" alt="">
						<img src="/img/insurance/affiliates_hcsc.png" alt="">
						<img src="/img/insurance/affiliates_transamerica.png" alt="">
						<img src="/img/insurance/affiliates_westcoastlife.png" alt="">
						<img src="/img/insurance/affiliates_cigna.png" alt="">
						<img src="/img/insurance/affiliates_geico.png" alt="">
						<img src="/img/insurance/affiliates_coventry.png" alt="">
						<img src="/img/insurance/affiliates_wps.png" alt="">
						<img src="/img/insurance/affiliates_mutualofomaha.png" alt="">
						<img src="/img/insurance/affiliates_farmersinsurancegroup.png" alt="">
						<img src="/img/insurance/affiliates_nationallifegroup.png" alt="">


						<ul style="margin:20px 0 0 0;">We've worked with the largest carriers in the business across all insurance verticals:
							<li style="margin-left: 40px;">Advertising experience since 1995</li>
							<li style="margin-left: 40px;">Online media and marketing experience for insurance products since 2004</li>
							<li style="margin-left: 40px;">Almost 1,000,000 insurance leads acquired every year through a wide variety of tactics</li>
							<li style="margin-left: 40px;">Currently generate leads in all 50 states for health, auto, life, and Medicare insurance.</li>
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
		//$('li.nav_insurance').removeClass('nav_selected');
		//$('#insurance_side_sub ul li:nth-of-type(3)').addClass('nav_selected');
		$('a[href="/insurance/experience.php"]').css('color', '#33ccff');
		$('li.nav_selected a').hover().css('color', '#ddd');
	});
</script>
</body>
</html>