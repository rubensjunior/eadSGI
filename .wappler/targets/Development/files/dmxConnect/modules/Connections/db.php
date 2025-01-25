<?php
// Database Type : "PostgreSQL"
// Database Adapter : "postgres"
$exports = <<<'JSON'
{
    "name": "db",
    "module": "dbconnector",
    "action": "connect",
    "options": {
        "server": "postgres",
        "databaseType": "PostgreSQL",
        "connectionString": "pgsql:dbname=rubensbe_spacefeed;user=rubensbe_master;password=@Baki025;host=pro114.dnspro.com.br;port=5432"
    }
}
JSON;
?>