<?php
header('Content-Type: text/css');
function conText($text, $format = "")
{
	$outText = stripslashes(htmlspecialchars(trim($text), ENT_QUOTES));
	return $outText;
}
$c = conText($_GET["c"]);
if($c !=''){
$color = str_replace('#','',$c);
$filename = "color/color-default.css";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
echo str_replace('1b8bf9',$color,$contents);
fclose($handle);
}
?>