<?php
include "koneksi.php";


// tampilkan data
$result = mysqli_query($link, "SELECT * FROM kata");
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
  $kataBaku[] = [
    "pattern" => "/(?<=~token)$row[pattern](?=token~)|(?<=~token)$row[pattern](?=(\.)token~)/i",
    "koreksi" => " $row[koreksi]",
  ];

  $baku[] = $row["koreksi"];
  $tidakbaku[] = $row["pattern"];
}

// echo "<pre>";
// print_r($daftarKata);
// echo "</pre>";


// $kataBaku = [
//
//   [
//     "pattern" => '/aktip/i',
//     "koreksi" => "praktik",
//     "pesan" => 'Kata tidak baku',
//
//   ],
//
//   [
//     "pattern" => '/praktek/i',
//     "koreksi" => "praktik",
//     "pesan" => 'Kata tidak baku',
//
//   ],
// ];
// echo "<pre>";
// print_r($kataBaku);

mysqli_close($link);
