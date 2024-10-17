<?php

class Produk
{
    public $produk;
    public $price;

    function setProduk($name, $price)
    {
        $this->produk = $name;
        $this->price = $price;
    }
    function getProduk()
    {
        return "name : " . $this->produk . ", price : " . $this->price;
    }
}
$buku = new Produk();
$pulpen = new Produk();

$buku->setProduk("buku", 2000);
$pulpen->setProduk("pulpen", 2000);

echo $buku->getProduk();
echo "<br>";
echo $pulpen->getProduk();

class Jualan
{
    public $produk;
    public $jenis;
    public $harga;

    function set($produk, $jenis, $harga)
    {
        $this->produk = $produk;
        $this->jenis = $jenis;
        $this->harga = $harga;
    }
    function write()
    {
        return "Nama barang : " . $this->produk . ", jenis : " . $this->jenis . ", harga : " . $this->harga;
    }
}
$barang1 = new Jualan();
$barang2 = new Jualan();

$barang1->set("cimory", "blueberry", 8000);
$barang2->set("kin", "plan", 10000);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <li><?= $barang1->write() ?></li>
        <li><?= $barang2->write() ?></li>
    </ul>
</body>

</html>