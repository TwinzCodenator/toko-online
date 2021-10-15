<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Komentar extends Migration
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
            'id_user'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
            ],
            'komentar'=>[
                'type'=>'TEXT',
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
        $this->forge->addForeignKey('id_user','user','id');
        $this->forge->addForeignKey('id_barang','barang','id');
        $this->forge->createTable('komentar');
    }

    public function down(){
        $this->forge->dropTable("komentar");
    }
} ?>