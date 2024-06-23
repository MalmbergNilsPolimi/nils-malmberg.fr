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
				echo"<p> Je suis étudiant en première année de master à <u><a class='two' href='https://phelma.grenoble-inp.fr/' title='Link to Phelma's website' target='_blank'>Grenoble INP - PHELMA</a></u>, où j'étudie le génie énergétique et nucléaire.<br>Je suis à la recherche d'un stage où je pourrais développer mes connaissances physique et programmation.</p>";

			}
			else {
				echo"<p class='welcome'> <b>Welcome,</b></p><br>";
				echo "<p>I am currently a 1st year Master student at <u><a class='two' href='https://phelma.grenoble-inp.fr/' title='Link to Phelma's website' target='_blank'>Grenoble INP - PHELMA</a></u>, studying energy and nuclear engineering.<br>I am looking for an internship where I can use and develop my knowledge in physics and computer science.</p>";
			}
		?>
		</td>
	</tr>
</table>

<?php 
	// *********************************** PIED DU PAGE *********************************************************
	include "00piedpage.php";
?>