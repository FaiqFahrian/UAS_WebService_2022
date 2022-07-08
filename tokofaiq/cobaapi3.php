<?php
include "conn.php";
$sql = "SELECT * FROM penjualan";
$query = mysqli_query($conn, $sql);
while($data = mysqli_fetch_array($query))
    //echo $data["nama"]." ";

    $item[]= array(
        'Tanggal'=>$data["tanggal"],
        'Keterangan'=>$data["keterangan"],
        'Id Pelanggan'=>$data["pelanggan_id"],
        'Total'=>$data["total"],
    );
    $response = array(
        'status'=>'OK',
        'data'=>$item
    );
    echo json_encode($response);

?>