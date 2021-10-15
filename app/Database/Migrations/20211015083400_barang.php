<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Barang extends Migration
{
    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE
            ],
            'nama'=>[
                'type'=>'TEXT',
            ],
            'slug'=>[
                'type'=>'TEXT',
            ],
            'harga'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'stock'=>[
                'type'=>'INT',
                'constraint'=>11,
            ],
            'gambar'=>[
                'type'=>'TEXT',
                'null'=>TRUE,
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
                'null'=>TRUE,
            ],
            'updated_by'=>[
                'type'=>'INT',
                'constraint'=>11,  
                'null'=>TRUE,
            ],
            'deleted_at'=>[
                'type'=>'DATETIME',
                'null'=>TRUE,
            ],
            'deleted_by'=>[
                'type'=>'INT',
                'constraint'=>11, 
                'null'=>TRUE,
            ],
        ]);
        $this->forge->addKey('id',TRUE);
        $this->forge->createTable('barang');
    }

    public function down(){
        $this->forge->dropTable("barang");
    }
} ?>