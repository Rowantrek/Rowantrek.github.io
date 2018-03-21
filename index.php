<!DOCTYPE html>
<html lang="en">
	<!-- Page Specific Elements -->
	<title>SDD - Homepage</title>
	<!-- PHP Code will grab Head Elements -->
	<?php
	if (file_exists("/var/www/html/php/head.php")) {
		require_once('/var/www/html/php/head.php');
	} else {
		header("Location: http://45.76.124.195/php/fatal.php");
		exit;
	}
	?>
	<!-- Content Wrapper -->
	<div class="container">
	<iframe class="gdoc" width="800" height="800" src="https://docs.google.com/document/d/e/2PACX-1vR5qbbL20kNEZGkLcauvuUQXASBYOZnzIviLixNjYs45Gg2r2nkz2buzYfJm1400TK0w7WEVGERgk_U/pub?embedded=true"></iframe>
	</div>

</body>
</html>