<?php include($_SERVER[DOCUMENT_ROOT].'/includes/head.inc.php'); ?>

<title>Apollo Interactive | Digital Centric Advertising Agency | Los Angeles and Dallas</title>
<meta name="description" content="Apollo Interactive is a digital centric advertising agency in Los Angeles and Dallas with wide-ranging capabilities and deep experience.">
<style type="text/css">
	.opacity-bg{opacity: .8;}
</style>
</head>

<body id="pg_main" class="bg-img">
	<div class="wrapper">
		<?php include($_SERVER[DOCUMENT_ROOT].'/includes/sidebar_nav.inc.php'); ?>

		<div class="opacity-bg"></div>

		<div class="container">
			<div class="content">

				<h1>Top ten reasons <span>to choose</span> Apollo Interactive</h1>
				<div class="row clfx">
					<div class="col col2 col-left">
						<span>10</span>
						<div class="col-copy">
							<h2 class="blue">We Are Dedicated</h2>
							<p>We are digital brand evangelists and are extremely proud to represent and serve our clients</p>
						</div>
					</div>
					<div class="col col2 col-right">
						<span>9</span>
						<div class="col-copy">
							<h2 class="blue">We Are Legit</h2>
							<p>2nd largest interactive (digital) agency in North Texas (Dallas Business Journal – Book of Lists 2015)</p>
						</div>
					</div>
				</div>
				<div class="row clfx">
					<div class="col col2 col-left">
						<span class="vert-offset">8</span>
						<div class="col-copy">
							<h2 class="blue">We Are Focused</h2>
							<p>Your digital budget is our one and only concern</p>
						</div>
					</div>
					<div class="col col2 col-right">
						<span>7</span>
						<div class="col-copy">
							<h2 class="blue">We Are A Very Experienced Team</h2>
							<p>Tenure for most of our employees is 5+ years, many with 10+ years, some even with 15+ years</p>
						</div>
					</div>
				</div>
				<div class="row clfx">
					<div class="col col2 col-left">
						<span class="vert-offset">6</span>
						<div class="col-copy">
							<h2 class="blue">We Are Seasoned</h2>
							<p>We began building and maintaining websites in 1995. Yes, 1995</p>
						</div>
					</div>
					<div class="col col2 col-right">
						<span>5</span>
						<div class="col-copy">
							<h2 class="blue">We Are Efficient</h2>
							<p>We are an agency that can "turn on a dime" to meet your time sensitive initiatives</p>
						</div>
					</div>
				</div>
				<div class="row clfx">
					<div class="col col2 col-left">
						<span>4</span>
						<div class="col-copy">
							<h2 class="blue">We Are Responsive</h2>
							<p>we work in an open collaborative space, answering our client’s calls/emails with immediacy</p>
						</div>
					</div>
					<div class="col col2 col-right">
						<span>3</span>
						<div class="col-copy">
							<h2 class="blue">We Are Accountable</h2>
							<p>We take your digital dollars very seriously and have the ROI case histories of our clients to prove it</p>
						</div>
					</div>
				</div>
				<div class="row clfx">
					<div class="col col2 col-left">
						<span>2</span>
						<div class="col-copy">
							<h2 class="blue">WeAre Digital Ninjas</h2>
							<p>we are equipped to take on projects quickly and efficiently and have done this for over 50 clients</p>
						</div>
					</div>
					<div class="col col2 col-right">
						<span>1</span>
						<div class="col-copy">
							<h2 class="blue">We Are Excelent At What We Do.</h2>
							<p>We are almost 20 years in now as an agency helping 70+ companies with their digital marketing needs including being the digital agency of record for highly visible brands such as Jack in the Box, Visionworks, Chuck E. Cheese’s, Stage Stores, The Mandalay Resort Group and California Pizza Kitchen among others. You don’t have that sort of track record unless you are consistently doing what you do at the highest level</p>
						</div>
					</div>
				</div>

				<div class="row bizdev clfx">
					<div class="col col-left blue">
						<p>We'd love 30 minutes of your time to both show and tell you why we think you are missing out on the digital front by not working with our agency. Please contact David Mammot by phone or email.</p>
					</div>
					<address class="col col-right blue">
						<span>David Mamot</span><br>
						<span>Director of Business Development</span><br>
						<span>p:&nbsp;214.580.2805</span><span>e:&nbsp;<a href="#">mamot@apollointeractive.com</a></span>
					</address>
				</div>

			</div>
		</div>

	</div>
	
	<?php include($_SERVER[DOCUMENT_ROOT].'/includes/footer.inc.php'); ?>
	<script>
		$(document).ready(function(){
			var bottomBorder = '<div class="col col-left grid-border nopad-left"><div class="bottom-border"></div></div><div class="col col-right grid-border nopad-right"><div class="bottom-border"></div></div>';
			$(".row").slice(0,4).after(bottomBorder);
			//$(".row").slice(0,2).css("outline", "1px green solid");
		});
	</script>
	
</body>
</html>
