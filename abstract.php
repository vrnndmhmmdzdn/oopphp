<?php
class Animal
{
    public  $nama = "",
        $spesies = "",
        $suara = "";

    public function Bersuara()
    {
        return "Hewan " . $this->nama . " dengan spesies " . $this->spesies . " bersuara " . $this->suara;
    }
}

$keledai = new Animal();
$keledai->nama = "Keledai";
$keledai->suara = "raauulll";
$keledai->spesies = "mamalia";

echo $keledai->Bersuara();

class DataMobil
{
    public $merk = "Buggati ",
        $seri = "Cyron ",
        $warna = "Biru ",
        $cc = 8000,
        $tahun = " 2020 ";

    public function lihatData()
    {
        return $this->merk . $this->seri . $this->warna . $this->cc . $this->tahun;
    }
    public function dataLengkap()
    {
        return "Mobil " . $this->merk . " dengan seri " . $this->seri . " warna " . $this->warna . ", cc : " . $this->cc . ", tahun pembuatan " . $this->tahun;
    }
}

$mobil = new DataMobil();
//echo "<br>" . $mobil->merk;
echo "<br>" . $mobil->lihatData();

$kalimat = new DataMobil();
echo "<br>" . $kalimat->dataLengkap();

class Siswa
{
    public $nama;
    public $umur;
    public $kelas;

    public function __construct($nama, $umur, $kelas)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->kelas = $kelas;
    }
    public function data()
    {
        return "Nama saya {$this->nama} umur saya {$this->umur} dan sekarang saya kelas {$this->kelas}";
    }
}
$data = new Siswa("Zaidan", "17", "12");
echo "<br>";
echo $data->data();

class Eat
{
    public function feed($makan, $makanan)
    {
        return "Siswa " . $makan->nama . " sedang makan " . $makanan . " di kelas " . $makan->kelas;
    }
}

$makan = new Eat();
echo "<br>";
echo $makan->feed($data, "nasi");

class Transportasion
{
    protected $name, $brand;

    protected function __construct($name, $brand)
    {
        $this->name = $name;
        $this->brand = $brand;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    // public function run()
    // {
    //     $str = "Kendaraan dengan merk {$this->brand} type {$this->name} telah jalan ";
    //     return $str;
    // }
    // public function stop()
    // {
    //     $str = "Kendaraan dengan merk {$this->brand} type {$this->name} telah berhenti di pemberhentian terakhir";
    //     return $str;
    // }
}
class Mobil extends Transportasion
{
    protected $pintu;
    public function __construct($name, $brand, $pintu)
    {
        parent::__construct($name, $brand);
        $this->pintu = $pintu;
    }

    public function run()
    {
        $str = "Kendaraan dengan merk {$this->brand} type {$this->name} jumlah pintu {$this->pintu} telah jalan ";
        return $str;
    }
}
class Motor extends Transportasion
{
    protected $jok;
    public function __construct($name, $brand, $jok)
    {
        parent::__construct($name, $brand);
        $this->jok = $jok;
    }
    public function run()
    {
        $str = "Kendaraan dengan merk {$this->brand} type {$this->name} jumlah jok {$this->jok} telah jalan ";
        return $str;
    }
}
class Pesawat extends Transportasion
{
    protected $nomer;
    public function __construct($name, $brand, $nomer)
    {
        parent::__construct($name, $brand);
        $this->nomer = $nomer;
    }
    public function run()
    {
        $str = "Pesawat dengan type {$this->brand} ekspedisi {$this->name} dengan nomer penerbangan {$this->nomer} telah terbang ";
        return $str;
    }
}


$mobil = new Mobil("C200", "Mercedes-Benz", 4);
$mobil2 = new Mobil("M5", "BMW", 2);
$motor = new Motor("ADV", "Honda", 1);
$pesawat = new Pesawat("Garuda Indonesia", "ekonomi", "GDS-354");
echo "<br>";
echo $mobil->run();
echo "<br>";
echo $mobil2->run();
echo "<br>";
$motor->setName("Nmax");
echo $motor->run();
echo "<br>";
$pesawat->setName("Citilink");
echo $pesawat->run();

class StatBook
{
    public static $judul, $nomer = 1;

    public static function setName($name)
    {
        self::$judul = $name;
    }
    public static function getName()
    {
        return "Nama buku " . self::$judul . " telah di beli sebanyak " . self::$nomer++ . " kali.";
    }
}
class Book
{
    public $judul, $nomer = 1;
    public function setName($name)
    {
        $this->judul = $name;
    }
    public function getName()
    {
        return "Nama buku " . $this->judul . " telah di beli sebanyak " . $this->nomer++ . " kali.";
    }
}
echo "<br>";
StatBook::$judul = "Tentang Kamu"; // = StatBook::setName("Hujan");
echo StatBook::getName();
echo "<br>";

StatBook::$judul = "Hujan"; // = StatBook::setName("Hujan");
echo StatBook::getName();
echo "<br>";

StatBook::$judul = "Hello"; // = StatBook::setName("Hujan");
echo StatBook::getName();
echo "<br>";

StatBook::$judul = "Rembulan Tenggelan Di Wajahmu"; // = StatBook::setName("Hujan");
echo StatBook::getName();
echo "<br>";


$book = new Book();
$book->setName("Tentang Kamu");
echo $book->getName();
echo "<br>";

$book = new Book();
$book->setName("Hujan");
echo $book->getName();
echo "<br>";

$book = new Book();
$book->setName("Hello");
echo $book->getName();
echo "<br>";

$book = new Book();
$book->setName("Rembulan Tenggalam Di Wajahmu");
echo $book->getName();
echo "<br>";


//magic const
// __LINE__         output : baris saat kode di tulis
// __FILE__         output : file berada
// __DIR__          output : direktori lengkap file
// __FUNCTION__     output : function kode berada
// __CLASS__        output : class kode berada
// __TRAIT__        output : trait kode berada
// __METHOD__       output : class dan method kode berada
// __NAMESPACE__    output : namespace kode berada

define("NAME", "Zaidan");

class SchoolProfile
{
    const SCHOOL = "SMA IT HSI Purworejo";
    public static function getClassName()
    {
        $data = "Sekarang berada di class " . __CLASS__ . " dan method bernama " . __FUNCTION__ . " di line " . __LINE__;
        return $data;
    }
    public static function getMethod()
    {
        $data = "Sekarang kode berada di " . __METHOD__;
        return $data;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP</title>
    <style>
        ul li {
            list-style: none;
        }
    </style>
</head>

<body>
    <ul>
        <li><?= NAME ?></li>
        <li><?= SchoolProfile::SCHOOL ?></li>
        <li><?= SchoolProfile::getClassName() ?></li>
        <li><?= SchoolProfile::getMethod() ?></li>
    </ul>
</body>

</html>