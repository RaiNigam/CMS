<?php
include './Common/header.php';
?>
    <main class="container">
        <div class="sidebar">
            <ul>
                <?php 
                $role=$_GET['role'];
                if($role=='Admin'){
                    ?>
                <li><a href="./Admin/addItems.php?role=<?php echo $role?>">Add</a></li>
                <li><a href="view.php?role=<?php echo $role?>">View</a></li>
                <?php
                }else{
                ?>
                 <li><a href="view.php?role=<?php echo $role?>">View</a></li>
                 <?php
                }
                ?>
            </ul>
        </div>
        <div>

        </div>
    </main>
</body>
</html>