<?php
require_once 'skills.php';
session_start();
$numb = $_GET['q'];
$sk = $_GET['sk'];
		
			

if($numb == 1)
{
if($_SESSION['Talents'][$sk]->prereq == 1){
	$req = "<br /><br /> REQUIREMENTS <br />" . $_SESSION['Talents'][$sk]->prereqkp . " KP Entered <br /><br />" . $_SESSION['Talents'][$sk]->kpUpgrade(); }
elseif($_SESSION['Talents'][$sk]->prereq == 2){
		for($i = 1; $i < 5 ; $i++){
	if($_SESSION['Talents'][$sk - $i]->name != ''){
			$answer = $_SESSION['Talents'][$sk - $i]->name;
			$i = 5;}}

	$req = "<br /><br /> REQUIREMENTS <br />" . "Level " . $_SESSION['Talents'][$sk]->prereqlvl . " " . $answer . "<br /><br />" . $_SESSION['Talents'][$sk]->kpUpgrade(); }
		elseif($_SESSION['Talents'][$sk]->prereq == 3){
		for($i = 1; $i < 5 ; $i++){
	if($_SESSION['Talents'][$sk - $i]->name != ''){
			$answer = $_SESSION['Talents'][$sk - $i]->name;
			$i = 5;}}

	$req = "<br /><br /> REQUIREMENTS <br />" . $_SESSION['Talents'][$sk]->prereqkp . " KP Entered <br /> Level " . $_SESSION['Talents'][$sk]->prereqlvl . " " . $answer . "<br /><br />" . $_SESSION['Talents'][$sk]->kpUpgrade(); }
else $req = "<br /><br />" . $_SESSION['Talents'][$sk]->kpUpgrade();

echo "<div class='boss'>" . $_SESSION['Talents'][$sk]->name . "<br /> Max level " . $_SESSION['Talents'][$sk]->maxlvl . "<br />" . $_SESSION['Talents'][$sk]->description . $req . "</div>"; 
}
if($numb == 2)
echo '';

?>