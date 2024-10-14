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
											<h2>modification d'un étudiant</h2>
										</header>
									
									</div>
								</section>

							<!-- Section -->
								<section>

   
    <form action=<?php echo "modif.php?id=".$_GET['id'];?> method="POST" onsubmit="return validateForm()">
        <table>
            <tr>
                <td><label for="fullname">Nom Complet:</label><br></td>
                <td><input type="text" id="fullname" name="fullname" value=<?php echo $_GET["fn"];?> required><br><br></td>
            </tr>
            <tr>
                <td><label for="phone">Numéro de téléphone:</label><br></td>
                <td><input type="tel" id="phone" name="phone" value=<?php echo $_GET["ph"];?> required><br><br></td>
            </tr>
            <tr>
                <td><label for="parentPhone">Numéro de téléphone des parents:</label><br></td>
                <td><input type="tel" id="parentPhone" name="parentPhone" value=<?php echo $_GET["pph"];?> required><br><br></td>
            </tr>
            <tr>
                <td><label for="localisation">Localisation:</label><br></td>
                <td><input type="text" id="localisation" name="localisation" value=<?php echo $_GET["lcl"];?> required><br><br></td>
            </tr>
            <tr>
                <td><label for="grade">Classe:</label><br></td>
                <td>
                    <select id="grade" name="grade" onchange="showSpecialtyList()" required>
                        <option value=<?php echo $_GET["grade"];?>><?php echo $_GET["grade"];?></option>
                        <option value="7eme">7ème</option>
                        <option value="8eme">8ème</option>
                        <option value="9eme">9ème</option>
                        <option value="1ere">1ère</option>
                        <option value="2eme">2ème</option>
                        <option value="3eme">3ème</option>
                        <option value="bac">Bac</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div id="specialtyDiv" style="display:none;">
                        <label for="specialty">Spécialité:</label><br>
                        <select id="specialty" name="specialty">
                            <option value=<?php echo $_GET["specialty"];?>><?php echo $_GET["specialty"];?></option>
                            <option value="">--Choisir une spécialité--</option>
                            <option value="sciences">Sciences</option>
                            <option value="technique">Technique</option>
                            <option value="informatique">Informatique</option>
                            <option value="economique">Économique</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td><label for="status">Statut:</label><br></td>
                <td>
                    <select id="status" name="status" required>
                        <option value=<?php echo $_GET["status"];?>><?php echo $_GET["status"];?></option>
                        <option value="nouveau">Nouveau</option>
                        <option value="redoublant">Redoublant</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Envoyer"></td><td><input type="reset" value="Effacer"></td>
            </tr>
        </table>
    </form>
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