<?php 
    // ********************************** NOM PAGE ****************************************************
    $nomPage="02cv.php";
    include "00entete.php";
    // ********************************** CADRE GAUCHE CORPS DU PAGE ****************************************************
?>

<br>
<p class="welcome" ALIGN="CENTER">CV</p>
<br>
<br>

<?php

    if($langChoix=='fr') {
        // ********************************** EDUCATION ********
        $EducAnnee[0]="<br>2019-2021";
        $EducTitre[0]="<br>Classes préparatoires aux grandes écoles (CPGE) - MPSI/PSI* <br>Lycées Clémenceau et Roosevelt";
        $EducTheme1[0]="Mathématiques, physique, Python, sciences de l'ingénieur.";
        $EducTheme2[0]="";
        $EducTheme3[0]="";
        $EducLieu[0]="<br>Reims,<br>France";

        $EducAnnee[1]="<br>depuis 2021";
        $EducTitre[1]="<br>Diplôme d'ingénieur en génie énergétique et nucléaire (MSc) <br>Grenoble INP - PHELMA";
        $EducTheme1[1]="Physique nucléaire, neutronique, thermohydraulique, physique quantique, matériaux, électronique, semi-conducteurs, C, Matlab...";
        $EducTheme2[1]=""; //PFE
        $EducTheme3[1]="";
        $EducLieu[1]="<br>Grenoble,<br>France";

        $EducAnnee[2]="<br>depuis 2023";
        $EducTitre[2]="<br>Diplôme d’ingénieur en ingénierie nucléaire (MSc) <br>Politecnico di Milano";
        $EducTheme1[2]="Neutronique, systèmes multiphasiques, CFD, analyse thermomécanique et effets des irradiations sur des composants, fiabilité et sécurité, propulsion spatiale, C++.";
        $EducTheme2[2]=""; //PFE
        $EducTheme3[2]="";
        $EducLieu[2]="<br>Milan,<br>Italie";
    
        $iEduc=2;	//Total Education

        // *******************WORK AND ASSOCIATIVE EXPERIENCES ********

        $WorkAnnee[0]="2018-2019 <br><b class='tex'>(10 mois)";
        $WorkTitre[0]="Assistant coach (bénévole)";
        $WorkTheme1[0]="Reims Métropole Hockey (RMH)<br>";
        $WorkTheme2[0]="Participation aux entraînements d’enfants apprenant à patiner et à jouer au hockey sur glace";
        $WorkTheme3[0]="";
        $WorkLieu[0]="<br>Reims,<br>France";

        $WorkAnnee[1]="2021-2022 <br><b class='tex'>(10 mois)";
        $WorkTitre[1]="Vulgarisation scientifique (bénévole)";
        $WorkTheme1[1]="Membre de Phelm'Avenir, une association étudiante de PHELMA ayant pour but de vulgariser des phénomènes scientifiques au près d'élèves allant de la primaire au lycée.<br>";
        $WorkTheme2[1]="Présentation d’expériences, participation à des évènements comme la Fête de la Science, explication de phénomènes physiques et partage de ma passion pour les sciences.";
        $WorkTheme3[1]="";
        $WorkLieu[1]="<br>Grenoble,<br>France";

        $WorkAnnee[2]="Juin à Juillet<br>2022<br><b class='tex'>(7 semaines)";
        $WorkTitre[2]="Stage ouvrier à Technocoat, Groupe Optitec";
        $WorkTheme1[2]="Stage ouvrier dans une entreprise faisant de la peinture industrielle afin de valider ma première année en école d’ingénieur.<br>";
        $WorkTheme2[2]="Travail à la chaîne, préparation des pièces avant traitement (peinture), travail d’équipe";
        $WorkTheme3[2]="";
        $WorkLieu[2]="<br>Chassieu,<br>France";

        $WorkAnnee[3]="2022-2023 <br><b class='tex'>(1 an)";
        $WorkTitre[3]="Vice-trésorier d'un bureau étudiant (bénévole)";
        $WorkTheme1[3]="Vice-trésorier du bureau des arts de PHELMA, une association étudiante ayant pour but de promouvoir l'art et la culture par l'organisation d'évènements.<br>";
        $WorkTheme2[3]="Gestion financière, gestion d'éffectifs, démarches administratives.";
        $WorkTheme3[3]="";
        $WorkLieu[3]="<br>Grenoble,<br>France";

        $WorkAnnee[4]="Mai à Septembre<br>2023<br><b class='tex'>(5 mois)";
        $WorkTitre[4]="Stagiaire";
        $WorkTheme1[4]="CEA Saclay - DES/ISAS/DM2S/SERMA/LTSD<br>";
        $WorkTheme2[4]="Évaluation des incertitudes sur des calculs sous-critiques avec le code Monte-Carlo TRIPOLI-4®.";
        $WorkTheme3[4]="Étude de distributions statistiques et construction d'intervalles de confiance sur le facteur de multiplication.";
        $WorkLieu[4]="<br>Saclay,<br>France";

        $iWork=4;	//Total Education
    }
    else {
                // ********************************** EDUCATION ********
        $EducAnnee[0]="<br>2019-2021";
        $EducTitre[0]="<br>Classes préparatoires aux grandes écoles (CPGE) - MPSI/PSI* <br>Lycées Clémenceau et Roosevelt";
        $EducTheme1[0]="Mathematics, physics, Python, engineering sciences.";
        $EducTheme2[0]="";
        $EducTheme3[0]="";
        $EducLieu[0]="Reims,<br>France";

        $EducAnnee[1]="<br>since 2021";
        $EducTitre[1]="<br>Nuclear energy engineering degree (MSc) <br>Grenoble INP - PHELMA";
        $EducTheme1[1]="Nuclear physics, neutronics, thermohydraulics, quantum physics, materials, electronics, semiconductors, C, Matlab...";
        $EducTheme2[1]=""; //PFE
        $EducTheme3[1]="";
        $EducLieu[1]="Grenoble,<br>France";

        $EducAnnee[2]="<br>since 2023";
        $EducTitre[2]="<br>Nuclear engineering degree (MSc) <br>Politecnico di Milano";
        $EducTheme1[2]="Neutronics, multiphase systems, CFD, thermomechanical analysis and effects of irradiation on components, reliability and safety, space propulsion, C++.";
        $EducTheme2[2]=""; //PFE
        $EducTheme3[2]="";
        $EducLieu[2]="Milan,<br>Italy";
    
        $iEduc=2;	//Total Education

        // *******************WORK AND ASSOCIATIVE EXPERIENCES ********

        $WorkAnnee[0]="2018-2019 <br><b class='tex'>(10 months)";
        $WorkTitre[0]="Assistant coach (volunteer)";
        $WorkTheme1[0]="Reims Métropole Hockey (RMH)<br>";
        $WorkTheme2[0]="Volunteer coach and mentor to children learning ice skating and how to play ice hockey.";
        $WorkTheme3[0]="";
        $WorkLieu[0]="Reims,<br>France";

        $WorkAnnee[1]="2021-2022 <br><b class='tex'>(10 months)";
        $WorkTitre[1]="Science popularizer (volunteer)";
        $WorkTheme1[1]="Part of Phelm'Avenir, a PHELMA's student organization with the aim of popularizing scientific phenomena to students from primary to high school.<br>";
        $WorkTheme2[1]="Preparation of experiments, participation in events such as the Science Festival, explanation of physical phenomena and sharing my passion for sciences.";
        $WorkTheme3[1]="";
        $WorkLieu[1]="Grenoble,<br>France";

        $WorkAnnee[2]="June to July<br>2022<br><b class='tex'>(7 weeks)";
        $WorkTitre[2]="Internship - versatile worker at Technocoat, Optitec Group";
        $WorkTheme1[2]="Internship as a blue-collar worker as part of the first year trainig in engineering school.<br>";
        $WorkTheme2[2]="Line work, preparation of parts before processing, team work.";
        $WorkTheme3[2]="";
        $WorkLieu[2]="Chassieu,<br>France";

        $WorkAnnee[3]="since April<br>2022";
        $WorkTitre[3]="Vice-treasurer of the Student Office (volunteer)";
        $WorkTheme1[3]="Vice-treasurer of a PHELMA's student organization whose aim is to organize cultural and artistic events.<br>";
        $WorkTheme2[3]="Financial management, team management, administrative procedures.";
        $WorkTheme3[3]="";
        $WorkLieu[3]="Grenoble,<br>France";

        $WorkAnnee[4]="May to September<br>2023<br><b class='tex'>(5 months)";
        $WorkTitre[4]="Internship";
        $WorkTheme1[4]="CEA Saclay - DES/ISAS/DM2S/SERMA/LTSD<br>";
        $WorkTheme2[4]="Evaluation of uncertainties on subcritical calculations with the Monte-Carlo code TRIPOLI-4®.";
        $WorkTheme3[4]="Study of statistical distributions and construction of confidence intervals on the multiplication factor.";
        $WorkLieu[4]="<br>Saclay,<br>France";

        $iWork=4;	//Total Education
    }
?>

<?php // SCRIPT MISE EN PAGE

    echo "<table BORDER=0 WIDTH=$Width ALIGN=CENTER >";
    echo "<br>";
    echo "<p ALIGN=CENTER>
        <u><a class='two' href='media/02/cv/cv_fr.pdf' target='_blank'>CV (FR)</a></u>
        &nbsp &nbsp &nbsp &nbsp
        <u><a class='two' href='media/02/cv/cv_en.pdf' target='_blank'>CV (EN)</a></u>    
        </p>
        <br>
        <br>"
    ;

    //*******EDUCATION
    echo "<table BORDER=0 WIDTH=$Width ALIGN=CENTER >";
    echo "<br>";
    echo "<p class='title' ALIGN=CENTER>Education</p><br><br>";

    echo "</tr></table>";
    echo "<table BORDER=0 WIDTH=$Width ALIGN=CENTER >";

    while ($iEduc>=0){
        echo "<tr>
        <td class='tex' ALIGN=LEFT vALIGN=TOP> $EducAnnee[$iEduc]</td>
        <td class='tex'  ALIGN=JUSTIFY vALIGN=TOP>
        <b class='tex'>$EducTitre[$iEduc]</b><br><br>
        &bull;&nbsp;&nbsp;&nbsp;$EducTheme1[$iEduc]";
        if ($EducTheme2[$iEduc]!=""){
            echo "<br>&bull;&nbsp;&nbsp;&nbsp;$EducTheme2[$iEduc]<br><br>";
        }
        if ($EducTheme3[$iEduc]!=""){
            echo "<br>&bull;&nbsp;&nbsp;&nbsp;$EducTheme3[$iEduc]<br><br>";
        } 
        echo "<br></td><td class='tex'  ALIGN=CENTER VALIGN=TOP>$EducLieu[$iEduc]</td></tr>"; 
        $iEduc--;
    }

    echo "</tr></table>";

    //********** WORK
    echo "<table BORDER=0 WIDTH=$Width ALIGN=CENTER >";
    echo "<br>";
    echo "<p class='title'ALIGN=CENTER><br>Work experiences</p><br><br>";

    echo "</tr></table>";
    echo "<table BORDER=0 WIDTH=$Width ALIGN=CENTER >";

    while ($iWork>=0){
        echo "<tr>
        <td class='tex' ALIGN=LEFT vALIGN=TOP> $WorkAnnee[$iWork]</td>
        <td class='tex'  ALIGN=JUSTIFY vALIGN=TOP>
        <b class='tex'>$WorkTitre[$iWork]</b><br><br>
        &bull;&nbsp;&nbsp;&nbsp;$WorkTheme1[$iWork]";
        if ($WorkTheme2[$iWork]!=""){
            echo "<br>&bull;&nbsp;&nbsp;&nbsp;$WorkTheme2[$iWork]<br><br>";
        }
        if ($WorkTheme3[$iWork]!=""){
            echo "<br>&bull;&nbsp;&nbsp;&nbsp;$WorkTheme3[$iWork]<br><br>";
        } 
        echo "<br></td><td class='tex'  ALIGN=CENTER VALIGN=TOP>$WorkLieu[$iWork]</td></tr>"; 
        $iWork--;
    }
?>	 

</tr>
</table>


<?php 
    // *********************************** PIED DU PAGE *********************************************************
	include "00piedpage.php";
?>