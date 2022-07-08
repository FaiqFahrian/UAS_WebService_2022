<?php
include "conn.php";
$sql = "SELECT * FROM barang";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query))
    //echo $data["nama"]." ";

    $item[]= array(
        'Kode Barang'=>$data["kode_barang"],
        'Nama Barang'=>$data["nama_barang"],
        'Harga'=>$data["harga"],
        'Stock'=>$data["stock"],
        'Satuan'=>$data["satuan"],
    );
    $response = array(
        'status'=>'OK',
        'data'=>$item
    );
    echo json_encode($response);

?>