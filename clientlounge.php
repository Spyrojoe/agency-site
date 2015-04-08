<?php 
		if(strstr($_SERVER['HTTP_X_FORWARDED_HOST'],'int.apollobackstage')){
			$cl_url = 'http://clientlounge.int.apollobackstage.com'; 
		} elseif(strstr($_SERVER['HTTP_X_FORWARDED_HOST'],'int.apollobackstage')){
			$cl_url = 'http://clientlounge.apollobackstage.com';
		} else {
			$cl_url = 'http://www.clientlounge.com';
		}


?>
	<?php include($_SERVER[DOCUMENT_ROOT].'/includes/head.inc.php'); ?>
	<style>
	.login-frame {
	    position: relative;
	    height: 500px;
	    width: 500px;
	    top: 150px;
	    left: 185px;
	}
	</style>
    </head>
    <body id="pg_clientlounge" class="pg_inside">
    	<div id="wrapper">
    		<div class="opacity-bg"></div>
    		<?php include($_SERVER[DOCUMENT_ROOT].'/includes/sidebar_nav.inc.php'); ?>
			<iframe class="login-frame" src="http://clientlounge.com/public/iframe_login.php" allowtransparency="yes"></iframe>
		</div>
		<?php include($_SERVER[DOCUMENT_ROOT].'/includes/footer.inc.php'); ?>	
    </body>
</html>
