<?php 
include 'header.php';
require 'db.php';
?>


<h1>View Students</h1>
<div class="container">

    <?php
        $sql = "SELECT * FROM students ORDER BY id DESC";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
    ?>



    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Age</td>
                <td>Contact Number</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php
                if(!empty($result)){
                    foreach($result as $row){
            ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['fname'] ?></td>
                    <td><?php echo $row['lname'] ?></td>
                    <td><?php echo $row['age'] ?></td>
                    <td><?php echo $row['contact_number'] ?></td>
                    <td><a href="edit.php?id=<?php echo $row['id']?>">Edit</a> <a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
                   
                </tr>   
            <?php
                }
            }
            ?>
        </tbody>
    </table>





</div>

<?php include 'footer.php'?>