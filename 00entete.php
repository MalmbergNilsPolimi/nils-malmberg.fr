<!DOCTYPE html>

<?php
	if(isset ($_GET["lg"])){
		$langChoix=$_GET["lg"];
	}
	else {
		$langChoix="en";
	}
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Nils MALMBERG</title>

		<!-- Icone -->
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="media/00/icones/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="media/00/icones/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="media/00/icones/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="media/00/icones/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon-precomposed" sizes="60x60" href="media/00/icones/apple-touch-icon-60x60.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="media/00/icones/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="media/00/icones/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="media/00/icones/apple-touch-icon-152x152.png" />
		<link rel="icon" type="image/png" href="media/00/icones/favicon-196x196.png" sizes="196x196" />
		<link rel="icon" type="image/png" href="media/00/icones/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/png" href="media/00/icones/favicon-32x32.png" sizes="32x32" />
		<link rel="icon" type="image/png" href="media/00/icones/favicon-16x16.png" sizes="16x16" />
		<link rel="icon" type="image/png" href="media/00/icones/favicon-128.png" sizes="128x128" />
		<meta name="application-name" content=<?php echo"&nbsp;"?>/>
		<meta name="msapplication-TileColor" content="#FFFFFF" />
		<meta name="msapplication-TileImage" content="mstile-144x144.png" />
		<meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
		<meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
		<meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
		<meta name="msapplication-square310x310logo" content="mstile-310x310.png" />
		
		<meta name="description" content="Home, CV, Projects">
		<!-- Referencement -->
		<meta name="keywords" content="engineering, nuclear, quantum, fluid, mechanics, materials, electronics, PHELMA, Grenoble INP,French, English, LaTeX,  Python, Matlab, C, C++, SQL, computingn, nils, malmberg">
		<meta name="identifier-URL" content="https://www.nils-malmberg.fr">
		<meta name="author" content="Nils Malmberg">

		<p hidden>www.malmberg.fr</p>

		<?php 
			include "comptvisiteur.php";
			if ($Width=="100%"){
				echo "<meta name=viewport content=width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no />" ;
			}
		?>
		
		<!-- Link fichier styles css -->
		<link rel="stylesheet" href="css/styles.css" type="text/css">
		
		<?php
			//$langChoix='en';
			//$langChoix='fr';			
		?>

	</head>

	<body BGCOLOR="#000000" WIDTH=100%>
		<!-- Hidden = pas affiché : pour que les bots regardent aussi la page de Selma => meilleur référencement -->
		<table BGCOLOR="#f0f0f0" BORDER="0" WIDTH=100%>
			<p hidden>www.malmberg.fr</p> 
			<tr>
				<td class="name" ALIGN=CENTER WIDTH=20%>
					<b><h2>Nils Malmberg</h2></b>
				</td>
				<td ALIGN=LEFT height="50" WIDTH=70%>
					
					<?php
						if($langChoix=="fr") {
							if ($nomPage=="index.php"){echo"<b>Accueil</b>";} 
							else {echo"<a class='one' href=index.php?lg=$langChoix>Accueil</a>";}
							echo "&nbsp";
							if ($nomPage=="02cv.php"){echo"<b>CV</b>";} 
							else {echo"<a class='one' href=02cv.php?lg=$langChoix>CV</a>";}
							echo "&nbsp";
							if ($nomPage=="03projects.php"){echo"<b>Projets</b>";} 
							else {echo"<a class='one' href=03projects.php?lg=$langChoix>Projets</a>";}
						}

						else {
							if ($nomPage=="index.php"){echo"<b>Home</b>";} 
							else {echo"<a class='one' href=index.php?lg=$langChoix>Home</a>";}
							echo "&nbsp";
							if ($nomPage=="02cv.php"){echo"<b>CV</b>";} 
							else {echo"<a class='one' href=02cv.php?lg=$langChoix>CV</a>";}
							echo "&nbsp";
							if ($nomPage=="03projects.php"){echo"<b>Projects</b>";} 
							else {echo"<a class='one' href=03projects.php?lg=$langChoix>Projects</a>";}

						}
					?>
				</td>
				<td color="#6A6A6B" ALIGN=LEFT WIDTH=10%>
					<a class='one' href=<?php echo $nomPage; ?>?lg=fr&themeUrl="fr">FR</a>
					<a class='one' href=<?php echo $nomPage; ?>?lg=en&themeUrl="en">EN</a>		
				</td>
			</tr>
		</table>
	</body>
</html>