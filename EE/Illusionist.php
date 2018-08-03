<?php
require_once 'skills.php';
//session_start();
//Warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (false false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
$class = 'illu';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Pyrotechnics',20,0,0,0,0,false,'For each level, M-CRIT Rate +1%','images/' . $class . '/1.png',0);
$_SESSION['Talents'][2] = new skill(2,'Psychology',10,0,0,0,0,true,'For each level, INT +1%','images/' . $class . '/2.png',0);
$_SESSION['Talents'][3] = new skill(3,'Cold Front',5,0,2,5,0,false,'For each level, DMG from Deadly Icicle +2%','images/' . $class . '/3.png',0);
$_SESSION['Talents'][4] = new skill(4,'Physical Domination',5,0,1,0,15,false,'For each level, Max HP +2%','images/' . $class . '/4.png',0);
$_SESSION['Talents'][5] = new skill(5,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][6] = new skill(6,'Transformation',5,0,1,0,25,false,'For each level, Malice caused by attacks -2%','images/' . $class . '/6.png',0);
$_SESSION['Talents'][7] = new skill(7,'Compressed Gravity',5,0,1,0,30,false,'For each level, DMG from Aerolite +2%','images/' . $class . '/7.png',0);
$_SESSION['Talents'][8] = new skill(8,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][9] = new skill(9,'Avid Reader',20,0,0,0,0,false,'For each level, when equipped with a Grimoire, Grimoires ATK & M-ATK +1%','images/' . $class . '/9.png',0);
$_SESSION['Talents'][10] = new skill(10,'Legerdemain',20,0,0,0,0,true,'For each level, Cast SPD +1%','images/' . $class . '/10.png',0);
$_SESSION['Talents'][11] = new skill(11,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][12] = new skill(12,'Latent Energy',1,0,3,10,15,false,'When using Stimulation, ATK SPD & Cast SPD bonuses +10%','images/' . $class . '/12.png',0);
$_SESSION['Talents'][13] = new skill(13,'Mind Domination',10,0,1,0,20,true,'For each level, Mind Controls duration +1 sec.','images/' . $class . '/13.png',0);
$_SESSION['Talents'][14] = new skill(14,'Expanded Conciousness',1,0,3,5,25,false,'When using Psychedelic, M-CRIT Rate bonus +20%, duration +5 sec','images/' . $class . '/14.png',0);
$_SESSION['Talents'][15] = new skill(15,'Spiritual Domination',10,0,1,0,30,true,'For each level, Max MP +1%','images/' . $class . '/15.png',0);
$_SESSION['Talents'][16] = new skill(16,'Magic Backlash',1,0,3,5,35,false,'When using Ineffective Magic, M-ATK DMG received -20%, Reflected DMG +20%','images/' . $class . '/16.png',0);
$_SESSION['Talents'][17] = new skill(17,'Showmanship',20,0,0,0,0,false,'For each level, M-CRIT DMG +2%','images/' . $class . '/17.png',0);
$_SESSION['Talents'][18] = new skill(18,'High Level Illusion',20,0,0,0,0,false,'For each level, EVA +1%','images/' . $class . '/18.png',0);
$_SESSION['Talents'][19] = new skill(19,'Read Minds',20,0,0,0,0,true,'For each level, ACC +2%','images/' . $class . '/19.png',0);
$_SESSION['Talents'][20] = new skill(20,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][21] = new skill(21,'Hypnotism',1,0,3,10,20,false,'When using Hypnotic Eye, P-ATK DMG bonus +20% & duration +2 sec.','images/' . $class . '/21.png',0);
$_SESSION['Talents'][22] = new skill(22,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][23] = new skill(23,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][24] = new skill(24,'Awakening',1,0,1,0,35,false,'When using Mind Surge, MP Regen +20% per second, duration +2 sec.','images/' . $class . '/24.png',0);
?>