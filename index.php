<?php
	// *******************
	$nomPage="index.php";
	// ********************************** ENTETE ****************************************************
	 include "00entete.php";
?>

<?php
	// ********************************** SCRIPT CORPS DU PAGE ****************************************************
?>

<table style="color: white;" BORDER="0" WIDTH=100% HEIGHT= "210" ALIGN="CENTER" >
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
			<a href="https://www.linkedin.com/in/nils-malmberg" title="Lien vers mon Linkedin" target="_blank"> <img src="media/01/iconelinkedin.png" alt="Icon Linkedin" HEIGHT="30"></a>
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
		<p class="welcome"> <b>Welcome,</b></p>
		<br>
		<p>
			I am currently a 1st year Master student at <u><a class='two' href="https://phelma.grenoble-inp.fr/" title="Lien vers le site de l'école" target="_blank">Grenoble INP - PHELMA</a></u>, studying
			energy and nuclear engineering. 
			<br>
			I am looking for an internship where I can use and develop my knowledge in physics and computer science.
		</p>
		</td>
	</tr>
</table>

<?php 
	// *********************************** PIED DU PAGE *********************************************************
	include "00piedpage.php";
?>