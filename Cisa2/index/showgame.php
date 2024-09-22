<html>
    <body><br><br>
        <div class="container"><h2>เกมทั้งหมด</h2></div>
        <div class="row col-sm-12">
        <?php 
        include_once 'body.php';
        $result=mysqli_query($con,"SELECT * FROM db_yourgamestore.tb_game order by id_game ASC");
        while($data=mysqli_fetch_array($result))
        {
            ?>
                <div class="col-sm-3" align="center">
                    <div><img width="80%" src="../img_ad/<?=$data['img_game']?>" class="img-thumbnail" alt=""></div>
                    <div><?=$data['name_game']?></div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#gameDetailModal" 
                data-img="../img_ad/<?=$data['img_game']?>" 
                data-name="<?=$data['name_game']?>" 
                data-description="<?=$data['id_game']?>">Buy Game
        </button>
                </div>
            <?php
        }
        ?>
        </div>
    </body>
</html>