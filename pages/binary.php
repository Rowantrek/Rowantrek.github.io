<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Page Specific Elements -->
	<title>SDD - Binary</title>
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
		<h1>Binary Stuff</h1>
	</div>
		<iframe class="binaryvid" width="1650" height="700" src="https://www.youtube.com/embed/DLzxrzFCyOs?rel=0;autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</body>
</html>