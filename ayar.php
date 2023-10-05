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


























""""""""""""""""""""""""""
<?php 

    require_once '.php';
    switch($_GET['mode']){
        case 'get':
            $veri=$db->query(statement:"SELECT * FROM veriler")->fetchAll(fetch_style PDO::FETCH_ASSOC);
            foreach($veri as $key => $value){
                echo '<div class="results">'
            }

        break;
    }



?>


//indexte




****

<?php
                   $db = new mysqli("localhost", "root", "","veritabani");
                   $select = "SELECT * FROM icerikler ";
                   $result = mysqli_query($db, $select);
                   $data = mysqli_fetch_all($result, MYSQLI_ASSOC);