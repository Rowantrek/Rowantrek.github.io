<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Page Specific Elements -->
	<title>SDD - Translation</title>
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
		<h1>The Need for translation</h1>
		<p>Source code from the high-level languages cannot be understood or executed by a CPU. This requires for the high level source code to be translated into low level object code which can understood and executed by the CPU. Different CPUs require different translators. The two main methods are translation are compilation and interpretation. During development it is common to test most methods. Interpreters are used to test code during the development and compilation is usually used to make the final executable that will be distributed.</p>
		<h2>Compilation</h2>
		<p>The process of compilation requires translating the entire source code into object code. Object code is then combined with other linked data files to be made into the final executable file. The executable files can then be executed repeatedly without any further compilation needed. A benefit for developers using compilation is that it is very hard to tell the original high-level language used to develop the application/code. Also determining the original source code is hard due to the many possibilities from different languages.</p>
		<h2>Interpretation</h2>
		<p>Interpreters operate by translating the source code statement by statement. This is beneficial to developers during development because it will stop when it encounters an error, allowing the developer to find the error and the statement it is in to fix it. Once has finished translating all the code it will run the final application. The downside to this method is that translating statement by statement generally leads to bad performance and slow speeds. Very few applications use interpretation to generate their final executable files.</p>
		<iframe class="cvid" width="560" height="315" src="https://www.youtube.com/embed/JNMy969SjyU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>

</body>
</html>