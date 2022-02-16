<?php

    // Call file in line
    include 'database.php';

    // Create object / instance
    $db = new Database();
    $con=$db->Connect();

    // Variabel GET URL
    

    // Process GET query
    $rows=mysqli_query($con,"select * from tbl_mahasiswa");
    $data=array();
    $no=0;
    foreach($rows as $row)
    {
        $data[]=$row;
        $no=$no+1;
    }
    

    // Process encription data
    echo json_encode($data);

?>