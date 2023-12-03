<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Category extends Migration
{
    public function up()
    {
        $this->db->query("CREATE TABLE `category` (
            `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
            `category_name` varchar(255) NOT NULL,
            `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 for no 1 for yes',
            `created_at` datetime DEFAULT current_timestamp(),
            `created_by` bigint(30) DEFAULT NULL,
            `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            `updated_by` bigint(30) DEFAULT NULL,
            `deleted_at` timestamp NULL DEFAULT NULL,
            PRIMARY KEY (`id`)
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");
    }

    public function down()
    {
        $this->forge->dropTable('users',true);
    }
}
