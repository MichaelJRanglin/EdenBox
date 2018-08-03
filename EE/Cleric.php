<?php
require_once 'skills.php';
//session_start();
//Warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (false false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
$class = 'cleric';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Religious Knowledge',20,0,0,0,0,false,'For each level, WIS +1%','images/' . $class . '/1.jpg',0);
$_SESSION['Talents'][2] = new skill(2,'Evangelical Theology',20,0,0,0,0,false,'For each level, G-Healing +1%','images/' . $class . '/2.jpg',0);
$_SESSION['Talents'][3] = new skill(3,'Shield Proficiency',20,0,0,0,0,true,'For each level, Shield DEF +2%','images/' . $class . '/3.jpg',0);
$_SESSION['Talents'][4] = new skill(4,'Hersey Punishment',5,0,3,10,15,false,'For each level, DMG by Holy Smite +2%','images/' . $class . '/4.jpg',0);
$_SESSION['Talents'][5] = new skill(5,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][6] = new skill(6,'Sacred Duty',10,0,1,0,25,true,'For each level, Malice caused by attacks -2%','images/' . $class . '/6.jpg',0);
$_SESSION['Talents'][7] = new skill(7,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][8] = new skill(8,'Condemnation',1,0,3,5,35,false,'When using Hammer of Discipline, Light DMG per second and EVA penalty +10%','images/' . $class . '/8.jpg',0);
$_SESSION['Talents'][9] = new skill(9,'Hymnal',20,0,0,0,0,false,'For each level, M-Crit DMG +2%','images/' . $class . '/9.jpg',0);
$_SESSION['Talents'][10] = new skill(10,'Zealot Doctrine',20,0,0,0,0,true,'For each level, Cast SPD +1%','images/' . $class . '/10.jpg',0);
$_SESSION['Talents'][11] = new skill(11,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][12] = new skill(12,'Divine Blessing',1,0,3,10,15,false,'When using Grace of Wisdom, INT and WIS bonuses +20%','images/' . $class . '/12.jpg',0);
$_SESSION['Talents'][13] = new skill(13,'Sacred Breath',10,0,1,0,20,true,'For each level, Purifying Winds duration +1 sec','images/' . $class . '/13.jpg',0);
$_SESSION['Talents'][14] = new skill(14,'Enlightenment',5,0,3,5,25,false,'For each level, healing effect of Healing Radiance +3%','images/' . $class . '/14.jpg',0);
$_SESSION['Talents'][15] = new skill(15,'Healing Hands',5,0,1,0,30,true,'or each level, healing effect of Divine Light +3%','images/' . $class . '/15.jpg',0);
$_SESSION['Talents'][16] = new skill(16,'Prophecy Research',1,0,3,5,35,false,'When using Hard Truth, MP and HP bonuses +20%','images/' . $class . '/16.jpg',0);
$_SESSION['Talents'][17] = new skill(17,'Exegesis',20,0,0,0,0,true,'For each level, M-CRIT Rate +1%','images/' . $class . '/17.jpg',0);
$_SESSION['Talents'][18] = new skill(18,'Exorcism',5,0,2,10,0,false,'For each level,DMG from Sanctions Light +3%','images/' . $class . '/18.jpg',0);
$_SESSION['Talents'][19] = new skill(19,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][20] = new skill(20,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][21] = new skill(21,'Sincerity',10,0,0,0,20,true,'For each level, MAX MP +2%','images/' . $class . '/21.jpg',0);
$_SESSION['Talents'][22] = new skill(22,'Spiritual Training',1,0,3,5,25,false,'When Using Life Cure, HP Regen +10% per second, Duration +2 sec','images/' . $class . '/22.jpg',0);
$_SESSION['Talents'][23] = new skill(23,'Divine Knowledge',1,0,1,0,30,false,'When using Light Blessing, LUK, Light resistances, and NATURE resistances +20%','images/' . $class . '/23.jpg',0);
$_SESSION['Talents'][24] = new skill(24,'',0,0,0,0,0,false,'','',2);
?>