<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Page Specific Elements -->
	<title>SDD - Fetch Run Cycle</title>
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
	<h1>Relationship and between hardware and software</h1>
	<br>

</br>

	<p>Neither of these can act independently, as software tell the hardware what to do. Hardware is a physical component for example Computers, keyboards, disk drives, iPads, and usb. For a computer to effectively manipulate data and produce the desired output the hardware and software must work together. Computer software must be load into the hard ware then it can be executed. There are many types of software. The main two is the operating system which make the hardware usable and application software which is a program or group of programs designed for end users.</p>
	<br>

</br>

	<p>Fetch is the instruction retrieved from memory and decoded in the control section. The address bus conveys the address to the memory controller that selects the cell address in memory containing the instructions.</p>
	<br>

</br>

	<p>Decode is the instruction at the address is sent on the data bus to the decoder where it is decoded into an opcode (is the instructions for processing the data) and an operand (data which needs to be processed). The opcode is sent to the ALU (Arithmetic Logic Unit). The operand goes on the address bus to the memory controller that retrieves the data from the memory cell. This data is sent on the data bus.</p>
	<br>

</br>

	<p>Execute is the processing section carries out the decoded instruction, sending data to or from memory as needed.</p>
	<br>

</br>

	<p>Store is the result of the ALU's calculation stored in the accumulator.</p>
	<br>

</br>

	<p>Program counter a register within the cpu thtat records the current instruction being executed</p>
	<br>

</br>

	<p>Store is the result of the ALU's calculation stored in the accumulator.</p>
	<br>

</br>

	<p>Program counter a register within the cpu thtat records the current instruction being executed</p>
	<br>

</br>

	<p>machine code also called object-code, this is code that shows how computer hardware understand instructions. It is represented by binary numbers</p>
	<br>

	</br>

	<h2>Fetch-decode-execute cycle</h2>
	<br>

</br>

	<p>The cpu job is to execute problems using the fetch decode execute. This cycle starts as soon as the computer is turned on. To execute a program, the program code is copied from secondary storage into the main memory. The CPU's program counter is set to find where the first instruction in the program has been stored, and execution begins and then the program will run.</p>
	<br>

</br>

	<p>In a program, each machine code instruction takes up a slot in the main memory. Each slot have a unique memory address. The program counter stores the address of each instruction and tells the CPU the order for it to be carried out.</p>
	<br>

</br>

	<p>When a program is being executed, the CPU performs the fetch-decode-execute cycle, which repeats it until reaching the STOP instruction.</p>

	</div>

</body>
</html>
