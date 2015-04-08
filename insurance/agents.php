<?php include($_SERVER[DOCUMENT_ROOT].'/includes/head.inc.php'); ?>
<title>Apollo Interactive | Insurance Practice | Agents/Brokers</title>
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

					<div id="agents-sub" class="noMobileImg">
						<h2>Agents/Brokers</h2>
						<p class="highlight-text">We Help Insurance Agents Grow Their Business</p>
						<img src="/img/insurance/agents.png" alt="Apollo Interactive Insurance Practice - gents/Brokers" style="margin-bottom:16px;"  class="block centered">
							
						<p>Insurance agents and brokers create value by connecting consumers with the insurance products that best meet the needs of those consumers.  We create value by connecting those consumers with the right agent.  We work with large agencies as well as individual brokers to provide them with the affordable, reliable, and high quality leads they need to grow their business.  Our agent and broker support includes:</p>

						<ul>
							<li>High quality lead delivery from legitimate sources</li>
							<li>A complete feedback loop to improve performance</li>
							<li>Online tools for reporting and routing</li>
							<li>Web development support</li>
							<li>Advanced lead segmentation</li>
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
		$('a[href="/insurance/agents.php"]').css('color', '#33ccff');
		$('li.nav_selected a').hover().css('color', '#ddd');
	});
</script>
</body>
</html>