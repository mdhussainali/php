<?php
    include 'select.php';
    if(isset($_GET['id'])){
        $sql = "DELETE from user where id=".$_GET['id'];
        $query = mysqli_query($conn,$sql);
        if($query){
            header('location:select.php');
        }
        else{
            echo "<script> alert('someting went wrong')</script>".mysqli_error($conn);
          }
    }

?>