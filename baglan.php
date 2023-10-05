<?php 
try{
	$db=new PDO("mysql:host=localhost;dbname=veritabani;charset=utf8","root","");
}
catch (PDOException $hata)	{

	$hata->getmessage();
}


 ?>