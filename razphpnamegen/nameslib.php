<?php


$names = array(
  'Ryu','Hayabusa','Ken','Masters','Pidgey','Dirk', 'Darling','Kong','Reaper','Marcus','Fenix','Leon','Dante','Alucard','Kane','Garrett','Samus','Aran','Ace','Decimate','Command','Warback','Cross', 'Cluster','Bio','Death','Assault','Ember','Liberty','Bullet','Storm','FireStar','Dragon','Evernite','Crystal'
);

function GenerateRandomName(){
  global $names;
  return $names[mt_rand(0, sizeof($names) - 1)] . mt_rand(0, 999);
}



 ?>
