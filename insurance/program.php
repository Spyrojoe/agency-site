<?php include($_SERVER[DOCUMENT_ROOT].'/includes/head.inc.php'); ?>
<title>Apollo Interactive | Insurance Practice | The Program</title>
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

					<div id="insurance_content-sub">
						<h2>The Program</h2>
						<p class="highlight-text">We have a Comprehensive Channel Revenue Program for Insurance Companies</p>
						<div id="figure">
							<ul><h3><span>Growing Affinity</span></h3>
								<li>Internet Marketing</li>
								<li>Brand Building</li>
								<li>Reputation Management</li>
							</ul>

							<ul><h3><span>Prospect Acqusition</span></h3>
								<li>Online Media</li>
								<li>Lead Brokering</li>
								<li>Remarketing</li>
							</ul>

							<ul><h3><span>Customer Conversion</span></h3>
								<li>Capturing</li>
								<li>Delivery</li>
								<li>Handling</li>
							</ul>

							<ul><h3><span>Profit Modeling</span></h3>
								<li>Sales Cycling</li>
								<li>Value Profiling</li>
								<li>Right Pricing</li>
							</ul>
						</div>

						<p>Sales-centric marketing is more than just message and media.  Our comprehensive channel revenue program focuses on everything required to generate consistent, profitable revenue.  Our unique insight, proprietary products, and deep experience enable us to grow affinity, acquire prospects, optimize conversion to customer, and analyze the right price to pay for all online marketing activities.  If you want to learn more about how our comprehensive channel revenue program, <a href="/contact.php">request a meeting</a>.</p>
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

		$('#insurance_side_sub ul li a').first().css('color', '#33ccff');
		$('li.nav_selected a').hover().css('color', '#ddd');
	});
</script>
</body>
</html>