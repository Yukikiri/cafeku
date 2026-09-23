<div class='main'>
    <p class= 'judultabel'>daftarpengguna.php</p>
    <?php
    include("Pengguna/select.php");
    ?>
    <table class='tabel'>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Aksi</th>
</tr>
<?php
for ($i=0; $i < count ($datas); $i++) {
?>
<tr>
    <td><?php echo $i + 1; ?></td>
    <td><?php echo $datas[$i]['nama'] ?></td>
    <td><?php echo $datas[$i]['username'] ?></td>
    <td><?php echo $datas[$i]['alamat'] ?></td>
    <td><?php echo $datas[$i]['nohp'] ?></td>
    <td></td>
</tr>
<?php
}
?>
</table>
</div>