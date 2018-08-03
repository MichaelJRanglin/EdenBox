<?php
require_once 'skills.php';
//session_start();
//Warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (false false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
$class = 'engineer';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Gun Training',20,0,0,0,0,false,'For each level, When equipped with an Artillery Gun, Artillery Gun ATK and M-ATK +1%','images/' . $class . '/1.jpg',0);
$_SESSION['Talents'][2] = new skill(2,'Forging Knowledge',20,0,0,0,0,false,'For each level, Physical damage resistances +1%','images/' . $class . '/2.jpg',0);
$_SESSION['Talents'][3] = new skill(3,'Alloy Knowledge',20,0,0,0,0,true,'For each level, DEF +1%','images/' . $class . '/3.jpg',0);
$_SESSION['Talents'][4] = new skill(4,'Improved Armor',5,0,3,10,15,false,'For each level CRIT DMG recieved -2%','images/' . $class . '/4.jpg',0);
$_SESSION['Talents'][5] = new skill(5,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][6] = new skill(6,'Improved Output System',6,0,1,0,25,true,'For each level, STR +2%','images/' . $class . '/6.jpg',0);
$_SESSION['Talents'][7] = new skill(7,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][8] = new skill(8,'Condensed Oil',1,0,3,5,35,false,'When using Oil Bomb, P-ATK DMG +10% per second and Skill DMG +10%','images/' . $class . '/8.jpg',0);
$_SESSION['Talents'][9] = new skill(9,'Smelter',20,0,0,0,0,false,'For each level, Max HP +1%','images/' . $class . '/9.jpg',0);
$_SESSION['Talents'][10] = new skill(10,'Improved Firing System',6,0,0,0,0,true,'For each level,ATK SPD +2%','images/' . $class . '/10.jpg',0);
$_SESSION['Talents'][11] = new skill(11,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][12] = new skill(12,'Modified Artillery',5,0,3,5,15,true,'For each level, DMG by Heavy Artillery +3%','images/' . $class . '/12.jpg',0);
$_SESSION['Talents'][13] = new skill(13,'Signal Research',5,0,3,5,20,false,'For each level, Brain Drains duration +2 sec','images/' . $class . '/13.jpg',0);
$_SESSION['Talents'][14] = new skill(14,'Chemical Engineering',5,0,1,0,25,false,'For each level, DMG by Slime Explosive +2%','images/' . $class . '/14.jpg',0);
$_SESSION['Talents'][15] = new skill(15,'Energetics',5,0,1,0,30,true,'For each level, MP requirement for skills -2%','images/' . $class . '/15.jpg',0);
$_SESSION['Talents'][16] = new skill(16,'Material Research',5,0,3,5,35,false,'For each level, Healing effect of Armor Repair +3%','images/' . $class . '/16.jpg',0);
$_SESSION['Talents'][17] = new skill(17,'Wave Mechanics',20,0,0,0,0,false,'For each level, CRIT Rate and M-CRIT Rate +1%','images/' . $class . '/17.jpg',0);
$_SESSION['Talents'][18] = new skill(18,'Electromagnetism',20,0,0,0,0,false,'For each level, CRIT DMG and M-CRIT DMG +2%','images/' . $class . '/18.jpg',0);
$_SESSION['Talents'][19] = new skill(19,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][20] = new skill(20,'Improved Radar',6,0,1,0,15,true,'For each level, ACC +2%','images/' . $class . '/20.jpg',0);
$_SESSION['Talents'][21] = new skill(21,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][22] = new skill(22,'Gunpowder Research',5,0,3,5,25,false,'For each level, DMG by Black Explosive +2%','images/' . $class . '/22.jpg',0);
$_SESSION['Talents'][23] = new skill(23,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][24] = new skill(24,'Improved motor',1,0,1,0,35,false,'For each level, when using Missle Destruction, Summon +5 Mini Robot','images/' . $class . '/24.jpg',0);
?>