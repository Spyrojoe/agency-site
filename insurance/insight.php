<?php include($_SERVER[DOCUMENT_ROOT].'/includes/head.inc.php'); ?>
<title>Apollo Interactive | Insurance Practice | Unique Insight</title>
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

					<div id="insight-sub" class="noMobileImg">
						<h2>Unique Insight</h2>
						<p class="highlight-text">We create a source of consistent, profitable revenue</p>
						<img src="/img/insurance/unique-insight.png" alt="Apollo Interactive Insurance Practice - Unique Insight" style="margin-bottom:16px;">
						<p>To gain insight into what consumers want when looking to purchase insurance, Apollo Interactive conducts quarterly “active shopper” surveys.  We also interview target consumers annually to understand what they like and dislike about buying insurance. After many years of research the results are clear -- there are many things insurance companies can do better to drive more business.  Our insurance practice offers practical solutions that create a source of consistent, profitable revenue through online advertising.</p>
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
		//$('#insurance_side_sub ul li:nth-of-type(2)').addClass('nav_selected');
		$('a[href="/insurance/insight.php"]').css('color', '#33ccff');
		$('li.nav_selected a').hover().css('color', '#ddd');
	});
</script>
</body>
</html>