<?php

namespace App\Controllers;
use App\Models\UmkmDataModel;

class Form extends BaseController
{

    //Inheritance
    protected $umkmdataModel;

    public function __construct()
    {
        $this->umkmdataModel = new UmkmDataModel();
        $this->session = \Config\Services::session();
        $this->session->start();

        if (!$this->session->get('umkmdata')) {
            $this->session->set('umkmdata');
        }
    }

    //Method Read
    public function index()
    {
        $umkm = $this->umkmdataModel;

        $data = [
            'tittle' => "Data List",
            'umkmdata' => $umkm
        ];

        return view('/main/baseMain', $data);
    }

    //Method Save
    public function save()
    {
        if (
            !$this->validate([
                'tanggal' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Tanggal Tidak boleh kosong'
                    ]
                ],
                'nik' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'NIK Tidak boleh kosong'
                    ]
                ],
                'nama' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Tidak boleh kosong'
                    ]
                ],
                'kelamin' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Jenis Kelamin Tidak boleh kosong'
                    ]
                ],
                'alamat' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Alamat Tidak boleh kosong'
                    ]
                ],
                'kodepos' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kode Pos Tidak boleh kosong'
                    ]
                ],
                'kelurahan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kelurahan Tidak boleh kosong'
                    ]
                ],
                'kecamatan' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kecamatan Tidak boleh kosong'
                    ]
                ],
                'kota' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Kota Tidak boleh kosong'
                    ]
                ],
                'merek' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Nama Usaha/Merek Tidak boleh kosong'
                    ]
                ],
                'produk1' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Produk 1 Tidak boleh kosong'
                    ]
                ]
            ])
        ) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $data = [
            "tanggal" => $this->request->getPost('tanggal'),
            "nik" => $this->request->getPost('nik'),
            "nama" => $this->request->getPost('nama'),
            "kelamin" => $this->request->getPost('kelamin'),
            "alamat" => $this->request->getPost('alamat'),
            "kelurahan" => $this->request->getPost('kelurahan'),
            "kecamatan" => $this->request->getPost('kecamatan'),
            "kota" => $this->request->getPost('kota'),
            "kodepos" => $this->request->getPost('kodepos'),
            "merek" => $this->request->getPost('merek'),
            "produk1" => $this->request->getPost('produk1'),
            "produk2" => $this->request->getPost('produk2'),
            "produk3" => $this->request->getPost('produk3'),
            "produk4" => $this->request->getPost('produk4'),
            "akunnib" => $this->request->getPost('akunnib'),
            "akunhalal" => $this->request->getPost('akunhalal'),  
        ];
        $this->umkmdataModel->insert($data);
        session()->setFlashdata('success', 'Data Berhasil diupload');
        return redirect()->to('/Form');
    }
}
