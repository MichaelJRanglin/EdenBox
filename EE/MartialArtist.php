<?php
require_once 'skills.php';
//session_start();
//Warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (false false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
$class = 'ma';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Art of Boxing',20,0,0,0,0,false,'For each level, when equipped with a Cestus, Cestuss ATK & M-ATK +1%','images/ma/1.jpg',0);
$_SESSION['Talents'][2] = new skill(2,'Martial Art',20,0,0,0,0,true,'For each level, CRIT Rate +1%', 'images/ma/2.jpg',0);
$_SESSION['Talents'][3] = new skill(3,'God of War',5,0,2,10,0,false,'For each level, DMG from Charging Assault +3%','images/ma/3.jpg',0);
$_SESSION['Talents'][4] = new skill(4,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][5] = new skill(5,'Adjusted Pace',10,0,1,0,20,true,'For each level, EVA +1%','images/ma/5.jpg',0);
$_SESSION['Talents'][6] = new skill(6,'Defense Technique',1,0,3,5,25,false,'When using Defenders Strength, DEF & EVA bonuses +10%', 'images/ma/6.jpg',0);
$_SESSION['Talents'][7] = new skill(7,'',0,0,0,0,0,false,'','',2); 
$_SESSION['Talents'][8] = new skill(8,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][9] = new skill(9,'Physical Martial Art',20,0,0,0,0,true,'For each level, Max HP +1%','images/ma/9.jpg',0);
$_SESSION['Talents'][10] = new skill(10,'Charging Technique',1,0,2,10,0,false,'When using Charge, ATK & ATK SPD bonuses +10%','images/ma/10.jpg',0);
$_SESSION['Talents'][11] = new skill(11,'Silky Soft',20,0,0,0,0,true,'For each level, DEF +1%','images/ma/11.jpg',0);
$_SESSION['Talents'][12] = new skill(12,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][13] = new skill(13,'Strength Technique',1,0,3,10,20,false,'When using Vajra Roars, P-DMG Received reduced by an additional 20%, reflected DMG +20%','images/ma/13.jpg',0);
$_SESSION['Talents'][14] = new skill(14,'Aiki-Do',10,0,1,0,25,true,'For each level, CRIT DMG received -1%', 'images/ma/14.jpg',0);
$_SESSION['Talents'][15] = new skill(15,'One Mind',1,0,3,5,30,false,'When using Persistent Intent, ACC + EVA bonuses +20%, duration +2 sec','images/ma/15.jpg',0);
$_SESSION['Talents'][16] = new skill(16,'Controlled Breathing',1,0,1,0,35,false,'When using Energy Control, HP Regen + 20% each second, Slow effect -20%', 'images/ma/16.jpg',0);
$_SESSION['Talents'][17] = new skill(17,'Rock Hard',20,0,0,0,0,true,'For each level, CRIT DMG +2%','images/ma/17.jpg',0);
$_SESSION['Talents'][18] = new skill(18,'Strike Weakness',5,0,2,10,0,false,'For each level, DMG from Collapsing Blow +3%','images/ma/18.jpg',0);
$_SESSION['Talents'][19] = new skill(19,'Martial Art Mind Game',20,0,0,0,0,true,'For each level, ACC +2%','images/ma/19.jpg',0);
$_SESSION['Talents'][20] = new skill(20,'Fierce Power',5,0,3,15,15,false,'For each level, AGI +1%', 'images/ma/20.jpg',0);
$_SESSION['Talents'][21] = new skill(21,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][22] = new skill(22,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][23] = new skill(23,'Fighting Technique',10,0,1,0,30,true,'For each level, STR +1%','images/ma/23.jpg',0);
$_SESSION['Talents'][24] = new skill(24,'Power and Mind',5,0,3,5,35,false,'For each level, DMG from Spirit Scar +2%', 'images/ma/24.jpg',0);
?>