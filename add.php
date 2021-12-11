
<?php include 'header.php'?>

<?php 
if(!empty($_POST['create'])){
        require_once 'db.php';
        
        $sql = "INSERT INTO students(fname,lname,age,contact_number)VALUES(:fname,:lname,:age,:contact_number)";
        $stmt = $conn->prepare($sql);
        
        $result = $stmt->execute(array(':fname'=>$_POST['fname'],':lname'=>$_POST['lname'],':age'=>$_POST['age'],':contact_number'=>$_POST['contact_number']));
        
        if(!empty($result)){
            header('location:index.php');
        }
    }

?>


<div class="container">
    <form action="" method="post">
        <h1>Add new Student</h1>
        <div class="form-group">
            <label for="name">FirstName</label>
            <br>    
            <input type="text" name="fname">
        </div>
        <div class="form-group">
            <label for="name">Lastname</label>
            <br>  
            <input type="text" name="lname">
        </div>
        <div class="form-group">
            <label for="name">Age</label>
            <br>  
            <input type="text" name="age">
        </div>
        <div class="form-group">
            <label for="name">Contact Number</label>
            <br>  
            <input type="text" name="contact_number">
        </div>
        <div class="form-group">
            <input name="create" type="submit" value="Add" class="demo-form-submit">
        </div>
    </form>
</div>

<?php include 'footer.php'?>