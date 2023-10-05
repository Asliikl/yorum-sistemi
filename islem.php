<?php 
require_once "baglan.php";

if(isset($_POST['gonder']))
{

	$kaydet=$db->prepare("INSERT into icerikler set 
		icerik_ad=:icerik_ad,
		icerik_yorum=:icerik_yorum,
        rating=:rating
		");

	$insert=$kaydet->execute(array(
		'icerik_ad' => $_POST['icerik_ad'],
		'icerik_yorum' => $_POST['icerik_yorum'],
        'rating' => $_POST['rating']
	));


	if($insert)
	{
		header("location:index.php?yorum=ok");
		exit;
	}
	else
	{
			header("location:index.php?yorum=no");
		exit;
	}
	
}
?>
