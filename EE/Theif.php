<?php
require_once 'skills.php';
//session_start();
//Warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (false false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
$class = 'thief';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Art of Deception',20,0,0,0,0,false,'For each level, EVA +1%','images/thief/1.jpg',0);
$_SESSION['Talents'][2] = new skill(2,'Dagger Fighter',20,0,0,0,0,true,'For each level, when equipped with a Dagger, Daggers ATK & M-ATK +1%', 'images/thief/2.jpg',0);
$_SESSION['Talents'][3] = new skill(3,'Deadly Intention',5,0,2,10,0,false,'For each level, DMG from Deadly Containment +3%','images/thief/3.jpg',0);
$_SESSION['Talents'][4] = new skill(4,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][5] = new skill(5,'Hand of Illusions',10,0,1,0,20,true,'For each level, AGI +1%','images/thief/5.jpg',0);
$_SESSION['Talents'][6] = new skill(6,'Fatal Attack',5,0,3,5,25,false,'For each level, DMG from Swift Attack +2%', 'images/thief/6.jpg',0);
$_SESSION['Talents'][7] = new skill(7,'',0,0,0,0,0,false,'','',2); 
$_SESSION['Talents'][8] = new skill(8,'Residual Image',1,0,1,0,35,false,'When using blend, EVA bonus +20%, duration +5 sec','images/thief/8.jpg',0);
$_SESSION['Talents'][9] = new skill(9,'Art of Theft',20,0,0,0,0,false,'For each level, ATK SPD +1%','images/thief/9.jpg',0);
$_SESSION['Talents'][10] = new skill(10,'Art of Throwing',20,0,0,0,0,false,'For each level, ACC +2%','images/thief/10.jpg',0);
$_SESSION['Talents'][11] = new skill(11,'Art of Insight',20,0,0,0,0,true,'For each level, CRIT Rate +1%','images/thief/11.jpg',0);
$_SESSION['Talents'][12] = new skill(12,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][13] = new skill(13,'Relentless Attack',5,0,3,10,20,false,'For each level, DMG from Ambush +3%','images/thief/13.jpg',0);
$_SESSION['Talents'][14] = new skill(14,'Opportunist',10,0,1,0,25,true,'For each level, LCK +1%', 'images/thief/14.jpg',0);
$_SESSION['Talents'][15] = new skill(15,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][16] = new skill(16,'Cold Blooded',1,0,3,5,35,false,'WWhen using Heartless, ATK bonus +20%, duration +2 sec', 'images/thief/16.jpg',0);
$_SESSION['Talents'][17] = new skill(17,'Art of Assassination',20,0,0,0,0,true,'For each level, CRIT DMG +2%','images/thief/17.jpg',0);
$_SESSION['Talents'][18] = new skill(18,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][19] = new skill(19,'Seize Opportunity',1,0,2,10,0,false,'When using Sneak, CRIT Rate bonus +20% & ATK +5%','images/thief/19.jpg',0);
$_SESSION['Talents'][20] = new skill(20,'Camouflage',10,0,1,0,15,true,'For each level, Malice caused by attacks -1%', 'images/thief/20.jpg',0);
$_SESSION['Talents'][21] = new skill(21,'Hidden Breath',1,0,3,5,20,false,'When using Hidden Force, CRIT Rate bonus +20%','images/thief/21.jpg',0);
$_SESSION['Talents'][22] = new skill(22,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][23] = new skill(23,'Killing Spree',5,0,1,0,30,true,'For each level, DMG by Cruel Slashes +2%','images/thief/23.jpg',0);
$_SESSION['Talents'][24] = new skill(24,'Shadowless',1,0,3,5,35,false,'When using Gallop, Move SPD & AGI bonuses +20%', 'images/thief/24.jpg',0);
?>