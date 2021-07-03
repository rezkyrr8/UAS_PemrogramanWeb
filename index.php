<?php
include "koneksi.php";
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>JUDUL WEBSITE ANDA</title>
</head>
<body>
<h1 align="center"> Daftar Admin</h1>
    <table border="1" width="600px" align="center">
       <thead>
       <tr>
           <th>Nama Admin</th>
           <th>Email</th>
           <th>Level Admin</th>
       </tr>
       </thead>

       <tbody>
<?php
//ambil data dari tb_admin di database
$ambildata=mysqli_query($conect, "SELECT * FROM tb_admin order by id_admin desc");
while($a=mysqli_fetch_array($ambildata)){
    ?>
       <tr>
           <td><?php echo $a['nama_admin'];?></td>
           <td><?php echo $a['email_admin'];?></td>
           <td><?php echo $a['level_admin'];?></td>
       </tr>
<?php
}
?>
</tbody>

</table>

</body>
</html>
