<?php include 'customer.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Customer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h3 {
            text-align: center;
            color: #333;
        }
        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #5cb85c;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #4cae4c;
        }
        .output {
            margin-top: 20px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 4px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Form input untuk menguji -->
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
    <?php if (!empty($outputCustomer)): ?> 
        <div class="output">
            <h3>Informasi Customer</h3>
            <table>
                <tr>
                    <th>Label</th>
                    <th>Informasi</th>
                </tr>
                <?php foreach ($outputCustomer as $key => $value): ?>
                    <tr>
                        <td><?php echo $key; ?></td>
                        <td><?php echo $value; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
