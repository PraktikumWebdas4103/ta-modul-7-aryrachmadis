<?php

$nim=$_GET[‘nim’];

include”koneksi.php”;

$con -> query (“delete from tb_jurnal7 where nim='$nim'”);

header (“location: lihatdata.php”);

?>