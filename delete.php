<?php
include 'connection.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from userinfo where id=$id";
    $result=mysqli_query($conn,$sql);  
    if($result){
        // 
        header('location:display.php');
    }else{

    }
}
?>