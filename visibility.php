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
