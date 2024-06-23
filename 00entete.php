<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Nils MALMBERG</title>
		<meta charset="utf-8">
		
		<meta name="description" content="Home, CV, Projects">
		<!-- Referencement -->
		<meta name="keywords" content="engineering, nuclear, quantum, fluid, mechanics, materials, electronics, PHELMA, Grenoble INP,French, English, LaTeX,  Python, Matlab, C, C++, SQL, computingn, nils, malmberg">
		<meta name="identifier-URL" content="https://www.nils-malmberg.fr">
		<meta name="author" content="NilsMalmberg">

		<p hidden>Selma MALMBERG</p>
		<p hidden>www.malmberg.fr</p>

		<?php 
			include "comptvisiteur.php";
			if ($Width=="100%"){
				echo "<meta name=viewport content=width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no />" ;
			} 
		?>

		<!-- Link fichier styles css -->
		<link rel="stylesheet" href="css/styles.css" type="text/css">
		
	</head>

	<body BGCOLOR="#ffffff" WIDTH=<?php echo $Width;?>>
		<CENTER>
		<!-- Hidden = pas affiché : pour que les bots regardent aussi la page de Selma => meilleur référencement -->
		<p hidden>Selma MALMBERG</p>
		<p hidden>www.malmberg.fr</p>
		
		<table BORDER="0"  WIDTH=<?php echo $Width;?>>
			<br> 
			<td ALIGN="CENTER">
				<b><h2>Nils Malmberg</h2></b>
			</td>
			<tr>
				<td ALIGN="CENTER"   height="20" >
					<?php if ($nomPage=="index.php"){echo"<b>Home</b>";} else {echo"<a href=index.php>Home</a>";}?>
					<?php if ($nomPage=="02cv.php"){echo"<b>CV</b>";} else {echo"<a href=02cv.php>CV</a>";}?>
					<?php if ($nomPage=="03projects.php"){echo"<b>Projects</b>";} else {echo"<a href=03projects.php>Projects</a>";}?>
				</td>
			</tr>
		</table>
	</body>
</html>