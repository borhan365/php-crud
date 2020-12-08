<?php include 'header.php'; ?>

<?php 

    if(isset($_POST['deletebtn'])) {

        $StudentID = $_POST['sid'];

        include 'config.php';
    
        $Query = " DELETE FROM student WHERE sid = {$StudentID} ";
        $FinalDeleteQuery = mysqli_query( $Connection, $Query ) or die( "Sorry! Mysqli query failed!" );
    
        header( "location: index.php" );
    
        mysqli_close($Connection);
    }
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
