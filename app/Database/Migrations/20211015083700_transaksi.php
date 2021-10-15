<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'id_barang'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
            ],
            'id_pembeli'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
            ],
            'jumlah'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'total_harga'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'created_at'=>[
                'type'=>'DATETIME',
            ],
            'created_by'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'updated_at'=>[
                'type'=>'DATETIME',
                'null'=>TRUE
            ],
            'updated_by'=>[
                'type'=>'INT',
                'constraint'=>11,  
                'null'=>TRUE 
            ],
            'deleted_at'=>[
                'type'=>'DATETIME',
                'null'=>TRUE
            ],
            'deleted_by'=>[
                'type'=>'INT',
                'constraint'=>11, 
                'null'=>TRUE  
            ],
        ]);
        $this->forge->addKey('id',TRUE);
        $this->forge->addForeignKey('id_pembeli','user','id');
        $this->forge->addForeignKey('id_barang','barang','id');
        $this->forge->createTable('transaksi');
    }

    public function down(){
        $this->forge->dropTable("transaksi");
    }
} ?>