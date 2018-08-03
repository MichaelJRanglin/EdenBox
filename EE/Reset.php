<?php
/*
require_once 'skills.php';
session_start();
$skillnumber = $_GET['q'];


 $_SESSION['Talents'][$skillnumber]->setCurrentlevel(0);
 echo  $_SESSION['Talents'][$skillnumber]->currentlvl;
*/
session_start();
$_SESSION['Reset'] = true;
header('location:Sim.php');
?>
