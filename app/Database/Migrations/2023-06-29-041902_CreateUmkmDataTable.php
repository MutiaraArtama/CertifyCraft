<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUmkmDataTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type" => "INT",
                "unsigned" => true,
                "auto_increment" => true,
            ],
            'tanggal' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'nik' => [
                'type' => 'VARCHAR',
                "constraint" => "16",
            ],
            "nama" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "kelamin" => [
                "type" => "VARCHAR",
                "constraint" => "10",
            ],
            "alamat" => [
                "type" => "VARCHAR",
                "constraint" => "5000",
            ],
            "kelurahan" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "kecamatan" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "kota" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "kodepos" => [
                "type" => "INT",
                "constraint" => "6",
            ],
            "merek" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "produk1" => [
                "type" => "VARCHAR",
                "constraint" => "500",
            ],
            "jenisproduk1" => [
                "type" => "VARCHAR",
                "constraint" => "1000",
            ],
            "produk2" => [
                "type" => "VARCHAR",
                "constraint" => "500",
            ],
            "jenisproduk2" => [
                "type" => "VARCHAR",
                "constraint" => "1000",
            ],
            "produk3" => [
                "type" => "VARCHAR",
                "constraint" => "500",
            ],
            "jenisproduk3" => [
                "type" => "VARCHAR",
                "constraint" => "1000",
            ],
            "produk4" => [
                "type" => "VARCHAR",
                "constraint" => "500",
            ],
            "jenisproduk4" => [
                "type" => "VARCHAR",
                "constraint" => "1000",
            ],
            "akunnib" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "akunhalal" => [
                "type" => "VARCHAR",
                "constraint" => "200",
            ],
            "kendala" => [
                "type" => "VARCHAR",
                "constraint" => "500",
            ],
            "pengajuan" => [
                "type" => "INT",
                "constraint" => "10",
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('umkmdata', true); //If NOT EXISTS create table umkmdata
    }

    public function down()
    {
        $this->forge->dropTable('umkmdata', true); //If Exists drop table umkmdata
    }
}