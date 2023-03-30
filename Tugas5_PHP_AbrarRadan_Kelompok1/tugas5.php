<?php
class Pegawai {
    protected $nip;
    public $nama;
    private $jabatan;
    private $agama;
    private $status;
    static $jml = 0;
    const PT = 'PT. HTP Indonesia';

    public function __construct($nip,$nama,$jabatan,$agama,$status) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        self::$jml++;
    }

    public function setGajiPokok($jabatan) {
        $this->jabatan = $jabatan;
        switch($jabatan) {
            case 'manager' : $gapok = 15000000; break;
            case 'asisten manager' : $gapok = 10000000; break;
            case 'kepala bagian' : $gapok = 7000000; break;
            case 'staff' : $gapok = 5000000; break;
            default: $gapok;
        }
        return $gapok;
    }

    public function tunJab() {
        $tunjab = 0.2 * $this->setGajiPokok($this->jabatan);
        return $tunjab;
    }

    public function tunKel() {
        $tunkel = $this->status == "menikah" ? (0.1 * $this->setGajiPokok($this->jabatan)) : 0;
        return $tunkel;
    }

    public function setZakatProfesi() {
        $gakot = $this->setGajiPokok($this->jabatan) + $this->tunJab() + $this->tunKel();
        $zakat_profesi = $zakat = $this->agama == "muslim" && $gakot >= 6000000 ? (0.025 * $gakot) : 0;
        return $zakat_profesi; 
    }

    public function gajiBersih() {
        $gaji_bersih = ($this->setGajiPokok($this->jabatan) + $this->tunJab() + $this->tunKel()) - $this->setZakatProfesi() ;
        return $gaji_bersih;
    }

    public function cetak() {
        echo 'NIP Pegawai : '.$this->nip;
        echo '<br> Nama Pegawai : '.$this->nama;
        echo '<br> Jabatan : '.$this->jabatan;
        echo '<br> Agama : '.$this->agama;
        echo '<br> Status : '.$this->status;
        echo '<br> Gaji Pokok : Rp.'.number_format($this->setGajiPokok($this->jabatan),0,',','.');
        echo '<br> Tunjangan Jabatan : Rp.'.number_format($this->tunJab(),0,',','.');
        echo '<br> Tunjangan Keluarga : Rp.'.number_format($this->tunKel(),0,',','.');
        echo '<br> Zakat : Rp.'.number_format($this->setZakatProfesi(),0,',','.');
        echo '<br> Gaji Bersih : Rp.'.number_format($this->gajiBersih(),0,',','.');
        echo '<hr>';
    }
}
?>
