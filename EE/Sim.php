<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
session_start();

require_once 'ClassName.php';
//$name = "'" . $_POST['CN'] .".php'";
if(isset($_POST['CN']))
{
ClassName($_POST['CN']);
$_SESSION['Cname'] = $_POST['CN'];
		$_SESSION['ClassLevel'] = (int)$_POST['CL'];
		}
		
elseif(isset($_SESSION['Reset']))
{
unset($_SESSION['Reset']);
ClassName($_SESSION['Cname']);
$_SESSION['kpentered'] = 0;
 $_SESSION['kpleft'] = $_SESSION['ClassLevel'];
}

	/*	else{
		session_start();
require_once 'skills.php';
require_once 'ClassName.php';
//$name = "'" . $_POST['CN'] .".php'";
ClassName($_SESSION['Cname']);

/*
$i = 1;
while($i < 25){
$_SESSION['Talents'][$i]->setCurrentlevel(0);
$i++;
}

$_SESSION['kpentered'] = 0;

}
*/
?>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<script type="text/javascript" language="javascript" src="working.js">


</script>

<title>Eden Eternal Talent Sim - Build Your CLASS!</title>
<meta content="Eden Eternal,EE, Finding Neverland Online, FNO, Class, Talent, Simulator, Talent Tree, Skills, Plan, Builds, Eden Builds" name="keywords" />
<meta content="Welcome to the Eden Eternal Talent simulator. Choose your class to plan out your talents!" name="description" />
<link href="../main.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class='Note'>
<div class="adTop">

</div>
<?php
require_once 'DP.php';
require_once 'page.php';
//echo " ";

echo $TalentSim;
?>
<div class="Adbottom">

<h1>NOTES</h1>
-working on further streamlining and making calc more efficient.<br />
-Working on a share function to allow users to share talent builds.<br />
<h1>Updates</h1> -Fixed Problem of not being able to enter KP into various skills. <br />
-Added Warlock. <br />
-Reset button now working! <br />
-Tooltips Fixed! No more clutter from lagging Tooltips!
	

</div>

</div>
</body>

</html>

