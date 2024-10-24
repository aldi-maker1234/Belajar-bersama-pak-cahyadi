<?php require 'produk2.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok Akhir Produk</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 20px;
    text-align: center;
}

h1 {
    color: #333;
}

form {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
    max-width: 400px;
    margin: 20px auto;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
    color: #555;
}

input[type="number"] {
    width: calc(100% - 22px);
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 12px 20px;
    font-size: 16px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

h2 {
    color: #4CAF50;
}

    </style>
</head>
<body>
    
    <h1>Stok Akhir Produk</h1>

    <form method="POST" action="">
        <label for="stok">Stok Awal:</label>
        <input type="number" id="stok" name="stok" required>

        <br><br><label for="pembelian">Jumlah Pembelian:</label>
        <input type="number" id="pembelian" name="pembelian">

        <br><br><input type="submit" value="Hitung Stok Akhir">
    </form>

    <?php if ($Stokakhir !== null):?>
        <h2>Stok Akhir: <?php echo $Stokakhir; ?></h2>
    <?php endif;?>
</body>
</html>