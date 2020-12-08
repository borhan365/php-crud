
<?php 

    // Insert data into database ( CREATE )
    $Insert = " INSERT INTO tablename( sname, saddress, sclass, sphone ) VALUES ( '{$StudentName}', '{$StudentAddress}', '{$StudentClass}', '{$StudentPhone}' ) ";

    // Read data query with two database ( READ )
    $Query = " SELECT * FROM tablenameOne JOIN tablenameTwo WHERE tablenameOne.sclass = tablenameTwo.cid ";


    // Read data query with two database ( UPDATE )
    $Query = " SELECT * FROM tablename WHERE sid= {$SID} ";

    // Delete query for database delete ( DELETE )
    $Query = " DELETE FROM tablename WHERE sid = {$StudentID} ";




?>