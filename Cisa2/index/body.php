<?php
    $con=mysqli_connect('localhost','root','','db_yourgamestore');
    mysqli_query($con,"set names'utf8'");
    date_default_timezone_set("asia/bangkok");
    $date=date("Y-m-d h:i:s");
    
?>
<?php
if(isset($_GET['link'])){
    $link = $_GET['link'];
    
    if($link=='sign_up'){
        include '../checkout/index.php';
    }
    if($link=='product'){
        include '../addlists/dashboard.php';
    }
    if($link=='S_title'){
        include '../addlists/Section_title.php';
    }
    if($link=='add_game'){
        include '../addproduct/addproduct.php';
    }
    if($link=='edit_game'){
        include '../editgame/editgame.php';
    }
    if($link=='delete_game'){
        include '../Deletegame/deletegame.php';
    }
    if($link=='Show_game'){
        include '../index/showgame.php';
    }
    if($link=='Showinfo_game'){
        include '../index/showinfo.php';
    }
}
?>