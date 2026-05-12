<?php

/**
 * Configuration for database connection
 *
 */

$host       = "sql301.infinityfree.com";
$username   = "if0_41903460";
$password   = "Zu8DFKTj3r3lMU4";        
$dbname     = "if0_41903460_testdb";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );