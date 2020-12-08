
<?php 

    $StudentName = $_POST['sname'];
    $StudentAddress = $_POST['saddress'];
    $StudentClass = $_POST['class'];
    $StudentPhone = $_POST['sphone'];

    $Connection = mysqli_connect( 'localhost', 'root', '', 'crud' ) or die( "MySqli connection failed!" );
    $Query = " INSERT INTO student( sname, saddress, sclass, sphone ) VALUES ( '{$StudentName}', '{$StudentAddress}', '{$StudentClass}', '{$StudentPhone}' ) ";

    $FinalConnection = mysqli_query( $Connection, $Query ) or die( "Sorry Final connection is failed!" ) ;

    header("location: index.php");

    mysqli_close( $Connection );

?>