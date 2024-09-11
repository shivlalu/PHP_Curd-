<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Num</td>
            <td>action</td>            
        </tr>
            <?php 
            $conn=mysqli_connect('localhost','root','','practice');
            $sql="select * from p1";
            $res=mysqli_query($conn,$sql);
            if(!$res){echo "Error Fatching Data";}
            else{
                while($row=mysqli_fetch_assoc($res)){
                    ?>
                    <tr>
                        <td><?php echo $row['pname'];?></td>
                        <td><?php echo $row['pnum'];?></td>   
                        <td>
                            <a href="edit.php?id=<?php echo $row['pid']; ?>">edit</a>
                            <a href="delete.php?id=<?php echo $row['pid']; ?>">delete</a>
                        </td>                     
                    </tr>
                    <?php
                }
            }

            ?>
    </table>
    <a href="add.php"><button>Add</button></a>
</body>
</html>