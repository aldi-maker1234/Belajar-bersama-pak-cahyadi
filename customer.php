<?php
// Class Customer
class Customer {
    public $namaCustomer;
    public $alamat;
    public $telepon;
    public $email;
    public $pembelian;

    // Constructor untuk inisialisasi properties/atribut
    public function __construct($namaCustomer = '', $alamat = '', $telepon = '', $email = '', $pembelian = 0) {
        $this->namaCustomer = $namaCustomer;
        $this->alamat = $alamat;
        $this->telepon = $telepon;
        $this->email = $email;
        $this->pembelian = $pembelian;
    }

    // Fungsi untuk menampilkan data pelanggan
    public function tampilkanDataCustomer() {
        return "Nama: $this->namaCustomer, Alamat: $this->alamat, Telepon: $this->telepon, Email: $this->email";
    }
}

// Inisialisasi variabel customer dan hasil
$customer = null;
$outputCustomer = "";

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Buat instance Customer dengan data dari form
    $customer = new Customer(
        $_POST['namaCustomer'],
        $_POST['alamat'],
        $_POST['telepon'],
        $_POST['email'],
        intval($_POST['pembelian'])
    );

    // Menampilkan data customer
    $outputCustomer = $customer->tampilkanDataCustomer();
}
?>