<?php
include('connect/conect.php');
$sql = "SELECT * FROM tb_travelling";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($query);
$startLat = $result['LAT'];
$startLng = $result['LNG'];

$sql = "SELECT * FROM restuarant";
$query_test = mysqli_query($conn, $sql);

function haversineDistance($startLat, $startLng, $locationLat, $locationLng)
{
    $earthRadius = 6371;

    $deltaLat = deg2rad($locationLat - $startLat);
    $deltaLng = deg2rad($locationLng - $startLng);

    $a = sin($deltaLat / 2) * sin($deltaLat / 2) + cos(deg2rad($startLat)) * cos(deg2rad($locationLat)) * sin($deltaLng / 2) * sin($deltaLng / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $distance = $earthRadius * $c;

    return $distance;
}


$minDistance = INF;

$nearestLocation = null;


while ($row = mysqli_fetch_assoc($query_test)) {

    $locationLat = floatval($row["RLAT"]);
    $locationLng = floatval($row["RLNG"]);


    $distance = haversineDistance($startLat, $startLng, $locationLat, $locationLng);


    if ($distance < $minDistance) {

        $minDistance = $distance;
        $nearestLocation = $row;
    }
}


if ($nearestLocation) {
    echo "สถานที่ใกล้ที่สุดจากจุดเริ่มต้น (ละติจูต: $startLat, ลองติจูต: $startLng) คือ:<br>";
    echo "ชื่อร้าน: " . $nearestLocation["restuarant_name"] . "<br>";
    echo "ละติจูต: " . $nearestLocation["RLAT"] . "<br>";
    echo "ลองติจูต: " . $nearestLocation["RLNG"] . "<br>";
    echo "ระยะทาง: " . $minDistance . " กิโลเมตร";
    } else {
    echo "ไม่พบสถานที่ใกล้ที่สุด";
    }
    
    $conn->close();
    ?>


