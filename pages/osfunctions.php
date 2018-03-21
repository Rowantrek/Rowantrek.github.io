<!DOCTYPE html>
<html lang="en">
<head>
		<!-- Page Specific Elements -->
	<title>SDD - OS Functions</title>
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
		<h1>Functions of an operating system</h1>
		<p>Operating systems is the first software that we see when we turn on a computer and the last when we shutdown. It is extremely crucial software which a computer wouldn’t work without. It performs vital tasks such as managing process and resources, hardware interface, user interface, managing software applications and various other utilities such as file management. The operating system manages the communication between the CPU, RAM and Storage of a computer and the software that uses it. It also manages the allocation of these resources to running software processes. It allows the user to use peripheral devices to interact with the computer to use it. Additionally it allows software to interface with hardware e.g. for debugging purposes or statistical data. It also comes with various utilities to manage various system functions such as defragmenting, directory structure, file deletion/saving, copying and changing system settings.</p>
		<h2>Hardware Interface and Resource Management</h2>
		<p>The OS (operating system) ensure that each application process is allocated enough CPU time to perform its functions correctly. In modern day systems it is common even though one application is open that many background applications/tasks are running, using cpu resources. The OS also allocates sufficient memory so that processes can effectively run. When allocated the memory it will be reserved to that software so that other processes cannot eat into it’s memory. In the case of insufficient memory the OS will free up memory by forcing other processes to close or moving their reserved memory onto virtual memory on a hard disk. It is also responsible for the management of all connected devices and the driver software they use.</p>
		<h2>Interface to User</h2>
		<p>The operating system allows the user to interface with applications via graphical user interface (GUI) shells or command based shells. The main interface component usually sits on top of the main operating system. It usually only represents a small portion of the operating system in total. Command-based user interfaces were the first UI’s to exist. Any interaction from the user needed to be sent via the use of commands e.g. (dir, cd, rm, rmdir). The path of these command-based system are usually pre-determined. They generally use less resources than GUI applications. Many operating systems in our day (mainly Linux distros) still heavily rely on command-based interaction but contain a GUI portion. The Graphical User interface operating systems consist of fully bitmapped images that the operating system sends to the video processing system. These operating systems generally use more system resources due to the processing of these GUIs.</p>
		<h2>Provides an interface to software applications</h2>
		<p>The operating system also has the important function of providing interface to application software. Some operating systems use an API (application programming interface) to perform this task. With this interface applications can utilise a large portion of the operating system’s functions without worrying about the completion of these tasks. For example if a program wishes to create a directory for storing its related data files it can tell the operating system the details and then the operating system will then carry out the task. This also allows the programmer to not need worry about system hardware specifics but let the OS sort out those specific functions instead. This means that generally software is written for a specific operating system then particular hardware devices.</p>
		<h2>Concurrent running of software applications</h2>
		<p>A multitasking operating system allows for multiple programs (processes) to be executed simultaneously on a computer. Most operating systems are classified as multitasking. The operating system allows this by allocating CPU time to each process allowing them to function. It also reserves memory for the applications as well. This gives the appearance of of multiple programs executing code at the same time.</p>
		<h2>Current Trends in the development of software applications and operating systems</h2>
		<p>There are many trends in the development of software and operating systems. These trends include; breaking down the language barrier, graphical user interfaces, multitasking, machine independent and responsiveness on all devices. Software &amp; Operating systems developers are continuously improving the multi-linguistic features of their software. Allowing users from all corners of the globe to efficiently use their software. Additionally the improvement of GUIs and their disability features allow users of all states (vision impaired, sound impaired, etc) to see be able to use the software. Operating systems are almost always designed to support multi tasking as well, allowing users to perform many functions at once. The increase in mobile devices has also led to software becoming machine independent and more OS dependent than ever before, allowing many different users to use the same software irregardless of hardware. This has also led to the popularisation of mobile apps and websites which are fully responsive on mobile devices.</p>
	</div>

</body>
</html>