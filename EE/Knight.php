<?php
require_once 'skills.php';
//session_start();
//Warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (false false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
$class = 'knight';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Combat Knowledge',20,0,0,0,0,false,'For each level, STR +1%','images/knight/1.jpg',0);
$_SESSION['Talents'][2] = new skill(2,'Weight Training',20,0,0,0,0,true,'For each level, EVA Rate +1%', 'images/knight/2.jpg',0);
$_SESSION['Talents'][3] = new skill(3,'Classical Tactics',10,0,2,10,0,false,'For each level, Elegants duration +1 sec','images/knight/3.jpg',0);
$_SESSION['Talents'][4] = new skill(4,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][5] = new skill(5,'Practical Training',5,0,1,0,20,true,'For each level, ATK +2%','images/knight/5.jpg',0);
$_SESSION['Talents'][6] = new skill(6,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][7] = new skill(7,'Classy Finish',1,0,3,5,30,false,'For each level, Focus duration +1 sec', 'images/knight/7.jpg',0);
$_SESSION['Talents'][8] = new skill(8,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][9] = new skill(9,'Fencing',20,0,0,0,0,false,'For each level, CRIT Rate +1%','images/knight/9.jpg',0);
$_SESSION['Talents'][10] = new skill(10,'Chivalry',20,0,0,0,0,true,'For each level, Malice caused by attacks +2%','images/knight/10.jpg',0);
$_SESSION['Talents'][11] = new skill(11,'Battlefield Cyclones',1,0,2,10,0,false,'When using Judgement Storm, P-ATK DMG +20% every second, duration +2 sec','images/knight/11.jpg',0);
$_SESSION['Talents'][12] = new skill(12,'Thrust Training',10,0,1,0,15,true,'For each level, ACC +1%', 'images/knight/12.jpg',0);
$_SESSION['Talents'][13] = new skill(13,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][14] = new skill(14,'Silence',5,0,3,5,25,false,'For each level, DMG from Magic Blockade +3%', 'images/knight/14.jpg',0);
$_SESSION['Talents'][15] = new skill(15,'Armor Specialization',5,0,1,0,30,true,'For each level, all Physical Resistances +1%','images/knight/15.jpg',0);
$_SESSION['Talents'][16] = new skill(16,'Insight',1,0,3,5,35,false,'When using Fight Back, Shield BLK bonus +20%', 'images/knight/16.jpg',0);
$_SESSION['Talents'][17] = new skill(17,'Noble Knowledge',20,0,0,0,0,false,'For each level, Max HP +1%%','images/knight/17.jpg',0);
$_SESSION['Talents'][18] = new skill(18,'Military Art',20,0,0,0,0,true,'For each level, ATK SPD +1%', 'images/knight/18.jpg',0);
$_SESSION['Talents'][19] = new skill(19,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][20] = new skill(20,'Positioning',5,0,3,10,15,false,'For each level, DMG from Maelstrom +2%', 'images/knight/20.jpg',0);
$_SESSION['Talents'][21] = new skill(21,'Sediment',10,0,1,0,10,true,'For each level, Focus duration +1 sec','images/knight/21.jpg',0);
$_SESSION['Talents'][22] = new skill(22,'Loyalty',1,0,3,5,25,false,'When using Fearless, ACC bonus +20%', 'images/knight/22.jpg',0);
$_SESSION['Talents'][23] = new skill(23,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][24] = new skill(24,'Heroism',1,0,1,0,35,false,'When using Asylum, P-Healing bonus +20%, duration +5 sec', 'images/knight/24.jpg',0);
?>