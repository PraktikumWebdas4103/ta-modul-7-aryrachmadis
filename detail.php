<?php$sql ="SELECT * FROM jurnal7 WHERE nim ='$nim'";

$result = $con->query($sql);

if ($result->num_rows > 0) {

 while($row = $result->fetch_assoc()) {

echo "Detail Data : <br> Nim :" . $row["nim"]. "<br>Nama :" . $row["nama"]. "<br>Jenis Kelamin :" . $row["jeniskelamin"]. "<br>Program Studi :" . $row["programstudi"]. "<br>Fakultas :" . $row["motohidup"];

}

}else {

echo "Data tidak tersedia " . $con->error;
?>