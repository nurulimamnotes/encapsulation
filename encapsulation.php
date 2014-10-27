<?php
/*
* Aksesbilitas Property & Method dengan Encapsulation
*/
class Mahasiswa
{
  public $nim;
  private $nama;
  protected $nilai;

  function __construct($nim, $nama, $nilai)
  {
    $this->nim = $nim;
    $this->nama = $nama;
    $this->nilai = $nilai;
  }

  private function StatusNilai()
  {
    if ($this->nilai >= 70) {
      $status = "Lulus";
    } else {
      $status = "Gagal";
    }
    return $status;
  }
  public function BacaStatus()
  {
    echo $this->StatusNilai;
  }
}
/*
$mahasiswa = new Mahasiswa(11212262, 'Nurul Imam', 90);
echo "NIM : ".$mahasiswa->nim."<br />";
echo "Nama : ".$mahasiswa->nama."<br />";
echo "Nilai : ".$mahasiswa->nilai."<br />";
echo "Status : ".$mahasiswa->StatusNilai()."<br />";
*/

/*
* Perbaikan Private Property
*/
class MahasiswaUnsera
{
  public $nim;
  private $nama;
  protected $nilai;

  function __construct($nim, $nama, $nilai)
  {
    $this->nim = $nim;
    $this->nama = $nama;
    $this->nilai = $nilai;
  }

  protected function StatusNilai()
  {
    if ($this->nilai >= 70) {
      $status = "Lulus";
    } else {
      $status = "Gagal";
    }
    return $status;
  }

  // Membuat Method Untuk Memanggil Property Private ($nama)
  public function BacaNama()
  {
    return $this->nama;
  }
  // Membuat Method Untuk Memanggil Property Private ($nama)
  public function BacaNilai()
  {
    return $this->nilai;
  }
}

$mahasiswa = new MahasiswaUnsera(11212262, 'Nurul Imam', 90);
/*
echo "NIM : ".$mahasiswa->nim."<br />";
echo "Nama : ".$mahasiswa->BacaNama()."<br />";
echo "Nilai : ".$mahasiswa->BacaNilai()."<br />";
echo "Status : ".$mahasiswa->StatusNilai()."<br />";
*/

/*
* Perbaikan Protected Method
*/
class MahasiswaUntirta
{
  public $nim;
  private $nama;
  protected $nilai;

  function __construct($nim, $nama, $nilai)
  {
    $this->nim = $nim;
    $this->nama = $nama;
    $this->nilai = $nilai;
  }

  protected function StatusNilai()
  {
    if ($this->nilai >= 70) {
      $status = "Lulus";
    } else {
      $status = "Gagal";
    }
    return $status;
  }

  // Membuat Method Untuk Memanggil Property Private ($nama)
  public function BacaNama()
  {
    return $this->nama;
  }
  // Membuat Method Untuk Memanggil Property Private ($nama)
  public function BacaNilai()
  {
    return $this->nilai;
  }
}

/**
* Class Turunan Mahasiswa dengan nama class Nilai
*/
class Nilai extends MahasiswaUntirta
{
  public $status;

  public function BacaStatus()
  {
    $this->status = $this->StatusNilai();
    return $this->status;
  }
}

$turunan = new Nilai(11212262, 'Nurul Imam', 90);

echo "NIM : ".$turunan->nim."<br />";
echo "Nama : ".$turunan->BacaNama()."<br />";
echo "Nilai : ".$turunan->BacaNilai()."<br />";
echo "Status : ".$turunan->BacaStatus()."<br />";
?>