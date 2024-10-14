<!DOCTYPE HTML>

<html>
	<head>
		<title>modification</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main1.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo">Bilel Tounsi</a>
									<ul class="icons">
										<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>											
											<h2>Formulaire d'inscription des étudiants</h2>
										</header>
									
									</div>
								</section>

							<!-- Section -->
								<section>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bilel";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$id = $_GET['id'];
$fullname =$_POST['fullname'];
$phone =$_POST['phone'];
$parentPhone =$_POST['parentPhone'];
$localisation =$_POST['localisation'];
$grade =$_POST['grade'];
$specialty = isset($_POST['specialty']) ? $_POST['specialty'] : '';
$status=$_POST['status'];
$sql = "UPDATE etudiants SET fullname='$fullname', phone='$phone', parentPhone='$parentPhone', localisation='$localisation', grade='$grade', specialty='$specialty', status='$status' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    include "listeetudiants.php";
} else {
    echo "Error updating record: " . $conn->error;
}


?>
</section>

</div>
</div>

<!-- Sidebar -->
<div id="sidebar">
<div class="inner">

	<!-- Search -->
		<section id="search" class="alt">
			<form method="post" action="#">
				<input type="text" name="query" id="query" placeholder="Search" />
			</form>
		</section>

	<!-- Menu -->
	<nav id="menu">
		<header class="major">
			<h2>Menu</h2>
		</header>
		<ul>
			<li><a href="index.html">Homepage</a></li>
			<li><a href="form.html">ajout d'un etudiants</a></li>                
			<li><a href="listeetudiants.php">liste etudiants</a></li>
			<li><a href="filtre.html">filtrer</a></li>
			<li>
				<span class="opener">College</span>
				<ul>												
					<li><a href="listeetud.php?c=1">7 eme</a></li>
					<li><a href="listeetud.php?c=2">8 eme</a></li>
					<li><a href="listeetud.php?c=3">9 eme</a></li>
				</ul>
			</li>
			
			<li>
				<span class="opener">lycee</span>
				<ul>
					<li><a href="listeetud.php?c=4">1 ere</a></li>
					<li>
						<span class="opener">2 eme</span>
						<ul>		
							<li><a href="listeetud.php?c=5">sciences</a></li>
							<li><a href="listeetud.php?c=6">informatique</a></li>                                                       
							<li><a href="listeetud.php?c=7">economie et gestion</a></li>
						</ul>
					</li>
					<li>
						<span class="opener">3 eme</span>
						<ul>	
							<li><a href="listeetud.php?c=8">sciences</a></li>
							<li><a href="listeetud.php?c=9">informatique</a></li>
							<li><a href="listeetud.php?c=10">technique</a></li>
							<li><a href="listeetud.php?c=11">economie et gestion</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li>
				<span class="opener">bac</span>
				<ul>
					<li><a href="listeetud.php?c=12">bac sciences</a></li>
					<li><a href="listeetud.php?c=13">bac informatique</a></li>
					<li><a href="listeetud.php?c=14">bac technique</a></li>
					<li><a href="listeetud.php?c=15">bac economie et gestion</a></li>
				</ul>
			</li>
		</ul>
	</nav>



	<!-- Footer -->
			<footer id="footer">
					<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="images/20231228_172536.jpg">Unsplash</a>. Design: Mohamed Taieb.</p>
				</footer>

</div>
</div>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>