<?php include($_SERVER[DOCUMENT_ROOT].'/includes/head.inc.php'); ?>

<title>Apollo Interactive | Digital Centric Advertising Agency</title>
<meta name="description" content="Apollo Interactive is a digital-centric advertising agency with wide-ranging capabilities and deep experience.">

<style type="text/css">
	#feed{
		margin-top: 30px;
	}
</style>

<!--
<script type="text/javascript" src="http://platform.linkedin.com/in.js">
	api_key: 75vfd72hu4275s
	authorize: true
	onLoad: onLinkedInLoad
</script>
-->

</head>

<body id="pg_main" class="bg-img" style="background-size: cover;">
	<div class="wrapper">
		<?php include($_SERVER[DOCUMENT_ROOT].'/includes/sidebar_nav.inc.php'); ?>
		<div class="opacity-bg"></div>
		<div class="container">
			<div class="content">
				<div id="home-content">
					<h1>Apollo Interactive Development Page</h1>
					<p class="highlight-text">I'm an experimental page for testing new features. Don't push me live.</p>
					<div id="feed">
						<h2>Apollo LinkedIn news feed content</h2>
						<script type="IN/Login"></script>
						<p></p>
					</div>
					<button id="my-button">I'm a button</button>
				</div>
			</div>
		</div>
	</div>
	<?php include($_SERVER[DOCUMENT_ROOT].'/includes/footer.inc.php'); ?>
	
	<script type="text/javascript">
	$(document).ready(function(){
		
		setTimeout(autoClick, 1500);

		$('button').click(function(){
			myAlert();
		});
		
		function autoClick(){
			$('button').trigger('click');
		}

		function myAlert(){
			alert("You just clicked me!");
		}

	});
	</script>

	<!-- LinkedIn API calls -->
	<!--
	<script type="text/javascript">
		var apiKey = '75vfd72hu4275s';
		var apiSecret = 'LszzIYcx1Ay9tD5g';
		var redirectUri = "http://verybradthings.com";
		var scope = "r_fullprofile";
		var oauth2 = "baa37164-1ef4-492a-87b6-dc5a3455aff2";
		function onLinkedInLoad(){
			console.log("onLinkedInLoad() passed");
			IN.Event.on(IN, 'auth', onLinkedInAuth);
		}
		function onLinkedInAuth(){
			console.log("onLinkedInAuth() passed");
			getAuthCode();
		}
		function getAuthCode(){
			console.log("getAuthCode() passed");
			IN.API.Raw("/people/~?oauth2_access_token=baa37164-1ef4-492a-87b6-dc5a3455aff2")
				.result(function(result){
					console.log(result);
					console.log("good job buddy");
				});
				showCompany();
		}
		function error(){
			console.log('error: you suck');
		}
		function dummy(){
			console.log("Dummy");
		}
		function showCompany(){
			IN.API.Raw("/companies/25355:(id,name,description,industry,logo-url)")	// get company name and description
				.result(function(result){
					console.log(result);
					$('#name').text(result.name);
					$('#description').text(result.description);
				});
			IN.API.Raw("/companies/25355/updates?event-type=status-update")	// get feed content from company
				.result(function(result){
					//console.log(result.values[numLikes]);
					console.log(result.values[0]);
					$('#feed p').text(result.values[0].updateContent.companyStatusUpdate.share.comment);
				});
		}
	</script>
	-->
</body>
</html>
