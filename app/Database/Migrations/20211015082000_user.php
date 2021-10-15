<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up(){
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'constraint'=>11,
                'unsigned'=>TRUE,
                'auto_increment'=>TRUE,
            ],
            'username'=>[
                'type'=>'VARCHAR',
                'constraint'=>100,
            ],
            'password'=>[
                'type'=>'TEXT',
            ],
            'salt'=>[
                'type'=>'TEXT',
            ],
            'avatar'=>[
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
        $this->forge->createTable('user');
    }

    public function down(){
        $this->forge->dropTable("user");
    }
} ?>