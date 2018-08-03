<?php
require_once 'skills.php';
//session_start();
//Warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (false false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
$class = 'warlock';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Devil Contract',20,0,0,0,0,false,'For each level, Cast SPD +1%','images/' . $class . '/1.jpg',0);
$_SESSION['Talents'][2] = new skill(2,'Dark Magic',20,0,0,0,0,true,'For each level, M-Crit Rate +1%','images/' . $class . '/2.jpg',0);
$_SESSION['Talents'][3] = new skill(3,'Prolonged Nightmare',5,0,2,10,0,false,'For each level, DMG from Nightmare Attack +3%','images/' . $class . '/3.jpg',0);
$_SESSION['Talents'][4] = new skill(4,'Heretic Controll',10,0,1,0,15,false,'For each level, MP requirement for skills -1%','images/' . $class . '/4.jpg',0);
$_SESSION['Talents'][5] = new skill(5,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][6] = new skill(6,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][7] = new skill(7,'Breath of Lost Souls',1,0,1,0,30,false,'When Using Death Threats, healing effect penalty +20%, duration +2 sec','images/' . $class . '/7.jpg',0);
$_SESSION['Talents'][8] = new skill(8,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][9] = new skill(9,'Cursed Aura',20,0,0,0,0,false,'For each level, M-Crit DMG +2%','images/' . $class . '/9.jpg',0);
$_SESSION['Talents'][10] = new skill(10,'Blood Feast',20,0,0,0,0,true,'For each level, Max HP +1%','images/' . $class . '/10.jpg',0);
$_SESSION['Talents'][11] = new skill(11,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][12] = new skill(12,'Blood Contract',1,0,3,10,15,true,'When using Blood Converter, HP Regen +20% per second, duration +2 sec','images/' . $class . '/12.jpg',0);
$_SESSION['Talents'][13] = new skill(13,'Evil Embodiment',1,0,3,1,20,false,'When using Tribute, M-Crit Rate bonus + 20%, DMG recieved -20%','images/' . $class . '/13.jpg',0);
$_SESSION['Talents'][14] = new skill(14,'Demonic Controll',5,0,1,0,25,false,'For each level, Malice caused by attacks -2%','images/' . $class . '/14.jpg',0);
$_SESSION['Talents'][15] = new skill(15,'Catastrophe',10,0,1,0,30,true,'For each level, Plague Carriers duration +1 sec','images/' . $class . '/15.jpg',0);
$_SESSION['Talents'][16] = new skill(16,'Poisonous Parasites',1,0,3,5,35,false,'When using Dark Parasites, Dark DMG per second +10%','images/' . $class . '/16.jpg',0);
$_SESSION['Talents'][17] = new skill(17,'Life and Death',20,0,0,0,0,true,'For each level, INT +1%','images/' . $class . '/17.jpg',0);
$_SESSION['Talents'][18] = new skill(18,'Cohesive Shadow',5,0,2,10,0,false,'For each level, DMG from Shadow Arrow +3%','images/' . $class . '/18.jpg',0);
$_SESSION['Talents'][19] = new skill(19,'Spirit Blink',20,0,0,0,0,false,'For each level, EVA +1%','images/' . $class . '/19.jpg',0);
$_SESSION['Talents'][20] = new skill(20,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][21] = new skill(21,'Spiritual Source',10,0,1,0,20,false,'For each level, Max MP +2%','images/' . $class . '/21.jpg',0);
$_SESSION['Talents'][22] = new skill(22,'Mystical Gaze',5,0,1,0,25,true,'For each level, ACC +2%','images/' . $class . '/22.jpg',0);
$_SESSION['Talents'][23] = new skill(23,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][24] = new skill(24,'Magic Spree',1,0,3,5,35,false,'When using Wild Shout, MGC bonus +10%, duration +2 sec','images/' . $class . '/24.jpg',0);
?>