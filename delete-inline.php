
<?php 

    $StudentID = $_GET['id'];

    include 'config.php';

    $Query = " DELETE FROM student WHERE sid = {$StudentID} ";
    $FinalDeleteQuery = mysqli_query( $Connection, $Query ) or die( "Sorry! Mysqli query failed!" );

    header( "location: index.php" );

    mysqli_close($Connection);


?>