<?php
include 'php/master.php';
?>

<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>MATHIS CODE</title>
		<link rel="icon" href="favicon.ico">
		<link rel="stylesheet" href="css/monsite.css">
		<link rel="stylesheet" href="css/font_import.css">
	</head>
	<div>
		<header>
			<ul id="menu">
				<?php
                foreach($barmenu["text_barmenu"] AS $index=>$titre) {
                    echo '<li><a href="#background'.count($barmenu["text_barmenu"]) - $index.'">'.$titre.'</a></li>';
                }
                ?>
			</ul>
			<hr>
		</header>
		
		<main>
			<div id="background1">
			<div id="numero_1">
                <p class="numeros_alignes_droite">1</p>
				<?php
                echo '<h1>'.$background1["titre_principal"].'</h1>';
                echo '<p id="citation">'.$background1["citation"].'</p>';
                ?>
				<div id="logo_aligne">
                    <?php
                    foreach($background1["logos"] AS $logo) {
                        echo '<a href="'. $logo["link"] .'"><img src="' . $logo["src"] . '" alt="' . $logo["alt"] . '"></a>';
                    }
					echo '<p id="boite_nouveaute"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">Nouveautés</span><br>'.$background1["nouveaute"].'</p>';
                    ?>
				</div>
			</div>
			</div>
			
			<div id="background2">
			<div id="numero_2">
                <p class="numeros_alignes_gauche">2</p>
                <?php
				echo '<h2 class="titre_gauche reveal fade-left">'.$background2["titre"].'</h2>';
                foreach ($background2["boites"] AS $contenu) {
                    echo '<p class="boite_a_propos reveal fade-bottom"><img src="img/content.png" alt="icon feuille"><span class="titre_des_boites">'.$contenu["titre_boite"].'</span><br>'.$contenu["texte_boite"].'</p>';
                }
                ?>
			</div>
			</div>

            <div id="background3">
                <div id="numero_3">
                    <p class="numeros_alignes_droite">3</p>
                    <?php
                    echo '<h2 class="titre_droite reveal fade-right">'.$background3["titre"].'</h2>';
                    echo '<div class="barre_competence"><div id="barre_python_background" class="barre_competence_background_global"><div class="projets_gauche"><p>'.$background3["progress_bar1"].'</p></div></div><div id="barre_python" class="barre_competence_global reveal fade-right-bar"></div></div>';
                    echo '<div class="barre_competence"><div id="barre_html_background" class="barre_competence_background_global"><div class="projets_gauche"><p>'.$background3["progress_bar2"].'</p></div></div><div id="barre_html" class="barre_competence_global reveal fade-right-bar"></div></div>';
                    echo '<div class="barre_competence"><div id="barre_php" class="barre_competence_background_global reveal fade-left-bar"></div><div id="barre_php_background" class="barre_competence_global"><div class="projets_droite"><p>'.$background3["progress_bar3"].'</p></div></div></div>';
                    echo '<div class="barre_competence"><div id="barre_java" class="barre_competence_background_global reveal fade-left-bar"></div><div id="barre_java_background" class="barre_competence_global"><div class="projets_droite"><p>'.$background3["progress_bar4"].'</p></div></div></div>';
                    echo '<div class="barre_competence"><div id="barre_linux_background" class="barre_competence_background_global"><div class="projets_gauche"><p>'.$background3["progress_bar5"].'</p></div></div><div id="barre_linux" class="barre_competence_global reveal fade-right-bar"></div></div>';
                    echo '<div class="barre_competence"><div id="barre_reseau_background" class="barre_competence_background_global"><div class="projets_gauche"><p>'.$background3["progress_bar6"].'</p></div></div><div id="barre_reseau" class="barre_competence_global reveal fade-right-bar"></div></div>';
                    ?>
                </div>
            </div>
			
			<div id="background4">
			<div id="numero_4">
                <p class="numeros_alignes_gauche">4</p>
				<?php
				echo '<h2 class="titre_gauche reveal fade-left">'.$background4["titre"].'</h2>';
                ?>
				<p class="boite_travaux reveal fade-bottom"><img src="img/prime.png" alt="image prime nuit du code">Ambitions</p>
				<p class="boite_travaux reveal fade-bottom"><img src="img/keysholder.png" alt="image programme keyholder">Ambitions</p>
				<p class="boite_travaux reveal fade-bottom"><img src="img/jeu_de_nim.png" alt="image jeu de nim">Ambitions</p>
				<input id="bouton_voir_tout" class="reveal fade-bottom" type="button" value="VOIR TOUT">
			</div>
			</div>

			<div id="background5">
			<div id="numero_5">
                <p class="numeros_alignes_droite">5</p>
				<?php
                echo '<h2 class="titre_droite reveal fade-right">'.$background5["titre"].'</h2>';
                ?>
			</div>
			</div>
			
			<div id="background6">
				<hr id="separation_contact">
                <?php
                echo '<h2 class="titre_gauche reveal fade-left">'.$background6["titre"].'</h2>';
                ?>
			</div>
	
		</main>
		<footer>
            <div class="footer_boite_align">
                <div class="footer_boite">
                    <p>MathisCode</p>
                    <p>Merci de votre visite</p>
                </div>
                <div class="footer_boite">
                    <p>Compétences</p>
                    <p>Python</p>
                    <p>HTML/CSS</p>
                    <p>PHP</p>
                    <p>...</p>
                </div>
                <div class="footer_boite">
                    <p>Liens</p>
                    <p>Accueil</p>
                    <p>À propos</p>
                    <p>Compétences</p>
                    <p>Expérience</p>
                    <p>Formation</p>
                    <p>Contact</p>
                </div>
                <div class="footer_boite">
                    <p>Contact</p>
                    <p>Instagram : met_meza</p>
                    <p>Facebook : met_meza</p>
                    <p>Discord : met_meza#6393</p>
                    <p>Mél : mathis.ravier@sts-sio-caen.info</p>
                </div>
            </div>
			<p>Copyright © 2022. All rights reserved.</p>
		</footer>
	</body>
    <script src="js/animation.js"></script>
</html>
