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
$data = new Siswa("Zaidan", 17, 12);
echo "<br>";
echo $data->data();
