<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <h3>Delete</h3>
    <?php 
    if(isset($_GET['id'])){
        
        $id= $_GET['id'];
        echo "<br>Data Got through Post<br>".$id."<br>";
        $conn=mysqli_connect('localhost','root','','practice');
        if(!$conn){echo "Error in databse connection";}
        $sql="delete from `p1` where `pid` = '$id' ";
        $res=mysqli_query($conn,$sql);
        if(!$res){echo "Error Fatching Data".mysqli_error($conn);}
        else{
            echo "Data Deleted Successfully";
            header('location:show.php');
        }

    }
    ?>
</body>
</html>