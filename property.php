<?php

class Produk{

    //property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;

    public function pajak(){
        return self::PAJAK* 100;

    }
public function total(){
    return $this->harga + ($this->harga * self::PAJAK);
}
}

//object
$Produk = new Produk();
$Produk ->kode = 'P001';
$Produk ->nama = 'laptop';
$Produk ->harga = 10000000;
$Produk ->stok = 5;


//hasil 
echo "Produk:". $Produk->nama;
echo"<br/>";

echo "harga:". $Produk->harga;
echo"<br/>";

echo "stok:". $Produk->stok;
echo"<br/>";

echo "pajak:". $Produk->pajak() . "%";
echo"<br/>";

echo "Total harga setelah pajak: Rp. ". $Produk->total();