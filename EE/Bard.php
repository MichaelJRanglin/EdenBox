<?php
require_once 'skills.php';
//session_start();
//Warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (false false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
$class = 'bard';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Music Theory',20,0,0,0,0,true,'Cast SPD +1% per level.','images/' . $class . '/1.jpg',0);
$_SESSION['Talents'][2] = new skill(2,'Soothing Chords',1,0,2,10,0,false,'When using Music of Life, HP Regen +10% per second & duration +2 seconds','images/' . $class . '/2.jpg',0);
$_SESSION['Talents'][3] = new skill(3,'Folklore',20,0,0,0,0,true,'M-Crit DMG +2% per level.','images/' . $class . '/3.jpg',0);
$_SESSION['Talents'][4] = new skill(4,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][5] = new skill(5,'Moving Performance',10,0,3,10,20,false,'Spirited Melodys duration +1 second per level.','images/' . $class . '/5.jpg',0);
$_SESSION['Talents'][6] = new skill(6,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][7] = new skill(7,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][8] = new skill(8,'Solemn Music',1,0,1,0,35,false,'When using Holy Concerto, G-Healing & P-Healing bonuses +20%, duration +2 seconds','images/' . $class . '/8.jpg',0);
$_SESSION['Talents'][9] = new skill(9,'Musical Knowledge',20,0,0,0,0,true,'M-Crit Rate +1% per level.','images/' . $class . '/9.jpg',0);
$_SESSION['Talents'][10] = new skill(10,'High Pitch',5,0,2,10,0,false,'DMG from Vocal Bomb +2% per level.','images/' . $class . '/10.jpg',0);
$_SESSION['Talents'][11] = new skill(11,'Composing',20,0,0,0,0,false,'ACC +2% per level.','images/' . $class . '/11.jpg',0);
$_SESSION['Talents'][12] = new skill(12,'Conductor',5,0,1,0,15,true,'All Magic +2% per level.','images/' . $class . '/12.jpg',0);
$_SESSION['Talents'][13] = new skill(13,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][14] = new skill(14,'Marching Song',5,0,3,5,25,false,'War Rhymes duration +2 seconds per level.','images/' . $class . '/14.jpg',0);
$_SESSION['Talents'][15] = new skill(15,'Folk Music',5,0,1,0,30,true,'Max MP +2% per level.','images/' . $class . '/15.jpg',0);
$_SESSION['Talents'][16] = new skill(16,'Blues',1,0,3,5,35,false,'When using Demonic Symphony, M-ATK DMG bonus +20%, duration +2 seconds.','images/' . $class . '/16.jpg',0);
$_SESSION['Talents'][17] = new skill(17,'Lyrics & Poetry',20,0,0,0,0,false,'G-Healing +1% per level.','images/' . $class . '/17.jpg',0);
$_SESSION['Talents'][18] = new skill(18,'Guitar Tuning',20,0,0,0,0,true,'When equipped with a guitar, ATK & M-ATK +1% per level.','images/' . $class . '/18.jpg',0);
$_SESSION['Talents'][19] = new skill(19,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][20] = new skill(20,'Heavy Metal',1,0,3,10,15,false,'When using Burning Metal, Fire DMG per second and DEF penalty +10%.','images/' . $class . '/20.jpg',0);
$_SESSION['Talents'][21] = new skill(21,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][22] = new skill(22,'Moody Style',10,0,1,0,25,false,'Song of Illusions duration +1 second per level.','images/' . $class . '/22.jpg',0);
$_SESSION['Talents'][23] = new skill(23,'Pop Style',10,0,1,0,30,false,'Musical Encouragements duration +1 second per level.','images/' . $class . '/23.jpg',0);
$_SESSION['Talents'][24] = new skill(24,'',0,0,0,0,0,false,'','',0);
?>