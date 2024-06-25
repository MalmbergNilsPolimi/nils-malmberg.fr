
<?php

/*
echo "addresse IP";
$visiteip=$_SERVER["REMOTE_ADDR"];
echo $visiteip;echo "<BR>";
echo "navigateur";
$navigateur=$_SERVER["HTTP_USER_AGENT"];
echo $navigateur;echo "<BR>";
echo "langue";
$languevisite=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
echo $languevisite;echo "<BR>";
echo "serveur";
						$serveurvisit=$_SERVER["SERVER_NAME"];
						//$serveurvisit=$nomPage."-".$lg;
				
echo "<BR>";echo $serveurvisit;
$datevisite=date("Y-m-d");
$heurevisite=date("H:i:s");
echo "<BR>";echo $datevisite;

include("config.php");
//********
$database=mysql_connect($mysql_hostname,$mysql_username,$mysql_password);
mysql_select_db($mysql_database,$database)or die ("erreur de connexion base");

mysql_query("INSERT INTO tablevisiteur VALUES('','$languevisite','$datevisite','$heurevisite','$visiteip','$navigateur','$serveurvisit')");
*/

//TAILLE D'AFFICHAGE
if (stristr($_SERVER["HTTP_USER_AGENT"], "Android")
|| strpos($_SERVER["HTTP_USER_AGENT"], "iPod")
|| strpos($_SERVER["HTTP_USER_AGENT"], "iPhone")
//|| strpos($_SERVER["HTTP_USER_AGENT"], "Windows")
){
	//echo "AFFICHAGE MOBILE";
	$Width="100%";
	//$Width=500;
}
else {
	//echo "<BR> AFFICHAGE CLASSIQUE";
	$Width=800;
}
?>