<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <h3>Edit</h3>
    <?php 
    if(isset($_GET['id']))
    {
        echo "<br>Data Got through Get<br>";
        $id= $_GET['id'];
        $conn=mysqli_connect('localhost','root','','practice');
        $sql="select * from `p1` where `pid` = '$id' ";
        $res=mysqli_query($conn,$sql);
        if(!$res){echo "Error Fatching Data".mysqli_error($conn);}
        else{
        // {   echo "data ";
            $row = mysqli_fetch_assoc($res);
            // print_r($row);
        }

    }
    if(isset($_POST['pbtn'])){

        echo "<br>Data Got through Post<br>";
        $conn=mysqli_connect('localhost','root','','practice');
        if(!$conn){echo "Error in databse connection";}

        $_name=$_POST['p_name'];
        $_num=$_POST['p_num'];
        $sql="UPDATE `p1` SET `pname`='$_name',`pnum`='$_num' WHERE `pid`='$id'";
        $res=mysqli_query($conn,$sql);
        if(!$res){echo "Error".mysqli_error($conn);}
        else{
                echo "data inserted ";
                header('location:show.php');
           }

    }
    ?>
    <form method="post">
        <label>Name</label>
        <input type="text" name="p_name" value="<?php echo $row['pname']; ?>">
        <label>Number</label>
        <input type="number" name="p_num" value="<?php echo $row['pnum']; ?>">
        <input type="submit" value="submit" name="pbtn" >

    </form>
</body>
</html>