<?php

if (Jojo::tableExists('page') && !Jojo::fieldExists('page', 'pg_restricted')) {
    Jojo::structureQuery("ALTER TABLE `page` ADD `pg_restricted` TINYINT(1) NOT NULL default '0';");
}