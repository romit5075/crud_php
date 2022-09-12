<?php
include("db.php");
?>
<html>

<head>
    <style>
    table {
        border-collapse: collapse;
    }

    table,
    tr,
    th,
    td {
        margin: 10px;
        padding: 10px;
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <form method="post">

    </form>
    <div>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>City</th>
                <th>Address</th>
                <th>hoby</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
                   $show="SELECT * FROM `student`";
                   $result=mysqli_query($conn,$show);
                   while($row=mysqli_fetch_assoc($result)) :
                    $id=$row['id'];  
            ?>
       
            <tr>
                <td><?php echo "$row[id]"; ?></td>
                <td><?php echo "$row[name]"; ?></td>
                <td><?php echo "$row[email]"; ?></td>
                <td><?php echo "$row[phone]"; ?></td>
                <td><?php echo "$row[gender]"; ?></td>
                <td><?php echo "$row[city]"; ?></td>
                <td><?php echo "$row[address]"; ?></td>
                <td><?php echo "$row[hoby]"; ?></td>
                <td><?php echo '<a href="edit.php?editid='.$id.'">Edit<a>'; ?></td>
                <td><?php echo'<a href="delete.php?deleteid='.$id.'">Delete</a>'; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>

</html>