<?php

namespace App\Models;

use CodeIgniter\Model;

class UmkmDataModel extends Model
{
    protected $DBGroup = 'default';
    protected $table = 'umkmdata';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = ['tanggal', 'nik', 'nama', 'kelamin', 'alamat', 'kelurahan', 'kecamatan', 'kota', 'kodepos', 'merek', 'produk1', 'jenisproduk1', 'produk2', 'jenisproduk2', 'produk3', 'jenisproduk3', 'produk4', 'jenisproduk4',  'akunnib', 'akunhalal', 'kendala', 'pengajuan'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [];
    protected $beforeDelete = [];
    protected $afterDelete = [];

    public function getData()
    {
        $query = $this->table('umkmdata')->query('select * from umkmdata');
        return $query->getResult();
    }

    public function getUmkmData($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function search($keyword)
    {
        return $this->table('umkmdata')->like('nama', $keyword)->
            orLike('kecamatan', $keyword)->orLike('alamat', $keyword);
    }

    public function getPDFData()
    {
        return $this->select('id')->findAll();
    }

    
}