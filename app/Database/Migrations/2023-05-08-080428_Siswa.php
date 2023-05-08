<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nis' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'kelas' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tanggal_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'tempat_lahir' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}