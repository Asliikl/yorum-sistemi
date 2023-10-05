<?php
require_once 'baglan.php';

if ($_POST) {
    $icerik_ad=$_POST['icerik_ad'];
    $icerik_yorum=$_POST['icerik_yorum'];
    $rating=$_POST['rating'];
    if ($icerik_ad!="" and $icerik_yorum!="" and $rating!="") 
    {
      $sorgu=$db->prepare(statement:"İNSERT into test(icerik_ad,icerik_yorum,rating) values(?,?,?)");
      $ekle=$sorgu->execute(array($icerik_ad, $icerik_yorum,$rating));
      if ($ekle) {
        echo "kayıt tamam";      
        }
    }
    else{
        echo "lütfen tüm alanları doldurun";
    }
}



?>