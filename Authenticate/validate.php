<?php
if(isset($_POST["submit"])){
    $id=$_POST["userId"];
    $password=$_POST["password"];
    $role=$_POST["role"];
    if($id==="Admin"&&$password==="Admin"){
        header('Location:../Admin/admin.php?r='.$role);
    }else if($id==="Student"&&$password==="Student"){
        header('Location:../student.php?r='.$role);
    }else if($id==="Teacher"&&$password==="Teacher"){
        header('Location:../teacher.php?r='.$role);
    }else{
        echo "Not valid details!!";
    }  
}

?>
<form action="" method="post">  
    <div class="form-group">
        <label for="#">ID</label>
        <input type="text"   class="form-control userId" value="<?php echo $id?>">
        </div>
        <div class="form-group">
            <label for="#">Password</label>
            <input type="text"  class="form-control password" value="<?php echo $password?>">
</div>
    <div class="form-group">
        <label for="#">Role</label>
        <input type="text"  value="<?php echo $role?>">
    </div>

</form>
   



