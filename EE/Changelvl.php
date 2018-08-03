<?php
require_once 'skills.php';
session_start();
$skillnumber = $_GET['sk'];
$kpentered = $_GET['kpenter'];
$kpleft = $_GET['kpleft'];
$action = $_GET['a'];


// changes current lvl of skill 0 decreases, 1 increases
	// $skillpre is prereq skill level
	//$kpin amount of kp remaining
	//$kpen amount entered
	//$req2 is the current level of the skill it is a prerequiste to. 
//function changelvl($val, $skillpre, $kpin, $kpen, $req2)
	if($action == 1)
{

	if($skillnumber > 1)
		{
		for($i = 1 ; $i < 3 ; $i++)
		{		
		if( $_SESSION['Talents'][$skillnumber - $i]->name != ''){
			$prevskill = $_SESSION['Talents'][$skillnumber - $i]->currentlvl;
			$i = 4;
			}}}
	 else $prevskill = 0;
	 if($skillnumber < 24)
	 {
	 for($i=1; $i < 3; $i++){
		
		if( $_SESSION['Talents'][$skillnumber + $i]->name != ''){
			$nxtskill = $_SESSION['Talents'][$skillnumber + $i]->currentlvl;
			$i = 4;}}}
	 else $nxtskill = 0;


	$_SESSION['Talents'][$skillnumber]->changelvl(1,$prevskill,$kpleft,$kpentered,$nxtskill);
}
elseif($action == 0)
{
if($skillnumber > 1)
		{
		for($i = 1 ; $i < 3 ; $i++)
		{		
		if( $_SESSION['Talents'][$skillnumber - $i]->name != ''){
			$prevskill = $_SESSION['Talents'][$skillnumber - $i]->currentlvl;
			$i = 4;
			}}}
	 else $prevskill = 0;
	 if($skillnumber < 24)
	 {
	 for($i=1; $i < 3; $i++){
		
		if( $_SESSION['Talents'][$skillnumber + $i]->name != ''){
			$nxtskill = $_SESSION['Talents'][$skillnumber + $i]->currentlvl;
			$i = 4;}}}
	 else $nxtskill = 0;

	$_SESSION['Talents'][$skillnumber]->changelvl(0,$prevskill,$kpleft,$kpentered,$nxtskill);
}
require_once 'totalkp.php';
//$kpentered = $_SESSION['Talents'][$skillnumber]->totalKP() + $kpentered;
//$kpleft = $kpleft - $_SESSION['Talents'][$skillnumber]->totalKP();
$_SESSION['kpentered'] = ALLTOTAL();
$_SESSION['kpleft'] = $_SESSION['ClassLevel']  - $_SESSION['kpentered'];

//$kpleft = $kpleft - $kpentered;
if($_SESSION['kpentered']  <= 9)
		$_SESSION['kpentered']  = 0 . $_SESSION['kpentered'] ;
if($_SESSION['kpleft'] <= 9)
		$_SESSION['kpleft'] = 0 . $_SESSION['kpleft'];
//. " " .
echo $_SESSION['kpentered'] . $_SESSION['kpleft'] . $_SESSION['Talents'][$skillnumber]->currentlvl;

?>	