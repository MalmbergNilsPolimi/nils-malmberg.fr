<?php
	// *******************
	$nomPage="index.php";
	// ********************************** ENTETE ****************************************************
	include "00entete.php";
?>

<?php
	// ********************************** SCRIPT CORPS DU PAGE ****************************************************
?>

<table style="color: white;" BORDER="0" WIDTH=100% HEIGHT= "350" ALIGN="CENTER" >
	<tr>
		<?php 
			// ********************************** CADRE CORPS DU PAGE ****************************************************
		?>
		<br>
		<br>
		<?php 
			// ********************************** CADRE GAUCHE CORPS DU PAGE ****************************************************
		?>
		<td  WIDTH="100" ALIGN="CENTER">
			<img src="media/01/photo_nils.jpg" width="150">
			<br>
			<br>
			<?php
				if($langChoix=="fr") {
					echo "<a href='https://www.linkedin.com/in/nils-malmberg' title='Lien vers mon Linkedin' target='_blank'> <img src='media/01/iconelinkedin.png' alt='Icon Linkedin' HEIGHT='30'></a>";
				}
				else {
					echo "<a href='https://www.linkedin.com/in/nils-malmberg' title='Link to my Linkedin' target='_blank'> <img src='media/01/iconelinkedin.png' alt='Icon Linkedin' HEIGHT='30'></a>";
				}
			?>
			
		</td>

		<?php 
			// ********************************** CADRE DROITE CORPS DU PAGE ****************************************************
			if ($Width=="100%"){
				echo"</tr><tr><td ALIGN=CENTER VALIGN=TOP>";
			} 
			else {
				echo "<td WIDTH=400 VALIGN=TOP>";
			}
		?>
		<br>
		<br>
		<br>
		<br>
		<?php
			if($langChoix=="fr") {
				echo"<p class='welcome'> <b>Bienvenue,</b></p><br>";
				echo"<p> Actuellement inscrit en double diplôme, j'effectue un master 2 en ingénierie nucléaire à <u><a class='two' href='https://phelma.grenoble-inp.fr/' title='Lien vers le site de Phelma' target='_blank'>Grenoble INP - PHELMA</a></u> et <u><a class='two' href='https://www.polimi.it/' title='Lien vers le site de Polimi' target='_blank'>Politecnico Di Milano</a></u>. Mon parcours académique m'a permis d'acquérir des compétences en physique nucléaire et en programmation.<br>Je suis à la recherche d'un stage à partir de septembre 2024 où je pourrais utiliser et développer mes connaissances en physique nucléaire et en informatique.</p>";

			}
			else {
				echo"<p class='welcome'> <b>Welcome,</b></p><br>";
				echo "<p>Currently enrolled as a double-degree student, I'm doing a Master 2 in Nuclear Engineering at <u><a class='two' href='https://phelma.grenoble-inp.fr/' title='Link to Phelma's website' target='_blank'>Grenoble INP - PHELMA</a></u> and <u><a class='two' href='https://www.polimi.it/' title='Link to Polimi's website' target='_blank'>Politecnico Di Milano</a></u>. My academic career has enabled me to acquire nuclear physics and programming skills.<br>I am looking for an internship starting in September 2024 where I can use and develop my knowledge in nuclear physics and computer science.</p>";
			}
		?>
		</td>
	</tr>
</table>

<?php 
	// *********************************** PIED DU PAGE *********************************************************
	include "00piedpage.php";
?>