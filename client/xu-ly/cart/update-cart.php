<?php
    session_start();

   if(isset($_POST['update_quantity'])){
       $id_sp=$_POST['id_sp'];
       $so_luong=$_POST['update_quantity'];
    for($i=0;$i <count($_SESSION['cart']); $i++){
        if($_SESSION['cart'][$i]['id_sp'] == $id_sp){
           try{
            $_SESSION['cart'][$i]['so_luong'] = $so_luong;
            echo 1;
           }catch(Exception $e){
               echo 0;
           }
        }
    }
   }

?>