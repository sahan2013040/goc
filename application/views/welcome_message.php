<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
	<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<script type="application/javascript">
		function directToSignIn(){

		}
	</script>
</head>
<body>
<div data-role="page">

	<div data-role="header">
		<h1>Page Title</h1>
	</div><!-- /header -->

	<div role="main" class="ui-content">
		<p>Page content goes here.</p>
	</div><!-- /content -->


	<div>
		<form action="<?php echo base_url() ;?>index.php/welcome/signIn">
			<button type="submit" value="Continue">Continue</button>
		</form>
	</div>

	<div data-role="footer">
		<h4>Page Footer</h4>
	</div><!-- /footer -->
</div><!-- /page -->


</body>
</html>