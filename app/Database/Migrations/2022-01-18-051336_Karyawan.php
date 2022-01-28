<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Karyawan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_karyawan' => [
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'tempat' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'ttl' => [
                'type' => 'DATE',
            ],
            'alamat' => [
                'type' => 'text',
            ],
            'tlp' => [
                'type' => 'VARCHAR',
                'constraint' => 13
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'foto' => [
                'type' => 'text',
            ],
            'id_jabatan' => [
                'type' => 'INT',
                'constraint' => 11
            ],
            'id_subjabatan' => [
                'type' => 'INT',
                'constraint' => 11
            ],
        ]);
        $this->forge->addKey('id_karyawan', true);
        $this->forge->createTable('karyawan');
    }

    public function down()
    {
        $this->forge->dropTable('karyawan');
    }
}
