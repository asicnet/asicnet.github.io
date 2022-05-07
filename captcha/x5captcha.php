<?php
include("../res/x5engine.php");
$nameList = array("j6y","xpj","3jx","z5p","ckz","n4t","vsm","knj","46x","mrk");
$charList = array("3","X","A","D","L","D","L","U","C","K");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
