<?php
    $con=mysqli_connect('localhost','root','','db_yourgamestore');
    mysqli_query($con,"set names'utf8'");
    date_default_timezone_set("asia/bangkok");
    $date=date("Y-m-d h:i:s");
    

if(isset($_GET["Action"]))
{					
if($_GET["Action"]=="Delete")
                    {
                        $db_yourgamestore= "delete from tb_game where id_game='".$_GET["id_game"]."'";
                        $dbquery_del = mysqli_query($con,$db_yourgamestore);																		
                        ?>
                            <div class="alert alert-success">
                              <span class="glyphicon glyphicon-trash"></span><strong> สำเร็จ!</strong> ลบข้อมูลเรียบร้อย
                            </div>
                    <?php			
                    }
}