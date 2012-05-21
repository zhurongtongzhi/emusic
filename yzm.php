<?php
 
header("Content-type:image/png");
session_start();

$authnum='';
$str='abcdefghijklmnopqrstuvwxyz1234567890';
$strLength=strlen($str);
for($i=1;$i<=4;$i++)
{
$num=rand(0,$strLength-1);
$authnum.=$str[$num];
}
 
$_SESSION["yzm"]=$authnum;

srand((double)microtime()*1000000); 
$im=imagecreate(50,20);
//$im=imagecreatetruecolor(200,100) or die("Cannot Initialize new GD image stream");
//$gray=imagecolorallocate($im,200,200,100);
$white=imagecolorallocate($im,255,255,255);
imagefill($im,10,5,$gray);
$li=imagecolorallocate($im,150,150,150);
for($i=0;$i<=3;$i++)
{
	imageline($im,rand(0,20),rand(0,50),rand(20,40),rand(0,50),$li);
}

for($i=0;$i<strlen($_SESSION['yzm']);$i++)
{
	$strColor=imagecolorallocate($im,rand(0,100),rand(50,150),rand(100,200));
	$fontSize=mt_rand(12,15);
	$xSize=mt_rand(1,5)+50*$i/4;
	$ySize=rand(1,5);
	imagestring($im,$fontSize,$xSize,$ySize,$_SESSION['yzm'][$i],$strColor);
}

imagepng($im);
imagedestroy($im);

?>