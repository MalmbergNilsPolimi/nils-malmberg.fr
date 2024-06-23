<?php 
    // ********************************** NOM PAGE ****************************************************
    $nomPage="02cv.php";
    include "00entete.php";
    // ********************************** CADRE GAUCHE CORPS DU PAGE ****************************************************
?>

<table>
    <tr>
        <br>
        <p class="welcome" ALIGN="CENTER">CV (en construction)</p>
        <br>
        <br>
    </tr>
    <tr>
        <?php 
			// ********************************** CADRE DROITE CORPS DU PAGE ****************************************************
			if ($Width=="100%"){
				echo"</tr><tr><td ALIGN=CENTER VALIGN=TOP>";
			} 
			else {
				echo "<td WIDTH=1200 VALIGN=TOP>";
			}
		?>
            <p>
                Table des matières :
                <br>
                <br>
                <ol>
                    <li>
                        <a class=two href="#cv">CV (version pdf)</a><br />
                    </li>
                    <li>
                        <a class=two href="#exppro">Expérience professionnelle</a><br />
                    </li>
                    <li>
                        <a class=two href="#formation">Formation</a><br />
                    </li>                    
                    <li>
                        <a class=two href="#skills">Compétences</a><br />
                    </li>                    
                    <li>
                        <a class=two href="#interests">Centres d'intérêts</a><br />
                    </li>
                </ol>
            </p>
            <br>
            <br>
            <br>
            <br>

            <p class="title" ALIGN="CENTER" id="cv">CV (version pdf)</p>
            <br>
            <br>
            <p ALIGN="CENTER">
                <u><a class="two" href="media/02/cv/cv_fr.pdf" target="_blank">CV (FR)</a></u>
                <?php echo "&nbsp &nbsp &nbsp &nbsp";?>
                <u><a class="two" href="media/02/cv/cv_en.pdf" target="_blank">CV (EN)</a></u>
            </p>
            <br>
            <br>
            <br>
            <br>

            <p class="title" ALIGN="CENTER" id="exppro">Expérience professionnelle</p>
            <br>
            <br>
            <p ALIGN=JUSTIFY>en construction</p>
            <br>
            <br>
            <br>
            <br>

            <p class="title" ALIGN="CENTER" id="formation">Formation</p>
            <br>
            <br>
            <p ALIGN=JUSTIFY>en construction</p>
            <br>
            <br>
            <br>
            <br>

            <p class="title" ALIGN="CENTER" id="skills">Compétences</p>
            <br>
            <br>
            <p ALIGN=JUSTIFY>en construction</p>
            <br>
            <br>
            <br>
            <br>

            <p class="title" ALIGN="CENTER" id="interests">Centres d'intérêts</p>
            <br>
            <br>
            <p ALIGN=JUSTIFY>en construction</p>
            <br>
            <br>

        </td>
    </tr>
</table>



<?php 
    // *********************************** PIED DU PAGE *********************************************************
	include "00piedpage.php";
?>