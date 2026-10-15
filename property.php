<?php

class Produk{

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

}

//object
$Produk = new Produk();
$Produk ->kode = 'P001';
$Produk ->nama = 'laptop';
$Produk ->harga = 10000000;
$Produk ->stok = 5;

//hitung pajak
$pajak = Produk::PAJAK* 100;
$JumlahPajak = $Produk->harga * Produk::PAJAK; 

$total = $Produk->harga + $JumlahPajak;
//hasil 

echo "Produk:". $Produk->nama;
echo"<br/>";

echo "harga:". $Produk->harga;
echo"<br/>";

echo "stok:". $Produk->stok;
echo"<br/>";

echo "pajak:". $pajak . "%" ;
echo"<br/>";

echo "Total harga setelah pajak: Rp. ". $total;