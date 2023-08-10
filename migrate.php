<?php
require_once 'db/Connect.php';

$migrations = scandir(__DIR__ . 'migrations');

foreach ($migrations as $migration) {
    if ($migration === '.' || $migration === '..') {
        continue;
    }

    require_once 'migrations/' . $migration;
    echo "Executada a migração: $migration\n";
}
?>
