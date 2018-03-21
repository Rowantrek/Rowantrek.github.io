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
	<div class="container">

	</div>

</body>
</html>