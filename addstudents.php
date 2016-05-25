<?php
    include_once "inc/header.php";
?>
<div class="mid-form" action="checkstudent.php">
    <h1>Teacher Add Form</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="firstname" placeholder="First Name">
        <input type="text" name="lastname" placeholder="Last Name"><br>
        
        <hr size="0" style="color:transparent">
        
        <label>Guardian Detail</label><br>      
        <input type="text" name="phone" placeholder="Phone Number">
        <input type="text" name="Name" placeholder="Guardian's Name">
        
        <hr size="0" style="color:transparent">        
        
        <b>Teacher's Photo</b><br>
        <input type="file" name="image" value="Add Photo">
        <input type="submit" name="submit" value="Add Student">

    </form>
</div>

<?php
    include_once "inc/footer.html";
?>