<?php
require_once 'skills.php';
//session_start();
//warrior Talent page
//0 = none, 1 = kp, 2 = skill , 3 kp + skill
$class = 'warrior';
$_SESSION['Talents'] = array();
$_SESSION['Talents'][1] = new skill(1,'Precise Defense',20,0,0,0,0,true,'For each level, Def+1%','images/' . $class . '/1.jpg',0);
$_SESSION['Talents'][2] = new skill(2,'Endurance Training',1,0,2,10,0,false,'When using Metal Bluster, Def +20%', 'images/warrior/2.jpg',0);
$_SESSION['Talents'][3] = new skill(3,'Weapons Mastery',20,0,0,0,0,false,'For each level, ACC +2%','images/warrior/3.jpg',0);
$_SESSION['Talents'][4] = new skill(4,'Rapid Healing',10,0,1,0,15,true,'For each level, p-healing +1%', 'images/warrior/4.jpg',0);
$_SESSION['Talents'][5] = new skill(5,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][6] = new skill(6,'Resilent',1,0,3,5,25,false,'When using Titans Walls, P-ATK DMG received decreases by an additional 20%', 'images/warrior/6.jpg',0);
$_SESSION['Talents'][7] = new skill(7,'Physically Prepared',10,0,1,0,30,true,'For each level, P-ATK DMG Received -1%', 'images/warrior/7.jpg',0);
$_SESSION['Talents'][8] = new skill(8,'Sarcasm skills',1,0,3,5,35,false,'When using Group Provoke, enemies will incur 20% more damage, duration +2 sec','images/warrior/8.jpg',0);
$_SESSION['Talents'][9] = new skill(9,'Self-Defense',20,0,0,0,0,false,'For Each level, Max HP +1%','images/warrior/9.jpg',0);
$_SESSION['Talents'][10] = new skill(10,'CQC Training',20,0,0,0,0,true,'For Each level, STR +1%','images/warrior/10.jpg',0);
$_SESSION['Talents'][11] = new skill(11,'',0,0,0,0,0,'','',false,1);
$_SESSION['Talents'][12] = new skill(12,'Weapon Master',5,0,3,10,15,true,'For Each Level, when equipped with a melee weapon, ATK and M-ATK +2%', 'images/warrior/12.jpg',0);
$_SESSION['Talents'][13] = new skill(13,'Strenght Training',5,0,3,5,20,false,'For Each Level, DMG from Bloody Attack +3%', 'images/warrior/13.jpg',0);
$_SESSION['Talents'][14] = new skill(14,'Lower Body Training',5,0,1,0,25,true,'For Each Level, DMG from Onrush +3%', 'images/warrior/14.jpg',0);
$_SESSION['Talents'][15] = new skill(15,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][16] = new skill(16,'Madman',1,0,3,5,35,false,'When Using Excited, ATK & HP bonuses +10%', 'images/warrior/16.jpg',0);
$_SESSION['Talents'][17] = new skill(17,'War Technology',20,0,0,0,0,false,'For Each Level, Crit Rate +1%','images/warrior/17.jpg',0);
$_SESSION['Talents'][18] = new skill(18,'Avenger',20,0,0,0,0,true,'For Each level, increases Malice caused by Attacks +1%', 'images/warrior/18.jpg',0);
$_SESSION['Talents'][19] = new skill(19,'',0,0,0,0,0,false,'','',1);
$_SESSION['Talents'][20] = new skill(20,'Hatred Release',5,0,3,10,15,false,'For Each level, DMG from Angry Punch +3%', 'images/warrior/20.jpg',0);
$_SESSION['Talents'][21] = new skill(21,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][22] = new skill(22,'Survival Training',10,0,1,0,25,false,'For Each level, duration of Sense of Survival +1 sec', 'images/warrior/22.jpg',0);
$_SESSION['Talents'][23] = new skill(23,'',0,0,0,0,0,false,'','',2);
$_SESSION['Talents'][24] = new skill(24,'Sense of Fear',1,0,1,0,35,false,'When using Intimidate, Enemys EVA penalty + 20%, duration +2 sec', 'images/warrior/24.jpg',0);
?>