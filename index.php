<?php
	// *******************
	$nomPage="index.php";
	// ********************************** ENTETE ****************************************************
	 include "00entete.php";
?>

<?php
	// ********************************** SCRIPT CORPS DU PAGE ****************************************************
?>

<table BORDER="0" WIDTH=<?php echo $Width;?> HEIGHT= "210" ALIGN="CENTER" >
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
			<img src="media/photo_nils1.jpg" width="150">
			<br>
			<br>
			<a href="https://www.linkedin.com/in/nils-malmberg" target="_blank"> <img src="media/iconelinkedin.png" alt="Icon Linkedin" HEIGHT="30"></a>
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
		<p> <b>Welcome,</b></p>
		<p>I am currently a student in nuclear engineering at <u> <a href="https://phelma.grenoble-inp.fr/" target="_blank">Grenoble INP - PHELMA</a></u>. 
		<br></p>
		<p>I am looking for an internship of 10 weeks minimum that can start in May 2023.</p>
		</td>
	</tr>
</table>

<?php 
	// *********************************** PIED DU PAGE *********************************************************
	include "00piedpage.php";
?>