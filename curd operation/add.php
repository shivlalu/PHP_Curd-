<!-- 
1 create form tag 
2 inside form with attribute method="Post" create required input filed with attribute name="name of inputbox"
  and last line of form create input type="button"
3 above form tag start php by if(isset($_post['name_of_button']))
$conn=mysqli_connect("localhost","root","","database_name")
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    <?php 
    if(isset($_POST['pbtn'])){
        echo "Data got through post";
        $conn=mysqli_connect('localhost','root','','practice');
        if(!$conn){echo "Error in databse connection";}

        $_name=$_POST['p_name'];
        $_num=$_POST['p_num'];
        $sql="INSERT INTO `p1`(`pid`, `pname`, `pnum`) VALUES (null,'$_name','$_num')";
        $res=mysqli_query($conn,$sql);
        if(!$res){echo "Error".mysqli_error($conn);}
        else{
                echo "data inserted ";
                header('location:show.php');
           }
        
    }
    ?>
    <h3>Add </h3>
    <form method="post">
        <label>Name</label>
        <input type="text" name="p_name">
        <label>Number</label>
        <input type="number" name="p_num">
        <input type="submit" value="submit" name="pbtn">

    </form>
</body>
</html>
