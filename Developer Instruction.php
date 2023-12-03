<?php
## Database

    /* 
        any table primary key should be name id and bigint(20) UNSIGNED
        is_active, is_deleted, created_at,created_by, updated_at, updated_by these field must be required

        is_active TINYINT(1)
        is_deleted TINYINT(1)
        created_at DATETIME timestamp
        created_by bigint(20)
        updated_at DATETIME DEFAULT NULL
        updated_by bigint(20) DEFAULT NULL

        if any table have image field then default default.png

        every table should be engine innodb
    */
?>