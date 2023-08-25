<?php

namespace App\Controllers;

use App\Models\UmkmDataModel;

class Home extends BaseController
{
    protected $umkmdataModel;
    protected $session;

    public function __construct()
    {
        $this->umkmdataModel = new UmkmDataModel();
        $this->session = \Config\Services::session(); // Tambahkan ini
    }
    public function index()
    {
        $umkmdata = $this->umkmdataModel->findAll();
        $jumlah_baris = $this->umkmdataModel->countAll(); // Menghitung jumlah baris pada tabel
        $jumlah_double = $this->umkmdataModel->where('akunnib', 'double')->countAllResults();

        // Menghitung jumlah kolom akun nib
        $jumlah_selesai = $this->umkmdataModel->where('akunnib', 'selesai')->countAllResults();
        $jumlah_tidaklanjut = $this->umkmdataModel->where('akunnib', 'tidak bisa dilanjut')->countAllResults();
        $jumlah_belum = $this->umkmdataModel->where('akunnib', 'belum')->countAllResults();
        $jumlah_sudah = $this->umkmdataModel->where('akunnib', 'sudah')->countAllResults();

        // Menghitung jumlah kolom akun halal
        $jumlah_selesai2 = $this->umkmdataModel->where('akunhalal', 'selesai')->countAllResults();
        $jumlah_tidaklanjut2 = $this->umkmdataModel->where('akunhalal', 'tidak bisa dilanjut')->countAllResults();
        $jumlah_belum2 = $this->umkmdataModel->where('akunhalal', 'belum')->countAllResults();
        $jumlah_sudah2 = $this->umkmdataModel->where('akunhalal', 'sudah')->countAllResults();

        $hasil_pengurangan = $jumlah_baris - $jumlah_double;



        $jumlah_per_kecamatan = $this->umkmdataModel->select('COUNT(id) AS jumlah, kecamatan')
        ->groupBy('kecamatan')
        ->findAll();

        $jumlah_per_jnsklmn = $this->umkmdataModel->select('COUNT(id) AS jumlah, kelamin')
        ->groupBy('kelamin')
        ->findAll();


        $data = [
            'tittle' => "Dashboard",
            'umkmdata' => $umkmdata,
            'jumlah' => $jumlah_baris,
            'jumlah_double' => $jumlah_double,
            'jumlah_data' => $hasil_pengurangan,
            //data untuk nib
            'jumlah_selesai' => $jumlah_selesai,
            'jumlah_tidaklanjut' => $jumlah_tidaklanjut,
            'jumlah_belum' => $jumlah_belum,
            'jumlah_sudah' => $jumlah_sudah,
            //data untuk halal
            'jumlah_selesai2' => $jumlah_selesai2,
            'jumlah_tidaklanjut2' => $jumlah_tidaklanjut2,
            'jumlah_belum2' => $jumlah_belum2,
            'jumlah_sudah2' => $jumlah_sudah2,
            'thread_per_jnsklmn' => $jumlah_per_jnsklmn,
            'thread_per_kategori' => $jumlah_per_kecamatan,
        ];

       $userRoleId = $this->session->get('role');
        
        if ($userRoleId == 2) {
            return view('homeadmin', $data);
        } else {
            return view('home', $data);
        }
    }
}