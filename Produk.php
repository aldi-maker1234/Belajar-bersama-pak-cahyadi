<?php
$angka1 = 6;
$angka2 = 1;
$angka3 = $angka1 + $angka2;
$operasi = "-";

switch($operasi){
case "+":
echo $angka3;
break;

case "-":
echo $angka2 - $angka1;
break;

default:
    echo "pilih salah satu operator";
}
?>
<?php
$angka4 = 7;
$angka5 = 14;
$angka6 = $angka4 * $angka5;
$angka7 = $angka5 / $angka4;
$operation1 = "*";
echo " <br> Hasil: ".$angka4 * $angka5;

switch($operation1){
   case "<br> *":
   echo $angka6;

   case "/":
   echo $angka7;

default:
echo "<br> pilih salah satu operator";
}
?>
<?php
$favcolor1 = "red";
$favcolor2 = "blue";

switch ($favcolor1) {
  case "red":
    echo "<br> Your favorite color is red!";
    break;
    switch ($favcolor2) {
  case "blue":
    echo "<br> Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
}
echo "<br>";
echo "Hello";
?>
<?php
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "<br> Your favorite color is red!";
  case "blue":
    echo "<br> Your favorite color is blue!";
  case "green":
    echo "<br> Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
<?php
$d = 4;

switch ($d) {
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
    break;
  default:
    echo "<br> Looking forward to the Weekend";
}
?>
<?php
class Produk{

public $namaProduk ;
public $jenisProduk;
public $jumlahProduk;
public $stok;
public $pembelian;

public function stokAkhirProduk (){
  $this->stok = ($this->stok - $this->pembelian);
  return $this->stok;
}

}

$panggilProduk = new Produk ();
$panggilProduk -> stok = 50;
$panggilProduk -> pembelian = 10;
echo $panggilProduk -> stokAkhirProduk ();
?>