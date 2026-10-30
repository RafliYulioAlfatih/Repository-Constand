<?php

require('./property.php');

use Pbo\marketplce\Produk;

//  objek
$produk = new produk('P0001', 'Laptop','10000000', '5');


//hasil
echo"produk:" .$produk->nama;
echo"<br>";

echo"Harga:Rp." .$produk->harga;
echo"<br>";

echo"stok:" .$produk->stok;
echo"<br>";

echo"Pajak:" .$produk->pajak()."%";
echo"<br>";

echo "Total harga setelah pajak: Rp. ". $produk->total();
