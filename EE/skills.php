<?php

class skill
{
var $urrent = 0;
var $name;
var $maxlvl;
var $KP;
var $currentlvl;
var $prereq; //if it has a prereq to get 0 = none, 1 = kp, 2 = skill , 3 kp + skill
var $prereqlvl; // level of skill prereq skill to get it
//var $prereqskilllvl; // level of skill prereq skill to get it $this->prereqlvl = $prlvl;
var $prereqkp; // amount of kp spent
var $picdis; // 0 = skill , 1 = arrow , 2 = blank
var $description;
var $picurl;
var $SKnumber;
var $req; // (if the skill  is a prereq tosomething ) )  true/false
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (true false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
function __construct($skillnumber, $name, $m, $cl, $pr, $prlvl, $prkp,$req,$des, $picurl, $picdis)
{
$this->SKnumber = $skillnumber;
$this->maxlvl = $m;
$this->currentlvl = $cl;
$this->prereq =  $pr;
$this->prereqlvl = $prlvl;
$this->prereqkp = $prkp;
$this->description = $des;
$this->name = $name;
$this->picurl = $picurl;
$this->picdis= $picdis;
$this->req = $req;
}
function checkPrereq1() // use this for vert spacer next to skill pic
{
	if($this->prereq == 2 || $this->prereq == 3) //for kp and/or skill
		return "<img src='images/arrow.jpg' class='Skillimg2'>"; // url of arrow arrow
		if($this->prereq == 0)
		return ''; // nothing
		else 
		return '';
			
}
function checkPrereq2() // use for button side of vert spacer
{
	if($this->name == '')
		return '';
	else
	 return "<form class='Controll'><input class='ConButton' type='button' value='+' onclick='Changelvl(1," . $this->SKnumber . ")' /><div class ='skillvl' id='" . $this->SKnumber . "'>" . $this->currentlvl . "</div><input class='ConButton' type='button' value='-' onclick='Changelvl(0," . $this->SKnumber . ")' /></form>"; // button html code
}
	
function Description()
	{
	return $this->description;
	}
	// This function tells what to display for each skill
function displayPic()
{
	if($this->picdis == 0)
		return "<img src='" . $this->picurl . "' class='Skillimg' onmouseover='DPskill(" . $this->SKnumber . ", 1)' onmouseout='DPskill(" . $this->SKnumber . ", 2)' />";
//'timee = setTimeout(function(){ShowSkill(" . $this->SKnumber . ", 1)},200);'	
	if($this->picdis == 1) 
		return "<img src='images/arrow2.jpg' class='Skillimg'>";
		else
			return '';
		}
	// changes current lvl of skill 0 decreases, 1 increases
	// $skillpre is prereq skill level
	//$kpin amount of kp remaining
	//$kpen amount entered
	//$req2 is the current level of the skill it is a prerequiste to. 
function changelvl($val, $skillpre, $kpin, $kpen, $req2)
	{
	if($val == 1){
		if($this->currentlvl < $this->maxlvl){
	
		if($this->prereq == 0){ // no requirements
			if($this->currentlvl < 5 && $kpin > 0)
						$this->currentlvl =	 $this->currentlvl + 1;
			elseif($this->currentlvl < 16 && $this->currentlvl > 4 && $kpin > 1)
						$this->currentlvl =	 $this->currentlvl + 1;
			elseif($this->currentlvl < 20 && $this->currentlvl > 14 && $kpin > 2)
						$this->currentlvl =	$this->currentlvl + 1;
								}
	
		elseif($this->prereq == 1){ // KP requirement
			if($kpen >= $this->prereqkp){
			
		
				if($this->currentlvl < 6 && $kpin > 0)
							$this->currentlvl = $this->currentlvl + 1;
				elseif($this->currentlvl < 16 && $this->currentlvl > 4  && $kpin > 1)
							$this->currentlvl = $this->currentlvl + 1;
				elseif($this->currentlvl < 20 && $this->currentlvl > 14 && $kpin > 2)
							$this->currentlvl = $this->currentlvl + 1;
									}}
		elseif($this->prereq == 2){ // skill lvl requirement
			if($skillpre >= $this->prereqlvl){
			
		
				if($this->currentlvl < 6 && $kpin > 0)
							$this->currentlvl = $this->currentlvl + 1;
				elseif($this->currentlvl < 16 && $this->currentlvl > 4 && $kpin > 1)
							$this->currentlvl = $this->currentlvl + 1;
				elseif($this->currentlvl < 20 && $this->currentlvl > 14 && $kpin > 2)
							$this->currentlvl = $this->currentlvl + 1;
									}}

		elseif($this->prereq == 3){ // skill lvl requirement & kp requirement
			if($skillpre >= $this->prereqlvl && $kpen >= $this->prereqkp){
			
		
				if($this->currentlvl < 6 && $kpin > 0)
							$this->currentlvl = $this->currentlvl + 1;
				elseif($this->currentlvl < 16 && $this->currentlvl > 4 && $kpin > 1)
							$this->currentlvl = $this->currentlvl + 1;
				elseif($this->currentlvl < 20 && $this->currentlvl > 14 && $kpin > 2)
							$this->currentlvl = $this->currentlvl + 1;
								}}	
			}
			else
						return $this->currentlvl;
						}
				
		if($val == 0){
		if($this->req == true){
			if($this->currentlvl > 0 && $req2 == 0)	
						$this->currentlvl = $this->currentlvl - 1;
								}
		else {
					if($this->currentlvl > 0)
						$this->currentlvl = $this->currentlvl - 1;
						}}
	return $this->currentlvl;

		
		}

		function totalKP()
		{
		
		if($this->currentlvl < 6 && $this->currentlvl >= 0)
			$this->urrent = $this->currentlvl;
		elseif($this->currentlvl  < 16 && $this->currentlvl > 5)
			$this->urrent = (2*($this->currentlvl - 5)) + (5);		
		elseif(($this->currentlvl > 15)&& ($this->currentlvl <= 20))
			$this->urrent = (3*($this->currentlvl - 15))+ (25);
		
		
	
		if($this->urrent <= 9)
		$this->urrent = 0 . $this->urrent;
		return $this->urrent;
		}
	
	function setCurrentlevel($level){
	$this->currentlvl = $level;
	}
	
	function kpUpgrade(){
	if($this->currentlvl < 5)
		return "Increasing this skill a level will cost 1 Knowledge Point(s)";
		elseif($this->currentlvl < 15)
		return "Increasing this skill a level will cost 2 Knowledge Point(s)";
		elseif($this->currentlvl < 20)
		return "Increasing this skill a level will cost 3 Knowledge Point(s)";
		else
		return "";
		
	}
	//previous skill  name
function skillDP($name)
{


if($this->prereq == 1){
	$req = "<br /><br /> REQUIREMENTS <br />" . $this->prereqkp . " KP Entered <br /><br />" . $this->kpUpgrade(); }


elseif($this->prereq == 2){
		
	$req = "<br /><br /> REQUIREMENTS <br />" . "Level " . $this->prereqlvl . " " . $name . "<br /><br />" . $this->kpUpgrade(); }	

elseif($this->prereq == 3){

	$req = "<br /><br /> REQUIREMENTS <br />" . $this->prereqkp . " KP Entered <br /> Level " . $this->prereqlvl . " " . $name . "<br /><br />" . $this->kpUpgrade(); }
else $req = "<br /><br />" . $this->kpUpgrade();

return "<div class='boss'>" . $this->name . "<br /> Max level " . $this->maxlvl . "<br />" . $this->description . $req . "</div>"; 

//return "<div class='boss'>I got this<br /> words words words <br /></div>";
}
	}
	
		?>
