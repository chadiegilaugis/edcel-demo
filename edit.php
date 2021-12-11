<?php
include 'header.php';
require_once 'db.php';


if(!empty($_POST['edit_student'])){

    $stmt = $conn->prepare("UPDATE students SET fname='" . $_POST['fname'] . "',lname='".$_POST['fname']. "',age='".$_POST['age'] . "',contact_number='". $_POST['contact_number']."' WHERE id=". $_GET['id']);
    $result = $stmt->execute();
    if($result){
        header("location:index.php");
    }
    
    
}
    
    $stmt = $conn->prepare('SELECT * FROM students WHERE id=' .$_GET['id']);
    $stmt->execute();
    $result = $stmt->fetchAll();

?>



<div class="container">
    <form action="" method="POST">
        <h1>Edit Student</h1>
        <div class="form-group">
            <label for="name">FirstName</label>
            <input type="text" name="fname" value="<?php echo $result[0]['fname']; ?>">
        </div>
        <div class="form-group">
        
            <label for="name">Lastname</label>
            <input type="text" name="lname" value="<?php echo $result[0]['lname']; ?>">
        </div>
        <div class="form-group">
        
            <label for="name">Age</label>
            <input type="text" name="age" value="<?php echo $result[0]['age']?>">
        </div>
        <div class="form-group">
            <label for="name">Contact Number</label>
            <input type="text" name="contact_number" value="<?php echo $result[0]['contact_number']?>">
        </div>
        <div class="form-group">
            <input name="edit_student" type="submit" value="Add" class="demo-form-submit">
        </div>
    </form>
</div>




<?php include 'footer.php'?>