<?php
function AllTOTAL(){
$var = $_SESSION['Talents'][1]->totalKP() +$_SESSION['Talents'][2]->totalKP() +$_SESSION['Talents'][3]->totalKP() +$_SESSION['Talents'][4]->totalKP() +$_SESSION['Talents'][5]->totalKP() +$_SESSION['Talents'][6]->totalKP() +$_SESSION['Talents'][7]->totalKP() +$_SESSION['Talents'][8]->totalKP() +$_SESSION['Talents'][9]->totalKP() +$_SESSION['Talents'][10]->totalKP() +$_SESSION['Talents'][11]->totalKP() +$_SESSION['Talents'][12]->totalKP() +$_SESSION['Talents'][13]->totalKP() +$_SESSION['Talents'][14]->totalKP() +$_SESSION['Talents'][15]->totalKP() +$_SESSION['Talents'][16]->totalKP() +$_SESSION['Talents'][17]->totalKP() +$_SESSION['Talents'][18]->totalKP() +$_SESSION['Talents'][19]->totalKP() +$_SESSION['Talents'][20]->totalKP() +$_SESSION['Talents'][21]->totalKP() +$_SESSION['Talents'][22]->totalKP() + $_SESSION['Talents'][23]->totalKP() + $_SESSION['Talents'][24]->totalKP();
return $var;
}
?>
