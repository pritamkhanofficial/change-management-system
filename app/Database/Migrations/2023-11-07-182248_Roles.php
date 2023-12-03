<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
    public function up()
    {
        $this->db->query("CREATE TABLE `roles` (
            `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
            `role_name` varchar(255) NOT NULL,
            `created_at` datetime DEFAULT current_timestamp(),
            `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
            `deleted_at` datetime NULL DEFAULT NULL,
            `created_by` bigint(30) unsigned DEFAULT NULL,
            `updated_by` bigint(30) unsigned DEFAULT NULL,
            PRIMARY KEY (`id`),
            UNIQUE KEY `uq_role_name` (`role_name`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");
    }

    public function down()
    {
        $this->forge->dropTable('roles',true);
    }
}
