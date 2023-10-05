<?php  require_once "baglan.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sırmalı Tatil Köyü</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">    

    <link rel="stylesheet" href="custom.css">
    
    <script src="jquery/jquery-3.2.1.min.js"></script>

    <script src="custom.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        .results{
            display: none;
        }  
    </style>

</head>
<body>

<?php 
	if(@$_GET['yorum']=="ok")
	{		
	}
	elseif (@$_GET['yorum']=="no") {
	}

	 ?>



<div>
    <div class="row">

        <div class="slider-content col my-1 ">

            <ul class="slider">
                <li class="raunded">
                    <img src="img/resim-1.jpg" alt="" width="470"; height="300">
                </li>

                <li>
                <img src="img/resim-2.jpg" alt="" width="470"; height="300" >
                </li>

                <li>
                <img src="img/resim-3.jpg" alt="" width="470"; height="300">
                </li>

                <li>
                <img src="img/resim-4.jpg" alt="" width="470"; height="300">
                </li>

                <li>
                <img src="img/resim-5.jpg" alt="" width="470"; height="300">
                </li>
            </ul>

            <a href="#" class="nagivation-btn"      id="prev"><</a>
            <a href="#" class="nagivation-btn"  id="next">></a>

            <div class="clear"></div>

            <!-- <ul class="nagivation">
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li> 
            </ul>   -->


            <div class="forum  bg-dark text-white p-3">
            
            <form action="islem.php" method="POST" autocomplete="off">


                <div class="form-group ">
                    <label for="floatingInput">Adınızı ve soyadınızı giriniz.</label>   
                    <input type="text"  name="icerik_ad"
                    class="form-control" placeholder="Username and Surname">    
                </div>

                <div class="form-group  ">
                    <label for="floatingTextarea2">Yorumunuzu giriniz.</label>                
                    <textarea class="form-control " name="icerik_yorum"  placeholder="Leave a comment here"></textarea>
                </div>
                
                <!-- yıldızz -->
                <div class=" form-group rate fs-3">
                            <input name="rating" type="radio" id="star1" value="1" required>  

                            <input name="rating" type="radio" id="star2"
                           value="2" required>

                            <input name="rating" type="radio" id="star3"
                            value="3" required>

                            <input name="rating" type="radio" id="star4"
                           value="4" required>

                            <input name="rating" type="radio" id="star5" 
                            value="5" required>

                            <label for="star1" class="bi bi-star " style="color:gold;"></label>
                            <label for="star2" class="bi bi-star" style="color:gold;"></label>
                            <label for="star3" class="bi bi-star" style="color:gold;"></label>
                            <label for="star4" class="bi bi-star" style="color:gold;"></label>
                            <label for="star5" class="bi bi-star" style="color:gold;"></label>
                </div>
                  
            
                 <!-- yıldızın script kodları -->
                <script>
                        $("input[name='rating']").click(function () {
                        var star = $(".bi");
                        var select = $(this).val();

                        star.slice(0,5).removeClass("bi-star-fill");
                        star.slice(0,5).addClass("bi-star");

                        star.slice(0,select).removeClass("bi-star");
                        star.slice(0,select).addClass("bi-star-fill");
                        });
                 </script>
                <!-- yıldızın scripti bitişii -->


                <div class="list d-flex justify-content-end p-2">
                    <button type="submit" class="btn btn-light bg-white;"  name="gonder">Gönder</button>   
                </div>

            </form>
        </div>
        </div>
       
        
        <div class="col">
            <div>
                    <p name="icerik_ad"></p>
               
                    <p name="icerik_yorum"></p>    
               
                    <p name="rating"></p>
           
                          
                <!-- veri çekme kısmı -->
                <table class="table table-striped">	
                    <?php 
                        $sorgu=$db->prepare("SELECT * from icerikler WHERE icerik_id");
                        $sorgu->execute();
                        
                        while($sorgucek=$sorgu->fetch(PDO::FETCH_ASSOC)){ ?>
                    
                            <tr>
                                <td class="table-dark"><?php echo "Puan : ".$sorgucek['rating']  ?>
                                </td>

                                <td class="table-danger"><?php echo $sorgucek['icerik_ad']; ?>
                                </td>
                                
                            </tr>
                            <tr>
                                <td colspan="2"><?php echo $sorgucek['icerik_yorum'] ?></td>
                                </tr>                             
                    <?php } ?>
                </table>
            </div>
        </div>


        <div class="col-2 artic my-1 mx-4 fs-3 shadow">
                <div>
                    
                   <h4>Puan Ortalaması </h4>
                <?php
                   $db = new mysqli("localhost", "root", "","veritabani");
                   $select = "SELECT avg(rating) FROM icerikler ";
                   $result = mysqli_query($db, $select);
                   $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

                   echo $data[0]["avg(rating)"]*100/100;
                   echo "<br>";
                   
                   if ($data[0]["avg(rating)"]>1) { 

                            if($data[0]["avg(rating)"]>1 && $data[0]["avg(rating)"]<2)
                            {   
                            echo"Kötü!";
                            }
                            elseif($data[0]["avg(rating)"]>2 && $data[0]["avg(rating)"]<3)
                            {   
                            echo " Normal";
                            }  
                            elseif($data[0]["avg(rating)"]>3 && $data[0]["avg(rating)"]<4)
                            {   
                            echo " İyi";
                            }
                            elseif($data[0]["avg(rating)"]>4 && $data[0]["avg(rating)"]<5)
                            {   
                            echo " Çok iyi!";
                            }
                   
                       }       
                ?>
                </div>   
                     
            
        </div>


    </div>
</div>
    


<script src="js/bootstrap.bundle.min.js"></script>
    
</body>
</html>