<?php
require_once 'skills.php';
//session_start();
//Warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (false false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
$class ='hunter';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Biology',20,0,0,0,0,true,'For each level, CRIT Rate +1%','images/' . $class . '/1.jpg',0);
$_SESSION['Talents'][2] = new skill(2,'Potent Anesthesia',5,0,2,10,0,false,'For Each Level, DMG from Dazing Pierce +3%','images/' . $class . '/2.jpg',0);
$_SESSION['Talents'][3] = new skill(3,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][4] = new skill(4,'Crossbow String',5,0,1,0,15,true,'For each level, STR +2%','images/' . $class . '/4.jpg',0);
$_SESSION['Talents'][5] = new skill(5,'Enhanced Fletching',5,0,3,5,20,false,'For each levl, DMG from Chain Shot +2%','images/' . $class . '/5.jpg',0);
$_SESSION['Talents'][6] = new skill(6,'Wild Nature',10,0,1,0,25,true,'For each level, MAX HP +1%','images/' . $class . '/6.jpg',0);
$_SESSION['Talents'][7] = new skill(7,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][8] = new skill(8,'Sharpened',5,0,3,5,35,false,'For each level, DMG from Painful Wound +2%','images/' . $class . '/8.jpg',0);
$_SESSION['Talents'][9] = new skill(9,'Stargazer',20,0,0,0,0,true,'For each level, LUK +1%','images/' . $class . '/9.jpg',0);
$_SESSION['Talents'][10] = new skill(10,'Enhanced BowString',3,0,2,10,0,false,'For each level, piecing wound duration +1 sec','images/' . $class . '/10.jpg',0);
$_SESSION['Talents'][11] = new skill(11,'Stealth Knowledge',20,0,0,0,0,true,'For each level, All EVA +1%','images/' . $class . '/11.jpg',0);
$_SESSION['Talents'][12] = new skill(12,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][13] = new skill(13,'Enhanced Flash',5,0,3,10,20,false,'For each level, Flash Bombs duration +2 sec','images/' . $class . '/13.jpg',0);
$_SESSION['Talents'][14] = new skill(14,'Beastial Breath',5,0,1,0,25,false,'For each level, malice caused by attacks -2%','images/' . $class . '/14.jpg',0);
$_SESSION['Talents'][15] = new skill(15,'Veterenary Science',5,0,1,0,30,true,'For each level, healing effect of Beast Recovering +3%','images/' . $class . '/15.jpg',0);
$_SESSION['Talents'][16] = new skill(16,'Beastial Wrath',1,0,3,5,35,false,'When using Wild Stimulation, Summon Tigers ACC and CRIT rate +20%','images/' . $class . '/16.jpg',0);
$_SESSION['Talents'][17] = new skill(17,'Master Archery',20,0,0,0,0,false,'For each level, when equipped with a bow, bow ATK and M-ATK +1%','images/' . $class . '/17.jpg',0);
$_SESSION['Talents'][18] = new skill(18,'Poison Arrow Science',20,0,0,0,0,false,'For each level, Crit DMG +2%','images/' . $class . '/18.jpg',0);
$_SESSION['Talents'][19] = new skill(19,'Hunting Knowledge',20,0,0,0,0,false,'For each level, ACC +2%','images/' . $class . '/19.jpg',0);
$_SESSION['Talents'][20] = new skill(20,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][21] = new skill(21,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][22] = new skill(22,'Nature Spirit',5,0,1,0,25,false,'For each level, Max MP +2%','images/' . $class . '/22.jpg',0);
$_SESSION['Talents'][23] = new skill(23,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][24] = new skill(24,'Deadly Toxin',1,0,1,0,35,false,'When using Poison Arrow Rain, Nature DMG +20% per second and Skill DMG +10%','images/' . $class .'/24.jpg',0);
?>