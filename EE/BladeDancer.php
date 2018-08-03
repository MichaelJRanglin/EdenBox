<?php
require_once 'skills.php';
//session_start();
//Warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (false false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
$class = 'bd';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Advanced Spin',20,0,0,0,0,false,'For each level, EVA +1%','images/' . $class . '/1.jpg',0);
$_SESSION['Talents'][2] = new skill(2,'Advanced Steps',20,0,0,0,0,true,'For each level, CRIT Rate +1%','images/' . $class . '/2.jpg',0);
$_SESSION['Talents'][3] = new skill(3,'Ballet',10,0,2,10,0,false,'For each level, ACC +2%','images/' . $class . '/3.jpg',0);
$_SESSION['Talents'][4] = new skill(4,'Modern Dance',5,0,1,0,15,true,'For each level, Max MP +2%','images/' . $class . '/4.jpg',0);
$_SESSION['Talents'][5] = new skill(5,'Samba',1,0,3,5,20,false,'When using Magic Samba, M-ATK DMG received -20%, Reflected DMG +20%','images/' . $class . '/5.jpg',0);
$_SESSION['Talents'][6] = new skill(6,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][7] = new skill(7,'Radiant Dance',1,0,1,0,30,false,'When using Flashy Charm, ACC & EVA penalties to enemies increased by an additional 20%, duration +2 sec','images/' . $class . '/7.jpg',0);
$_SESSION['Talents'][8] = new skill(8,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][9] = new skill(9,'Sword Dance',20,0,0,0,0,false,'For each level, CRIT DMG +2%','images/' . $class . '/9.jpg',0);
$_SESSION['Talents'][10] = new skill(10,'Yoga',20,0,0,0,0,true,'For each level, AGI +1%','images/' . $class . '/10.jpg',0);
$_SESSION['Talents'][11] = new skill(11,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][12] = new skill(12,'Drum Dance',10,0,3,10,15,true,'For each level, Song of Patiences duration +1 sec.','images/' . $class . '/12.jpg',0);
$_SESSION['Talents'][13] = new skill(13,'Makeup',1,0,3,5,20,false,'When using Seduce, increases the bonus and may also increase the damage the enemy suffers per second.','images/' . $class . '/13.jpg',0);
$_SESSION['Talents'][14] = new skill(14,'Rising Star',10,0,1,0,25,true,'For each level, LCK +1%','images/' . $class . '/14.jpg',0);
$_SESSION['Talents'][15] = new skill(15,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][16] = new skill(16,'Inspirational Dance',1,0,3,5,35,false,'When using Dance of War, ATK SPD & CRIT RATE bonuses +20%','images/' . $class . '/16.jpg',0);
$_SESSION['Talents'][17] = new skill(17,'Ritual Dance',20,0,0,0,0,true,'For each level, ATK SPD +1%','images/' . $class . '/17.jpg',0);
$_SESSION['Talents'][18] = new skill(18,'Stage Training',5,0,2,10,0,false,'For each level, DMG by Superstar +3%','images/' . $class . '/18.jpg',0);
$_SESSION['Talents'][19] = new skill(19,'Art of the Sword',20,0,0,0,0,true,'For each level, when equipped with a sword, 1H sword ATK & M-ATK +1%','images/' . $class . '/19.jpg',0);
$_SESSION['Talents'][20] = new skill(20,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][21] = new skill(21,'Swing Dance',5,0,3,10,20,false,'For each level, DMG by Dancing Blade +2%','images/' . $class . '/21.jpg',0);
$_SESSION['Talents'][22] = new skill(22,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][23] = new skill(23,'Dance of Worship',5,0,1,0,30,true,'For each level, DMG by Flame Bird Dance +2%','images/' . $class . '/23.jpg',0);
$_SESSION['Talents'][24] = new skill(24,'Tango',1,0,3,5,35,false,'When using Slow Dance, HP Regen +20% each second','images/' . $class . '/24.jpg',0);
?>