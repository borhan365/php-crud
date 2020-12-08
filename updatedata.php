
<?php 

$StudentID = $_POST['sid'];
$StudentName = $_POST['sname'];
$StudentAddress = $_POST['saddress'];
$StudentClass = $_POST['sclass'];
$StudentPhone = $_POST['sphone'];

$Connection = mysqli_connect( 'localhost', 'root', '', 'crud' ) or die( "MySqli connection failed!" );
$Query = " UPDATE student SET sname= '{$StudentName}', saddress= '{$StudentAddress}', sclass= '{$StudentClass}', sphone= '{$StudentPhone}' WHERE sid= '{$StudentID}' ";

$FinalConnection = mysqli_query( $Connection, $Query ) or die( "Sorry Final connection is failed!" ) ;

header("location: index.php");

mysqli_close( $Connection );

?>