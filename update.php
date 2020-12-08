<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

<?php 

    if(isset($_POST['showbtn'])) {

        $SID = $_POST['sid'];

        include 'config.php';
        $Query = " SELECT * FROM student WHERE sid= {$SID} ";

        $FinalQuery = mysqli_query( $Connection, $Query ) or die("Sorry query failed!") ;

        if ( mysqli_num_rows( $FinalQuery ) > 0 ) {

            while( $row = mysqli_fetch_assoc( $FinalQuery ) ) {

?>

    <form class="post-form" action="updatedata.php" method="post">
    <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>

            <?php 

                $CategoryQuery = " SELECT * FROM studentclass ";
                $FinalCatQuery = mysqli_query( $Connection, $CategoryQuery );

                if ( mysqli_num_rows( $FinalCatQuery ) > 0 ) {

                    echo "<select name='sclass'>";

                        while( $Catrow = mysqli_fetch_assoc( $FinalCatQuery ) ) {

                            if ( $row['sclass'] == $Catrow['cid'] ) {
                                $Select = "selected";
                            }  else {
                                $Select = "";
                            }

                            echo "<option {$Select} value='{$Catrow['cid']}'>{$Catrow['cname']}</option>";
                        }

                        echo "</select>";
                             
                        }                        
                    ?>     
          

      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php 
            }
        }
    }
    ?>
</div>
</div>
</body>
</html>
