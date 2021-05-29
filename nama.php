<?php
session_start();
  class setget{
  public $nama;
  public $names;
  public function __construct ($nama){
    $this->nama=$nama;
  }
  public function setNama($namaBaru){
  $this->nama=$namaBaru;
  }
  public function getNama(){
    return $this->nama;
  }
}
  $nama=$_SESSION['nama'];
  $jeneng = new setget($nama);
?>