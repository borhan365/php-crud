<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>

            <?php 

                $Connection = mysqli_connect( 'localhost', 'root', '', 'crud' ) or die( "MySqli connection failed!" );
                $Query = " SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid ";

                $FinalConnection = mysqli_query( $Connection, $Query ) or die( "Sorry Final Query is Failed" );


                $CountTable = mysqli_num_rows( $FinalConnection );

                if ( $CountTable > 0 ) {
                    while ( $row = mysqli_fetch_assoc( $FinalConnection ) ) {                        
            
            ?>

            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['cname']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this item?');" href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
                </td>
            </tr>
            
            <?php
                    }
                } else {
                    echo "<h1>No Record found! </h1>";
                }
            ?>

        </tbody>
    </table>
</div>
</div>
</body>
</html>
