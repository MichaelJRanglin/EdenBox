<?php
$TalentSim="
<div id class='content'>
<div class='talentwindow'>
<div class='WindowTop'><p id='KPbox'><span id='KPleft'>" . $_SESSION['ClassLevel'] . "</span> Knowledge Point(s) Remain</p></div>
<div class='HoriSpacer'></div>
<div class='TalentBlock1'>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][1]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][1]->checkPrereq2() . "</div> </div><div class='skillpic'>" .$_SESSION['Talents'][1]->displayPic() . "<div class='fix' id='b1'>" . $_SESSION['Talents'][1]->skillDP('') . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][2]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][2]->checkPrereq2() . "</div></div>   <div class='skillpic'>" .$_SESSION['Talents'][2]->displayPic() . "<div class='fix' id='b2'>" . $_SESSION['Talents'][2]->skillDP(DP(2)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][3]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][3]->checkPrereq2() . "</div></div>    <div class='skillpic'>" .$_SESSION['Talents'][3]->displayPic() . "<div class='fix' id='b3'>" . $_SESSION['Talents'][3]->skillDP(DP(3)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][4]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][4]->checkPrereq2() . "</div></div>   <div class='skillpic'>" .$_SESSION['Talents'][4]->displayPic() . "<div class='fix' id='b4'>" . $_SESSION['Talents'][4]->skillDP(DP(4)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][5]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][5]->checkPrereq2() . "</div></div>  <div class='skillpic'>" .$_SESSION['Talents'][5]->displayPic() . "<div class='fix' id='b5'>" . $_SESSION['Talents'][5]->skillDP(DP(5)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][6]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][6]->checkPrereq2() . "</div></div>  <div class='skillpic'>" .$_SESSION['Talents'][6]->displayPic() . "<div class='fix' id='b6'>" . $_SESSION['Talents'][6]->skillDP(DP(6)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][7]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][7]->checkPrereq2() . "</div></div>  <div class='skillpic'>" .$_SESSION['Talents'][7]->displayPic() . "<div class='fix' id='b7'>" . $_SESSION['Talents'][7]->skillDP(DP(7)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][8]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][8]->checkPrereq2() . "</div></div>  <div class='skillpic'>" .$_SESSION['Talents'][8]->displayPic() . "<div class='fix' id='b8'>" . $_SESSION['Talents'][8]->skillDP(DP(8)) . "</div></div>
</div>
<div class='HoriSpacer'></div>


<div class='TalentBlock2'>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][9]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][9]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][9]->displayPic() . "<div class='fix' id='b9'>" . $_SESSION['Talents'][9]->skillDP(DP(9)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][10]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][10]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][10]->displayPic() . "<div class='fix' id='b10'>" . $_SESSION['Talents'][10]->skillDP(DP(10)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][11]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][11]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][11]->displayPic() . "<div class='fix' id='b11'>" . $_SESSION['Talents'][11]->skillDP(DP(11)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][12]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][12]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][12]->displayPic() . "<div class='fix' id='b12'>" . $_SESSION['Talents'][12]->skillDP(DP(12)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][13]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][13]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][13]->displayPic() . "<div class='fix' id='b13'>" . $_SESSION['Talents'][13]->skillDP(DP(13)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][14]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][14]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][14]->displayPic() . "<div class='fix' id='b14'>" . $_SESSION['Talents'][14]->skillDP(DP(14)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][15]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][15]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][15]->displayPic() . "<div class='fix' id='b15'>" . $_SESSION['Talents'][15]->skillDP(DP(15)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][16]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][16]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][16]->displayPic() . "<div class='fix' id='b16'>" . $_SESSION['Talents'][16]->skillDP(DP(16)) . "</div></div>
</div>
<div class='HoriSpacer'></div>


<div class='TalentBlock3'>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][17]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][17]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][17]->displayPic() . "<div class='fix' id='b17'>" . $_SESSION['Talents'][17]->skillDP(DP(17)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][18]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][18]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][18]->displayPic() . "<div class='fix' id='b18'>" . $_SESSION['Talents'][18]->skillDP(DP(18)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][19]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][19]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][19]->displayPic() . "<div class='fix' id='b19'>" . $_SESSION['Talents'][19]->skillDP(DP(19)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][20]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][20]->checkPrereq2() . "</div></div> <div class='skillpic'>" .$_SESSION['Talents'][20]->displayPic() . "<div class='fix' id='b20'>" . $_SESSION['Talents'][20]->skillDP(DP(20)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][21]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][21]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][21]->displayPic() . "<div class='fix' id='b21'>" . $_SESSION['Talents'][21]->skillDP(DP(21)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][22]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][22]->checkPrereq2() . "</div></div> <div class='skillpic'>" .$_SESSION['Talents'][22]->displayPic() . "<div class='fix' id='b22'>" . $_SESSION['Talents'][22]->skillDP(DP(22)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][23]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][23]->checkPrereq2() . "</div></div> <div class='skillpic'>" .$_SESSION['Talents'][23]->displayPic() . "<div class='fix' id='b23'>" . $_SESSION['Talents'][23]->skillDP(DP(23)) . "</div></div>
<div class='vertspacer'><div class ='v1'>" . $_SESSION['Talents'][24]->checkPrereq1() . "</div><div class='v2'>" . $_SESSION['Talents'][24]->checkPrereq2() . "</div></div><div class='skillpic'>" .$_SESSION['Talents'][24]->displayPic() . "<div class='fix' id='b24'>" . $_SESSION['Talents'][24]->skillDP(DP(24)) . "</div></div></div>
<div class='HoriSpacer'> </div>

<div class='WindowBottom'><div class='Resetbox'><form class='formfix' action='Reset.php' ><input name='Reset' type='Submit'  value='Reset' class='ResetButton'/></form></div><span id='KPbox2'><span id='KPused'>0</span> 
	Knowledge Point(s) Entered</span>
</div>

</div>

</div>";
?>


