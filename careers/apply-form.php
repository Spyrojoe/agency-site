<?php include($_SERVER[DOCUMENT_ROOT].'/includes/head.inc.php'); ?>
</head>

<body id="pg_careers" class="bg-img">
	<div class="wrapper">			
		
		<?php include($_SERVER[DOCUMENT_ROOT].'/includes/sidebar_nav.inc.php'); ?>
		
		<div class="opacity-bg"></div>
		<div class="container">
			<div class="content">
				<div id="careers_content">
					<h1>Apply</h1>
				</div>
						
				<div id="content-careers">
					<?php if($success) : ?>
						<p style="padding:1em;">Thank you for your application.</p>
					<?php else : ?>
						<?php if($form_error) : ?>
							<p class="error"><?=$form_error?></p>
						<?php endif;?>
						<p>Fill out the required fields below to apply.</p>
						<form method="post" enctype="multipart/form-data" id="form-container">
							<input type="hidden" name="position" value="<?=$_GET['pos']?>" />
							<label for="txt-fname" class='pull-left'>First Name*</label>
							<input name="first_name" required value="<?=htmlentities($_POST['first_name'])?>" id="txt-fname" type="text" />
							<br />
							<label for="txt-lname" class='pull-left'>Last Name*</label>
							<input name="last_name" required value="<?=htmlentities($_POST['last_name'])?>" id="txt-lname" type="text" />
							<br />
							<label for="txt-email" class='pull-left'>Email*</label>
							<input name="email" id="txt-email" type="email" required value="<?=htmlentities($_POST['email'])?>"/>
							<br />
							<label for="file-letter" class='pull-left'>Cover Letter*</label>
							<input name="cover_letter" required id="file-letter" type="file" />
							<br />
							<label for="file-resume" class='pull-left'>Resum&eacute;*</label>
							<input name="resume" required id="file-resume" type="file" />
							<br />
							<label for="file-resume" class='pull-left'>Captcha*</label>
							<br />
							<img src="/common_scripts/captcha.php?t=jpg&l=6" style="margin:8px 0 0;" />
							<br />
							<input name="captcha" placeholder="Enter characters above" style="margin: 5px 5px 5px 0; padding: 5px 9px 5px 5px;"/>
							<br />
							<button name="submit-form" id="submit-form" type="submit">Submit</button>
						</form>
					<?php endif;?>
				</div>
			
			</div>
		</div>
	</div>
	<?php include($_SERVER[DOCUMENT_ROOT].'/includes/footer.inc.php'); ?>
	
</body>
</html>
