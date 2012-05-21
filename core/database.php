<?php

@header('Content-Type:text/html;charset=utf-8');  
@mysql_query("SET NAMES utf8");
$dhost="localhost";
$duser="root";
$dpswd="";
$dname="emusic";
$select=mysql_connect($dhost,$duser,$dpswd) or die('connect error!'.mysql_error());
		if($select)
		{
			if(mysql_select_db($dname,$select))
			{
			}else die('choose database error!'.mysql_error());
		}else die('connect error!'.mysql_error());
		
function comp($tname,$pra1)
{
	$string="select * from ".$tname." where username='".$pra1."';";
	return $string;
}
		
?>