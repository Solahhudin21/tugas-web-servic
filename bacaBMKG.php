<?php
$url="https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.xml";
$mahasiswa= new SimpleXMLElement ($url,null,true);
echo "<pre>";print_r($mahasiswa);
echo "<h2> Data Gempa BMKG </h2>";
//lanjutkan baca objek erray
//Nim  : 12211865
//Nama : Solahhudin
$tmp="<table border='1'>";
$tmp.="<tr><td><b>tanggal</b></td><td><b>jam</b></td><td><b>DateTime</b></td><td><b>Coordinates</b></td><td><b>Lintang</b></td><td><b>Bujur</b></td><td><b>Magnitude</b></td><td><b>Kedalaman</b></td><td><b>Wilayah</b></td><td><b>dirasakan</b></td>";
for($i=0;$i<count($mahasiswa->gempa);$i++){
    $tmp.="<tr><td>{$mahasiswa->gempa[$i]->Tanggal}</td>
    <td><b>{$mahasiswa->gempa[$i]->Jam}</b><br>
    <td><b>{$mahasiswa->gempa[$i]->DateTime}</b><br>
    <td><b>{$mahasiswa->gempa[$i]->point->coordinates}</b><br>
    <td><b>{$mahasiswa->gempa[$i]->Lintang}</b><br>
    <td><b>{$mahasiswa->gempa[$i]->Bujur}</b><br>
    <td><b>{$mahasiswa->gempa[$i]->Magnitude}</b><br>
    <td><b>{$mahasiswa->gempa[$i]->Kedalaman}</b><br>
    <td><b>{$mahasiswa->gempa[$i]->Wilayah}</b><br>
    <td><b>{$mahasiswa->gempa[$i]->Dirasakan}</b><br>";

    }
$tmp.="</table";
echo $tmp;

?>
