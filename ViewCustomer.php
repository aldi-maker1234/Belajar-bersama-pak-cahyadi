<!-- Form input untuk menguji -->
<?php include 'Customer.php'; ?>
<form method="POST" action="">
    <h3>Data Customer</h3>
    Nama: <input type="text" name="namaCustomer" required><br>
    Alamat: <input type="text" name="alamat" required><br>
    Telepon: <input type="text" name="telepon" required><br>
    Email: <input type="email" name="email" required><br>
    Jumlah Pembelian: <input type="number" name="pembelian" required><br>
    <input type="submit" value="Simpan Data Customer">
</form>

<!-- Output data customer -->
<?php
if ($outputCustomer !== "") {
    echo "<h3>Informasi Customer</h3>";
    echo $outputCustomer;
}
?>