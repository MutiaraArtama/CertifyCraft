<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UmkmDataModel;
use \Dompdf\Dompdf;

class Admin extends BaseController
{
    protected $umkmdataModel;
    protected $session;

    public function __construct()
    {
        $this->umkmdataModel = new UmkmDataModel();
        $this->session = \Config\Services::session();
        $this->session->start();

        if (!$this->session->get('umkmdata')) {
            $this->session->set('umkmdata');
        }
    }

    public function index()
    {
        //$Admin = $this->umkmdataModel->findAll();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $umkm = $this->umkmdataModel->search($keyword);
        } else {
            $umkm = $this->umkmdataModel->orderBy('id', 'DESC');
        }

        $data = [
            'tittle' => "Data List",
            'umkmdata' => $umkm->paginate(50, 'umkmdata'),
            'pager' => $this->umkmdataModel->pager
        ];


        return view('umkmdata/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */

    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function create()
    {
        $data = [
            'tittle' => "Add Data"
        ];

        return view('umkmdata/upload', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
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
        return redirect()->to('/Admin');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $data = [
            'tittle' => "Edit Data",
            'Admin' => $this->umkmdataModel->getUmkmData($id)
        ];
        echo view('umkmdata/edit', $data);

    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id)
    {
        $data = [
            "jenisproduk1" => $this->request->getPost('jenisproduk1'),
            "jenisproduk2" => $this->request->getPost('jenisproduk2'),
            "jenisproduk3" => $this->request->getPost('jenisproduk3'),
            "jenisproduk4" => $this->request->getPost('jenisproduk4'),
            "akunnib" => $this->request->getPost('akunnib'),
            "akunhalal" => $this->request->getPost('akunhalal'),
            "kendala" => $this->request->getPost('kendala'),
            "pengajuan" => $this->request->getPost('pengajuan'),
        ];
        $this->umkmdataModel->update($id, $data);

        return redirect()->to('/Admin');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id)
    {
        $this->umkmdataModel->delete($id);
        return redirect()->to('/Admin');
    }

    public function exportToCSV()
    {
        // Mengambil data dari model atau sumber data lainnya
        $umkm = $this->umkmdataModel->findAll();

        // Nama file CSV yang akan dihasilkan
        $filename = 'data_UMKM' . '.csv';

        // Membuka file CSV dan menulis data
        $file = fopen($filename, 'w');
        fputcsv(
            $file,
            array(
                'Tanggal',
                'NIK',
                'Nama',
                'Jenis_Kelamin',
                'Alamat',
                'Kelurahan',
                'Kecamatan',
                'Kota',
                'Kodepos',  
                'Nama_Usaha',
                'Produk1',
                'Jenis_Produk1',
                'Produk2',
                'Jenis_Produk2',
                'Produk3',
                'Jenis_Produk3',
                'Produk4',
                'Jenis_Produk4',
                'Status_Akun_NIB',
                'Status_Akun_Halal',
                'Kendala',
                'Jumlah_Pengajuan',
            )
        ); // Menulis header kolom

        foreach ($umkm as $row) {
            fputcsv(
                $file,
                array(
                    $row['tanggal'], $row['nik'], $row['nama'], $row['kelamin'], $row['alamat'],
                    $row['kelurahan'], $row['kecamatan'], $row['kota'], $row['kodepos'], 
                    $row['merek'], $row['produk1'], $row['jenisproduk1'], $row['produk2'], 
                    $row['jenisproduk2'], $row['produk3'], $row['jenisproduk3'],
                    $row['produk4'], $row['jenisproduk4'], $row['akunnib'],  $row['akunhalal'], 
                    $row['kendala'], $row['pengajuan'],
                )
            ); // Menulis data
        }

        // Menutup file CSV
        fclose($file);

        // Mengirimkan file CSV sebagai respons ke browser
        return $this->response->download($filename, null)->
            setFileName($filename)->setContentType('application/csv')->setHeader('Expires', '0');
    }

    public function viewpdf()
    {
        $umkm = $this->umkmdataModel->findAll();
        $data = [
            'umkmdata' => $umkm
        ];
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('umkmdata/view', $data));
        $dompdf->setPaper('A3', 'landscape');
        $dompdf->render();

        $output = $dompdf->output();

        $response = $this->response->setHeader('Content-Type', 'application/pdf');
        $response->setBody($output);

        return $response;
    }
}