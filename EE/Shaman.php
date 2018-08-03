<?php
require_once 'skills.php';
//session_start();
//Warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
// skillnumber, max lvl, current lvl, preqrequisite (0-none,1-kp,2skill,3both), prereq skill lvl, prereq kp, requirement to another skill (false false, description, picurl, display pic (0 skill, 1 arrow, 2 blank)
$class = 'shaman';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Geology',20,0,0,0,0,false,'M-CRIT DMG +2% per level','images/' . $class . '/1.png',0);
$_SESSION['Talents'][2] = new skill(2,'Astrology',20,0,0,0,0,true,'M-CRIT Rate +1% per level.','images/' . $class . '/2.png',0);
$_SESSION['Talents'][3] = new skill(3,'Nature Worship',5,0,2,10,0,false,'DMG from Natural Punishment +3% per level.','images/' . $class . '/3.png',0);
$_SESSION['Talents'][4] = new skill(4,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][5] = new skill(5,'Rainmaker',5,0,1,0,20,true,'Healing effect of Drops of Heaven +3% per level.','images/' . $class . '/5.png',0);
$_SESSION['Talents'][6] = new skill(6,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][7] = new skill(7,'Awakening of Grace',1,0,3,5,30,false,'Totem of Graces level has +5 added to its skill level.','images/' . $class . '/7.png',0);
$_SESSION['Talents'][8] = new skill(8,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][9] = new skill(9,'Supernatural Lore',20,0,0,0,0,true,'Cast Speed +1% per level.','images/' . $class . '/9.png',0);
$_SESSION['Talents'][10] = new skill(10,'Thunder Master',1,0,2,10,0,false,'When using Rage of Lightning, Lightning DMG per second, Attack Speed, and Cast Speed penalties +10%','images/' . $class . '/10.png',0);
$_SESSION['Talents'][11] = new skill(11,'Ancient Knowledge',20,0,0,0,0,true,'INT +1% per level.','images/' . $class . '/11.png',0);
$_SESSION['Talents'][12] = new skill(12,'Awakening of Fire Spirit',1,0,3,10,15,false,'Totem of Wraths level has +5 added to its skill level.','images/' . $class . '/12.png',0);
$_SESSION['Talents'][13] = new skill(13,'Fountain of Life',10,0,1,0,20,true,'Max HP +2% per level.','images/' . $class . '/13.png',0);
$_SESSION['Talents'][14] = new skill(14,'Woven Thorns',10,0,3,5,25,false,'Thorn Shields duration +1 second per level.','images/' . $class . '/14.png',0);
$_SESSION['Talents'][15] = new skill(15,'Carving Knowledge',10,0,1,0,30,true,'Max MP +2% per level.','images/' . $class . '/15.png',0);
$_SESSION['Talents'][16] = new skill(16,'Hunting Ritual',1,0,3,5,35,false,'When using Marks of Wind, AGI and LCK bonuses +20%.','images/' . $class . '/16.png',0);
$_SESSION['Talents'][17] = new skill(17,'Medical Specialization',20,0,0,0,0,true,'G-Healing +1% per level.','images/' . $class . '/17.png',0);
$_SESSION['Talents'][18] = new skill(18,'Scrying Knowledge',9,0,2,10,0,false,'WIS +1% per level.','images/' . $class . '/18.png',0);
$_SESSION['Talents'][19] = new skill(19,'Natural Science',20,0,0,0,0,true,'Elemental Resistances +1% per level.','images/' . $class . '/19.png',0);
$_SESSION['Talents'][20] = new skill(20,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][21] = new skill(21,'Harvest',1,0,3,10,20,false,'When using Earth Energy, STR and INT bonuses +20%','images/' . $class . '/21.png',0);
$_SESSION['Talents'][22] = new skill(22,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][23] = new skill(23,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][24] = new skill(24,'Animal Scar',1,0,1,0,35,false,'When using Black Puma, P-Attack damage received is reduced by an additional 5%.','images/' . $class . '/24.png',0);
?>