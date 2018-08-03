<?php
require_once 'skills.php';
//session_start();
//Warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (false false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
$class ='mage';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Staff Master',20,0,0,0,0,true,'For each level, when equipped with a staff, staffs ATK & M-ATK +1%','images/' . $class . '/1.png',0);
$_SESSION['Talents'][2] = new skill(2,'Lightning Element Master',5,0,2,10,0,false,'For each level, DMG from Lightning Bolt +3%','images/' . $class . '/2.png',0);
$_SESSION['Talents'][3] = new skill(3,'Space Magic',20,0,0,0,0,false,'For each level, EVA +1%','images/' . $class . '/3.png',0);
$_SESSION['Talents'][4] = new skill(4,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][5] = new skill(5,'Shadow Magic',10,0,1,0,20,false,'For each level, Malice caused by attacks -2%','images/' . $class . '/5.png',0);
$_SESSION['Talents'][6] = new skill(6,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][7] = new skill(7,'Mediation',5,0,1,0,30,true,'For each level, MP requirement for skills -2%','images/' . $class . '/7.png',0);
$_SESSION['Talents'][8] = new skill(8,'Elemental Field',1,0,3,5,35,false,'When using Fog, MP Regen +20% per second','images/' . $class . '/8.png',0);
$_SESSION['Talents'][9] = new skill(9,'Elemental Mechanics',20,0,0,0,0,false,'For each level, M-CRIT DMG +2%','images/' . $class . '/9.png',0);
$_SESSION['Talents'][10] = new skill(10,'Tongue Twister',20,0,0,0,0,true,'For each level, Cast SPD +1%','images/' . $class . '/10.png',0);
$_SESSION['Talents'][11] = new skill(11,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][12] = new skill(12,'Ice Elemental Master',5,0,3,10,15,true,'For each level, DMG from Snow Storm +2%','images/' . $class . '/12.png',0);
$_SESSION['Talents'][13] = new skill(13,'Freezing Breath',1,0,3,5,20,false,'When using Ice Shield, DEF bonus +20% and Move SPD decrease rate 20%','images/' . $class . '/13.png',0);
$_SESSION['Talents'][14] = new skill(14,'Unified Will',10,0,1,0,25,true,'For each level, ACC +2%','images/' . $class . '/14.png',0);
$_SESSION['Talents'][15] = new skill(15,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][16] = new skill(16,'Magic Boost',1,0,3,5,35,false,'When using Extreme Magic, MGC bonus +10% & duration +2 sec.','images/' . $class . '/16.png',0);
$_SESSION['Talents'][17] = new skill(17,'Black Magic',20,0,0,0,0,true,'For each level, M-CRIT rate +1%','images/' . $class . '/17.png',0);
$_SESSION['Talents'][18] = new skill(18,'Fire Elemental Master',10,0,2,10,0,false,'For each level, Hell Fires duration +1%','images/' . $class . '/18.png',0);
$_SESSION['Talents'][19] = new skill(19,'Gift of Magic',20,0,0,0,0,true,'For each level, all Elemental resistances +1%','images/' . $class . '/19.png',0);
$_SESSION['Talents'][20] = new skill(20,'',0,0,0,0,0,false,'','',1	);
$_SESSION['Talents'][21] = new skill(21,'Reversed Elements',1,0,3,10,20,true,'When using Resistance Collapse, Fire, Ice, and Lightning penalties +20%','images/' . $class . '/21.png',0);
$_SESSION['Talents'][22] = new skill(22,'Cohesive Elements',1,0,3,1,25,false,'When using Element Guardian, Fire, Ice and Lightning resistance bonuses +20%, and all Elemental DMG +20%','images/' . $class . '/22.png',0);
$_SESSION['Talents'][23] = new skill(23,'Fire Element Expert',5,0,1,0,30,false,'For each level, DMG from Karyogamy +2%','images/' . $class . '/23.png',0);
$_SESSION['Talents'][24] = new skill(24,'',0,0,0,0,0,false,'','',2);
?>