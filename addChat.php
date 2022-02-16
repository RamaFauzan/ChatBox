<?php

    // Call file in line
    include 'database.php';

    // Create object / instance
    $db = new Database();
    $con=$db->Connect();

    // Variabel input
    $nama = $_POST['nama_chat'];
    $isi  = $_POST['isi_chat'];
    $tanggal = date('Y-m-d H:i:s');

    // Process input query
    $q=mysqli_query($con,"INSERT INTO `chat` (`id_chat`, `nama_chat`, `isi_chat`, `tgl_chat`) VALUES (NULL, '$nama', '$isi', '$tanggal');");
    $query = mysqli_query($con, $q);

    if($query){
        echo json_encode("Data Inserted Successfully");
        }
    else {
        echo json_encode('problem');
        }
    

    
    

?>