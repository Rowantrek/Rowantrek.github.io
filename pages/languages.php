<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Page Specific Elements -->
	<title>SDD - Programming Languages</title>
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
	<h1>Generations of Programming Languages</h1>
		<p>Programming languages are generally sorted into 4 generations of languages. Low-level languages include the 1st &amp; 2nd generation and the High-Level languages include the 3rd and 4th generations. The four generations are; Machine, Assembler, High-Level and Declarative. The higher the language is; the more understandable it is, the less lines of code are needed and the more hardware independent it is. The first two generations are low-level languages are usually relate and control hardware functions. Various CPU’s only understand certain low-level languages as consequence most low-level languages are only understood by a certain cpu instruction set. The third and fourth generation are machine independent due to these languages being translated into the relevant low level languages. However the downsides of this language is that the programmer is limited to functions available in the language’s syntax.</p>
		<h2>First Generation Languages</h2>
		<p>The first generation languages are known as machine languages. Machine language is used to send instructions to the cpu to execute its limited inbuilt commands. The language is represented to the computer in binary language. <a href="binary.php" >Click here to learn more about Binary.</a> Machine language instructions consist of two parts. An opcode and one or more operands. Most instructions require a single operand.. The opcode identifies which control unit the process is to be performed and the operand provides the data for the process</p>
		<h2>Second Generation Languages</h2>
		<p>Second generation languages are known as Assembler languages, they were the first attempt to make programming languages more human like. CPU instructions were given syntaxes to allow them to be clearer to the operator and easier to read. However the CPU does not understand Assembler language which requires it to be translated into Machine language.</p>
		<h2>Third Generation Languages</h2>
		<p>Third generation languages are known as high-level languages. There are currently hundreds of available high-language languages today. Each language has its own strengths and weaknesses. It allows developers to focus on the development of a solution to their problems then allowing it to be understood by a machine. All high-level languages however need to be translated into machine code. This works by turning the high level code (source code) into machine language (object code). These languages are said to be machine independent meaning that they can run irregardless of the hardware components.</p>
		<h2>Fourth Generation Languages</h2>
		<p>The fourth-generation of languages are known as Declarative languages. Declarative programming is a non-imperative style of programming in which programs describe their desired results without explicitly listing commands or steps that must be performed.</p>
		<iframe class="cvid" width="560" height="315" src="https://www.youtube.com/embed/Wgm9U_0gbEU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>

</body>
</html>