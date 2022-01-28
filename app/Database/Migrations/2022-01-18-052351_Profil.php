<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Profil extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_sekolah' => [
                'type' => 'INT',
                'constraint' => 20,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'nama_sekolah' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            'tlp' => [
                'type' => 'VARCHAR',
                'constraint' => 20
            ],
            'alamat' => [
                'type' => 'text',
            ],
            'kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'kabupaten' => [
                'type' => 'VARCHAR',
                'constraint' => 50
            ],
            'kodepos' => [
                'type' => 'VARCHAR',
                'constraint' => 10
            ],
            'logo' => [
                'type' => 'text',
            ]
        ]);

        $this->forge->addKey('id_sekolah', true);
        $this->forge->createTable('profil');
    }

    public function down()
    {
        $this->forge->dropTable('profil');
    }
}
