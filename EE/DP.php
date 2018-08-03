<?php
function DP($input)
{
if($input > 1)
{
	for($i = 1; $i < 4 ; $i++)
	{
		if ($_SESSION['Talents'][$input - $i]->name != ''){
				$skillname = $_SESSION['Talents'][$input - $i]->name;
				$i = 5;
				}
	}
}
else
	$skillname == '';
	
return $skillname;
}
?>