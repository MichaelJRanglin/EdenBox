<?php
function ClassName($name){

if($name == 'Warrior')
require_once 'Warrior.php';

elseif($name == 'Thief')
require_once 'Theif.php';

elseif($name == 'Cleric')
require_once 'Cleric.php';

elseif($name == 'Engineer')
require_once 'Engineer.php';

elseif($name == 'Hunter')
require_once 'Hunter.php';

elseif($name == 'Illusionist')
require_once 'Illusionist.php';

elseif($name == 'Shaman')
require_once 'Shaman.php';

elseif($name == 'Knight')
require_once 'Knight.php';

elseif($name == 'BladeDancer')
require_once 'BladeDancer.php';

elseif($name == 'Bard')
require_once 'Bard.php';

elseif($name == 'MartialArtist')
require_once 'MartialArtist.php';

elseif($name == 'Warlock')
require_once 'Warlock.php';

elseif($name == 'Magician')
require_once 'Magician.php';

}



?>
