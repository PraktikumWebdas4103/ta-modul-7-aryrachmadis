<?php
include "koneksi.php";
$sql = mysqli_query($con,"SELECT * FROM jurnal7");
?>
<form action="" method=POST>
 <label>Cari :</label>
    <input type="text" name="cari">
    <input type="submit" value="Cari">

    <?php 
if(isset($_POST['cari'])){
    $cari = $_POST['cari'];
    echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<table border="1">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
    </tr>
    <?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        $data = mysql_query("select * from jurnal7 where nama like '%".$cari."%'");             
    }else{
        $data = mysql_query("select * from jurnal7");       
    }
    $no = 1;
    while($d = mysql_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nama']; ?></td>
    </tr>

</table>

    <table border="1" cellpadding="0" cellspacing="0">


        <tr>
            <th>No</th>
            <th>nama</th>
            <th>nim</th>
            <th>jenis kelamin</th>
            <th>program studi</th>
            <th>fakultas</th>
            <th>asal</th>
            <th>moto hidup</th>
            <th>action</th>
        </tr>


        <?php 
        if(mysqli_num_rows($sql)>0){ 
            $no = 1;
            while($data = mysqli_fetch_array($sql)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama"];?></td>
            <td><?php echo $data["nim"];?></td>
            <td><?php echo $data["jeniskelamin"];?></td>
            <td><?php echo $data["programstudi"];?></td>
            <td><?php echo $data["fakultas"];?></td>
            <td><?php echo $data["asal"];?></td>
            <td><?php echo $data["motohidup"];?></td>
            <td><a href="delete.php">Delete</a></td>
            <td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
</form>