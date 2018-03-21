<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Page Specific Elements -->
	<title>SDD - Application Types</title>
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
		<h1>Application Types</h1>
		<h2>Off-The-Shelf Packages</h2>
		<p>There are two types of application software; Off-the-shelf packages and custom designed software. Off-the-shelf software are distributed pre-packaged via online stores or retail store. Most software used on Personal Computers are of this type. The decision of whether the software meets the user’s requirements is decided by the purchaser. The development of large scale off-the-shelf applications are very expensive however the end-user gets shrunk due to the usually large scale use of the application. An example of large scale off-the-shelf software is Microsoft’s Office Suite (Word, Excel, Powerpoint, Outlook, Access + more). In some cases the software is designed to be customised by the end user to help meet their needs. This is know as customised off-the-shelf (COTS) packages. An example of COTS software is Microsoft Access which could be used to create an inventory system or school database. </p>
		<h2>Custom Designed Software</h2>
		<p>The second type of application software is custom designed software. These normally exist when there was no off-the-shelf package that could meet the individual/organisations need. These software are usually specifically tailored and designed to the end user’s needs. Software for large organisations or governments generally come under this category. Examples of custom designed packages are; Unique inventory/distribution/billing software, Fast food operations, website w/ postage tracking, controlled alarm systems.
</p>
	</div>

</body>
</html>