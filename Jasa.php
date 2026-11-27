<?php

namespace Pbo\Marketplace;

require_once('./property.php');

use Pbo\Marketplace\produk;

class Jasa {

    use Produk;

    public function payment($tipe) {

        return match($tipe) {
            "virtual" => "Virtual Account",
            "qris" => "QRIS",
            default => "pembayaran hanya bisa va dan qris"
        };
    }

}