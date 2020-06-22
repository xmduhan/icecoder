<?php
if (!isset($_SESSION['loggedIn'])) {
	die('Sorry, not logged in.');
}
// Purpose:	This file is run when a file or dir is pasted, has $fileLoc, $fileName and $dest strings available to it
// Langs:	PHP (tho can concat JS within $doNext string, see below)
// Example:
// $fh = fopen(dirname(__FILE__)."/../file-dir-access.log", 'a');
// fwrite($fh, "PASTE >>> ".date("D dS M Y h:i:sa").": ".$dest."\n");
// fclose($fh);

if (false === isset($doNext)) {
    $doNext = "";
}
// If JS is needed, add within $doNext string below, eg $doNext .= ";alert('pasted');";
$doNext .= "";
