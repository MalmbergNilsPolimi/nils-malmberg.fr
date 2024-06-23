<?php 
    // ********************************** NOM PAGE ****************************************************
    $nomPage="03projects.php";
    include "00entete.php";
    // ********************************** CADRE GAUCHE CORPS DU PAGE ****************************************************
?>
<table>
    <tr>
        <br>
        <p class="welcome" ALIGN="CENTER">Projects</p>
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
                        <a class=two href="#nas">NAS (en construction)</a><br />
                    </li>
                    <li>
                        <a class=two href="#calculquant">Projet Braket : logiciel de calculs quantique</a><br />
                    </li>                    
                    <li>
                        <a class=two href="#tipe">TIPE : Modélisation d’un système d’exploitation des énergies houlomotrices (Searev)</a><br />
                    </li>
                </ol>
            </p>
            <br>
            <br>
            <br>
            <br>

            <p class="title" ALIGN="CENTER" id="nas">NAS</p>
            <br>
            <br>
            <p>Paragraphe sur le NAS en construction</p>
            <br>
            <br>
            <br>
            <br>

            <p class="title" ALIGN="CENTER" id="calculquant">Projet Braket : logiciel de calculs quantiques</p>
            <br>
            <br>
            <p ALIGN=JUSTIFY>Le projet Braket est un projet réalisé lors de ma première année à <u><a class='two' href="https://phelma.grenoble-inp.fr/" title="Lien vers le site de l'école" target="_blank">Grenoble INP - PHELMA</a></u>. Nous avons du, avec trois autres camarades, développer un logiciel  avec interface graphique. Les langages utilisés sont le C et le C++. Nous avons utilisé la librairie graphique <u><a class='two' href="https://www.fltk.org/" title="Lien vers le site de la librairie" target="_blank">FLTK</a></u>.</p>
            <br>
            <p ALIGN=JUSTIFY>Le projet BraKet offre, via une interface ergonomique et simple à prendre en main, la possibilité de simuler les différentes probabilités associé à chaque composantes d'un état quantique ayant subit une ou plusieurs transformations par le passage à travers une ou plusieurs portes quantiques.</p>
            <br>
            <p ALIGN=JUSTIFY>Illustrations du logiciel à venir</p>
            <br>
            <br>
            <p ALIGN="CENTER">
            <u><a class="two" href="media/03/BRAKET/CDC.pdf" target="_blank">Cahier des charges</a></u>
                <?php echo "&nbsp &nbsp &nbsp &nbsp";?>
                <u><a class="two" href="media/03/BRAKET/calculs.pdf" target="_blank">Présentation des calculs</a></u>
                <?php echo "&nbsp &nbsp &nbsp &nbsp";?>
                <u><a class="two" href="media/03/BRAKET/fr_README.pdf" target="_blank">README FR</a></u>
                <?php echo "&nbsp &nbsp &nbsp &nbsp";?>
                <u><a class="two" href="media/03/BRAKET/en_README.pdf" target="_blank">README EN</a></u>
                <?php echo "&nbsp &nbsp &nbsp &nbsp";?>
                <u><a class="two" href="media/03/BRAKET/projet_braket_phelma.zip" target="_blank">Code du projet (ZIP)</a></u>
            </p>
            <br>
            <br>
            <br>
            <br>

            <p class="title" ALIGN="CENTER" id="tipe">TIPE : Modélisation d’un système d’exploitation des énergies houlomotrices (Searev)</p>
            <br>
            <br>
            <p ALIGN=JUSTIFY>Lors de mes deux années de classe préparatoire aux grandes écoles j'ai du travailler sur un projet appelé TIPE (travail d'initiative personnelle encadré). J’ai donc du choisir un sujet en lien avec le thème de l’année (Enjeux Sociétaux), en dégager une problématique et essayer de la résoudre.</p>
            <br>
            <p ALIGN=JUSTIFY>Les énergies renouvelables telles que les énergies houlomotrices sont une des alternatives aux méthodes actuelles de production énergétique dans l’optique de réduire notre impact sur l’environnement. Plusieurs systèmes ont attiré mon attention mais le Searev, en tant que projet français de l’École Centrale de Nantes, m'a particulièrement intéressé. Le Searev, est un projet intéressant puisqu’il permet de convertir l’énergie de la houle en énergie électrique à l’aide d’une bouée et d’une masse pendulaire. </p>
            <br>
            <p ALIGN=JUSTIFY>J'ai donc lors de ce TIPE décidé de modéliser numériquement le Searev afin d'étudier son efficacité et construit un prototype se déclinant en deux versions.</p>
            <br>
            <p ALIGN=JUSTIFY>Ci-dessous vous trouverez la présentation que j'ai pu soutenir devant le jury, un livrable (MCOT) comprenant la bibliographie ainsi que les codes que j'ai également présenté au jury.</p>
            <br>
            <br>
            <p ALIGN="CENTER">
                <u><a class="two" href="media/03/TIPE/presentation.pdf" target="_blank">Présentation</a></u>
                <?php echo "&nbsp &nbsp &nbsp &nbsp";?>
                <u><a class="two" href="media/03/TIPE/MCOT.pdf" target="_blank">Livrable (MCOT)</a></u>
                <?php echo "&nbsp &nbsp &nbsp &nbsp";?>
                <u><a class="two" href="media/03/TIPE/code.pdf" target="_blank">Notebook (code)</a></u>
            </p>
            <br>
            <br>
        </td>
    </tr>
</table>

<?php 
    // *********************************** PIED DU PAGE *********************************************************
	include "00piedpage.php";
?>