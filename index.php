<?php

require('./property.php');

use Pbo\marketplce\Produk;

//  objek

$produk = new produk();

$produk->setKode('P0001')->setNama('Laptop')->setHarga(10000000)->setStok(5);

//hasil
echo"produk:" .$produk->getNama();
echo"<br>";

echo"Harga:Rp." .$produk->getHarga();
echo"<br>";

echo"stok:" .$produk->getStok();
echo"<br>";

echo"Pajak:" .$produk->pajak()."%";
echo"<br>";

echo "Total harga setelah pajak: Rp. ". $produk->total();
