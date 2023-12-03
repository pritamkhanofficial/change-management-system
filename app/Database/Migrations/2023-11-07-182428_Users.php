<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->db->query("CREATE TABLE `users` (
            `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            `role_id` int(10) unsigned DEFAULT NULL,
            `username` varchar(255) NOT NULL,
            `email` varchar(255) NOT NULL,
            `password` varchar(255) NOT NULL,
            `mobile` varchar(20) DEFAULT NULL,
            `full_name` varchar(255) NOT NULL,
            `profile_pic` varchar(255) NOT NULL DEFAULT 'default.png',
            `generet_token` varchar(255) DEFAULT NULL,
            `generet_on` datetime DEFAULT NULL,
            `is_online` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 for no 1 for yes',
            `is_block` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 for no 1 for yes',
            `is_active` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 for no 1 for yes',
            `created_at` datetime DEFAULT current_timestamp(),
            `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
            `deleted_at` datetime NULL DEFAULT NULL,
            `created_by` bigint(20) DEFAULT NULL,
            `updated_by` bigint(20) DEFAULT NULL,
            PRIMARY KEY (`id`),
            CONSTRAINT fk_users_role_id FOREIGN KEY (role_id) REFERENCES roles(id) ON DELETE SET NULL ON UPDATE NO ACTION
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");
    }

    public function down()
    {
        $this->forge->dropTable('users',true);
    }
}
