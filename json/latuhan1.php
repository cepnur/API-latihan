<?php 
// $mahasiswa = 
// [
//     [
//     "nama" => "cepnur al",
//     "nrp" => "20200040078",
//     "email" => "muhamadcepnur@gmail.com"
// ],
// [
//     "nama" => "cepnur al",
//     "nrp" => "20200040078",
//     "email" => "muhamadcepnur@gmail.com"
// ]
// ];

$dbh = new PDO('mysqli:host=localhost;dbname=maslakunnidzom', 'root','');
$db = $dbh->prepare(' SELECT * FROM santri');
$db->execute();
$santri = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($santri);
echo($data);

?>